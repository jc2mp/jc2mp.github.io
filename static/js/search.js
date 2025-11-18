/**
 * JC2-MP Wiki Search Implementation
 * Ultra-compact inverted index with on-demand text loading
 */

class WikiSearch {
    constructor() {
        this.searchIndex = null;
        this.isLoading = false;
        this.isLoaded = false;
        this.textCache = new Map(); // Cache loaded text files
    }

    /**
     * Load the search index from JSON file
     */
    async loadIndex() {
        if (this.isLoaded || this.isLoading) {
            return;
        }

        this.isLoading = true;
        try {
            const response = await fetch('/search-index.json');
            if (!response.ok) {
                throw new Error('Failed to load search index');
            }
            this.searchIndex = await response.json();
            this.isLoaded = true;
        } catch (error) {
            console.error('Error loading search index:', error);
            this.searchIndex = { pages: [], words: {} };
        } finally {
            this.isLoading = false;
        }
    }

    /**
     * Derive URL from page title
     */
    titleToUrl(title) {
        return '/wiki/' + title.replace(/ /g, '_') + '.html';
    }

    /**
     * Load text content for a specific page (with caching)
     */
    async loadPageText(title) {
        const url = this.titleToUrl(title);
        if (this.textCache.has(url)) {
            return this.textCache.get(url);
        }

        try {
            const textUrl = url.replace('.html', '.txt');
            const response = await fetch(textUrl);
            if (!response.ok) {
                return '';
            }
            const text = await response.text();
            this.textCache.set(url, text);
            return text;
        } catch (error) {
            console.error(`Error loading text for ${title}:`, error);
            return '';
        }
    }

    /**
     * Tokenize text into searchable words (matches Rust implementation)
     */
    tokenize(text) {
        return text
            .toLowerCase()
            .split(/[^a-z0-9]+/)
            .filter(word => word.length >= 2);
    }

    /**
     * Extract snippet from content showing where the query appears
     */
    extractSnippet(content, query, maxLength = 150) {
        const normalizedContent = content.toLowerCase();
        const queryWords = this.tokenize(query);

        // Find the first occurrence of any query word
        let bestIndex = -1;
        for (const word of queryWords) {
            const index = normalizedContent.indexOf(word);
            if (index !== -1 && (bestIndex === -1 || index < bestIndex)) {
                bestIndex = index;
            }
        }

        if (bestIndex === -1) {
            // No query words found, return start of content
            return content.substring(0, maxLength) + (content.length > maxLength ? '...' : '');
        }

        // Calculate snippet bounds to center the query
        const snippetStart = Math.max(0, bestIndex - Math.floor(maxLength / 2));
        const snippetEnd = Math.min(content.length, snippetStart + maxLength);

        let snippet = content.substring(snippetStart, snippetEnd);

        // Add ellipsis if needed
        if (snippetStart > 0) {
            snippet = '...' + snippet;
        }
        if (snippetEnd < content.length) {
            snippet = snippet + '...';
        }

        return snippet;
    }

    /**
     * Search the index and return ranked results
     */
    search(query, limit = 20) {
        if (!query || !this.isLoaded || !this.searchIndex) {
            return [];
        }

        const queryWords = this.tokenize(query);
        if (queryWords.length === 0) {
            return [];
        }

        // Map to track page index -> total score
        const pageScores = new Map();

        // For each query word, look up pages in the inverted index
        for (const word of queryWords) {
            const pageWeights = this.searchIndex.words[word];
            if (!pageWeights) {
                continue; // Word not found in index
            }

            // Add weighted scores for each page
            for (const [pageIdx, weight] of pageWeights) {
                pageScores.set(pageIdx, (pageScores.get(pageIdx) || 0) + weight);
            }
        }

        // Convert to array with page titles
        const results = [];
        for (const [pageIdx, score] of pageScores.entries()) {
            const title = this.searchIndex.pages[pageIdx];
            if (title) {
                results.push({
                    title: title,
                    url: this.titleToUrl(title),
                    score: score,
                });
            }
        }

        // Sort by score (descending) and limit results
        results.sort((a, b) => b.score - a.score);
        return results.slice(0, limit);
    }

