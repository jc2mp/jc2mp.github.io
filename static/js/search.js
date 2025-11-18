/**
 * JC2-MP Wiki Search Implementation
 * MediaWiki-style search with prefix matching and result highlighting
 */

class WikiSearch {
    constructor() {
        this.searchIndex = [];
        this.isLoading = false;
        this.isLoaded = false;
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
            this.searchIndex = [];
        } finally {
            this.isLoading = false;
        }
    }

    /**
     * Normalize text for searching (lowercase, trim)
     */
    normalizeText(text) {
        return text.toLowerCase().trim();
    }

    /**
     * Check if text matches search query (prefix or substring match)
     */
    matchesQuery(text, query) {
        const normalizedText = this.normalizeText(text);
        const normalizedQuery = this.normalizeText(query);

        if (!normalizedQuery) {
            return false;
        }

        // Split query into words for multi-word search
        const queryWords = normalizedQuery.split(/\s+/);

        // All query words must appear in the text
        return queryWords.every(word => normalizedText.includes(word));
    }

    /**
     * Calculate relevance score for a search result
     */
    calculateScore(entry, query) {
        const normalizedQuery = this.normalizeText(query);
        const normalizedTitle = this.normalizeText(entry.title);
        const normalizedContent = this.normalizeText(entry.content);

        let score = 0;

        // Exact title match gets highest score
        if (normalizedTitle === normalizedQuery) {
            score += 1000;
        }
        // Title starts with query gets high score
        else if (normalizedTitle.startsWith(normalizedQuery)) {
            score += 500;
        }
        // Title contains query gets medium score
        else if (normalizedTitle.includes(normalizedQuery)) {
            score += 250;
        }

        // Heading matches
        for (const heading of entry.headings) {
            const normalizedHeading = this.normalizeText(heading);
            if (normalizedHeading === normalizedQuery) {
                score += 100;
            } else if (normalizedHeading.includes(normalizedQuery)) {
                score += 50;
            }
        }

        // Content match gets base score
        if (normalizedContent.includes(normalizedQuery)) {
            score += 10;

            // Boost score based on frequency
            const matches = normalizedContent.match(new RegExp(normalizedQuery, 'g'));
            if (matches) {
                score += matches.length;
            }
        }

        return score;
    }

    /**
     * Extract snippet from content showing where the query appears
     */
    extractSnippet(content, query, maxLength = 150) {
        const normalizedContent = this.normalizeText(content);
        const normalizedQuery = this.normalizeText(query);

        const index = normalizedContent.indexOf(normalizedQuery);

        if (index === -1) {
            // Query not found in content, return start of content
            return content.substring(0, maxLength) + (content.length > maxLength ? '...' : '');
        }

        // Calculate snippet bounds to center the query
        const snippetStart = Math.max(0, index - Math.floor(maxLength / 2));
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
     * Highlight query terms in text
     */
    highlightTerms(text, query) {
        if (!query || !text) {
            return text;
        }

        const queryWords = this.normalizeText(query).split(/\s+/);
        let highlightedText = text;

        // Sort query words by length (longest first) to avoid partial replacements
        queryWords.sort((a, b) => b.length - a.length);

        for (const word of queryWords) {
            if (!word) continue;

            // Create regex to match word case-insensitively
            const regex = new RegExp(`(${this.escapeRegex(word)})`, 'gi');
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

    /**
     * Search the index and return ranked results
     */
    search(query, limit = 20) {
        if (!query || !this.isLoaded) {
            return [];
        }

        const results = [];

        for (const entry of this.searchIndex) {
            // Check if entry matches query
            if (this.matchesQuery(entry.title, query) ||
                this.matchesQuery(entry.content, query) ||
                entry.headings.some(h => this.matchesQuery(h, query))) {

                const score = this.calculateScore(entry, query);
                const snippet = this.extractSnippet(entry.content, query);

                results.push({
                    ...entry,
                    score,
                    snippet,
                });
            }
        }

        // Sort by score (descending) and limit results
        results.sort((a, b) => b.score - a.score);
        return results.slice(0, limit);
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
    function displaySearchResults(results, query) {
        if (results.length === 0) {
            searchResults.innerHTML = `
                <div class="p-4 text-gray-500 text-sm">
                    No results found for "${query}"
                </div>
            `;
            searchResults.classList.remove('hidden');
            return;
        }

        const resultsHTML = results.map(result => {
            const highlightedTitle = wikiSearch.highlightTerms(result.title, query);
            const highlightedSnippet = wikiSearch.highlightTerms(result.snippet, query);

            return `
                <a href="${result.url}" class="block p-3 hover:bg-gray-100 border-b border-gray-200 last:border-b-0">
                    <div class="font-semibold text-blue-600 mb-1">${highlightedTitle}</div>
                    <div class="text-sm text-gray-700 line-clamp-2">${highlightedSnippet}</div>
                </a>
            `;
        }).join('');

        searchResults.innerHTML = resultsHTML;
        searchResults.classList.remove('hidden');
    }
});
