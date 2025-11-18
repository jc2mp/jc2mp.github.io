/**
 * JC2-MP Wiki Search Implementation
 * Efficient inverted index-based search
 */

class WikiSearch {
    constructor() {
        this.searchIndex = null;
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
            this.searchIndex = { pages: [] };
        } finally {
            this.isLoading = false;
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

        // Map to track page index -> occurrence count
        const pageScores = new Map();

        // For each query word, look up pages in the inverted index
        for (const word of queryWords) {
            const pageIndices = this.searchIndex.words[word];
            if (!pageIndices) {
                continue; // Word not found in index
            }

            // Count occurrences (multiple entries = higher weight)
            for (const pageIdx of pageIndices) {
                pageScores.set(pageIdx, (pageScores.get(pageIdx) || 0) + 1);
            }
        }

        // Convert to array and filter pages that don't have all query words
        const results = [];
        for (const [pageIdx, score] of pageScores.entries()) {
            // For multi-word queries, we want pages that contain all words
            // Single word queries just need a match
            if (queryWords.length === 1 || score >= queryWords.length) {
                const page = this.searchIndex.pages[pageIdx];
                if (page) {
                    results.push({
                        ...page,
                        score: score,
                    });
                }
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

            // Show headings if available
            let headingsHTML = '';
            if (result.headings && result.headings.length > 0) {
                const highlightedHeadings = result.headings
                    .slice(0, 3) // Show max 3 headings
                    .map(h => wikiSearch.highlightTerms(h, query))
                    .join(' · ');
                headingsHTML = `<div class="text-xs text-gray-500 mt-1">${highlightedHeadings}</div>`;
            }

            return `
                <a href="${result.url}" class="block p-3 hover:bg-gray-100 border-b border-gray-200 last:border-b-0">
                    <div class="font-semibold text-blue-600">${highlightedTitle}</div>
                    ${headingsHTML}
                </a>
            `;
        }).join('');

        searchResults.innerHTML = resultsHTML;
        searchResults.classList.remove('hidden');
    }
});