    /**
     * Highlight query terms in text
     */
    highlightTerms(text, query) {
        if (!query || !text) {
            return text;
        }

        const queryWords = this.tokenize(query);
        let highlightedText = text;

        // Sort query words by length (longest first) to avoid partial replacements
        queryWords.sort((a, b) => b.length - a.length);

        for (const word of queryWords) {
            if (!word) continue;

            // Create regex to match word case-insensitively (word boundaries)
            const regex = new RegExp(`\\b(${this.escapeRegex(word)})\\b`, 'gi');
            highlightedText = highlightedText.replace(regex, '<mark class="bg-yellow-200 font-semibold">$1</mark>');
        }

        return highlightedText;
    }

    /**
     * Escape special regex characters
     */
    escapeRegex(str) {
        return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    }
}

// Global search instance
const wikiSearch = new WikiSearch();

/**
 * Initialize search UI
 */
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('wiki-search-input');
    const searchResults = document.getElementById('wiki-search-results');

    if (!searchInput || !searchResults) {
        return;
    }

    // Load search index on first interaction
    let indexLoadStarted = false;
    searchInput.addEventListener('focus', async () => {
        if (!indexLoadStarted) {
            indexLoadStarted = true;
            await wikiSearch.loadIndex();
        }
    });

    // Debounce search to avoid excessive searches while typing
    let searchTimeout;
    searchInput.addEventListener('input', (e) => {
        clearTimeout(searchTimeout);

        const query = e.target.value.trim();

        if (!query) {
            searchResults.innerHTML = '';
            searchResults.classList.add('hidden');
            return;
        }

        searchTimeout = setTimeout(async () => {
            // Ensure index is loaded
            if (!wikiSearch.isLoaded) {
                await wikiSearch.loadIndex();
            }

            const results = wikiSearch.search(query);
            displaySearchResults(results, query);
        }, 300); // 300ms debounce
    });

    // Hide results when clicking outside
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.classList.add('hidden');
        }
    });

    // Show results when input is focused and has content
    searchInput.addEventListener('focus', () => {
        if (searchInput.value.trim() && searchResults.children.length > 0) {
            searchResults.classList.remove('hidden');
        }
    });

    /**
     * Display search results in the UI
     */
    async function displaySearchResults(results, query) {
        if (results.length === 0) {
            searchResults.innerHTML = `
                <div class="p-4 text-gray-500 text-sm">
                    No results found for "${query}"
                </div>
            `;
            searchResults.classList.remove('hidden');
            return;
        }

        // Load text content for all results to show snippets
        // Average text file is ~300 bytes, so 20 results = ~6KB total
        const snippetPromises = results.map(async (result) => {
            const text = await wikiSearch.loadPageText(result.title);
            return {
                ...result,
                snippet: text ? wikiSearch.extractSnippet(text, query) : null
            };
        });

        const resultsWithSnippets = await Promise.all(snippetPromises);

        const resultsHTML = resultsWithSnippets.map(result => {
            const highlightedTitle = wikiSearch.highlightTerms(result.title, query);

            // Show snippet if available
            let detailsHTML = '';
            if (result.snippet) {
                const highlightedSnippet = wikiSearch.highlightTerms(result.snippet, query);
                detailsHTML = `<div class="text-sm text-gray-700 mt-1">${highlightedSnippet}</div>`;
            }

            return `
                <a href="${result.url}" class="block p-3 hover:bg-gray-100 border-b border-gray-200 last:border-b-0">
                    <div class="font-semibold text-blue-600">${highlightedTitle}</div>
                    ${detailsHTML}
                </a>
            `;
        }).join('');

        searchResults.innerHTML = resultsHTML;
        searchResults.classList.remove('hidden');
    }
});
