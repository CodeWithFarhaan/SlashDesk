class AgentHistory {
    constructor() {
        this.currentPage = 1;
        this.itemsPerPage = 10;
        this.filters = {
            search: '',
            status: 'all',
            priority: 'all',
            category: 'all'
        };
        this.init();
    }

    init() {
        this.bindEvents();
        this.loadTickets();
        this.loadStats();
    }

    bindEvents() {
        // Search input
        const searchInput = document.getElementById('search-input');
        let searchTimeout;
        searchInput.addEventListener('input', (e) => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                this.filters.search = e.target.value;
                this.currentPage = 1;
                this.loadTickets();
            }, 300);
        });

        // Filter dropdowns
        document.getElementById('status-filter').addEventListener('change', (e) => {
            this.filters.status = e.target.value;
            this.currentPage = 1;
            this.loadTickets();
        });

        document.getElementById('priority-filter').addEventListener('change', (e) => {
            this.filters.priority = e.target.value;
            this.currentPage = 1;
            this.loadTickets();
        });

        document.getElementById('category-filter').addEventListener('change', (e) => {
            this.filters.category = e.target.value;
            this.currentPage = 1;
            this.loadTickets();
        });
    }

    showLoading() {
        document.getElementById('loading-spinner').classList.remove('hidden');
        document.getElementById('tickets-container').classList.add('hidden');
        document.getElementById('no-results').classList.add('hidden');
    }

    hideLoading() {
        document.getElementById('loading-spinner').classList.add('hidden');
        document.getElementById('tickets-container').classList.remove('hidden');
    }

    async loadTickets() {
        this.showLoading();
        
        try {
            const params = new URLSearchParams({
                page: this.currentPage,
                limit: this.itemsPerPage,
                search: this.filters.search,
                status: this.filters.status,
                priority: this.filters.priority,
                category: this.filters.category
            });

            const response = await fetch(`${base_url}agent/get_tickets?${params}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const data = await response.json();
            
            if (data.success) {
                this.renderTickets(data.tickets);
                this.renderPagination(data.pagination);
            } else {
                this.showError(data.message || 'Failed to load tickets');
            }
        } catch (error) {
            console.error('Error loading tickets:', error);
            this.showError('Failed to load tickets. Please try again.');
        } finally {
            this.hideLoading();
        }
    }

    async loadStats() {
        try {
            const response = await fetch(`${base_url}agent/get_ticket_stats`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const data = await response.json();
            
            if (data.success) {
                this.updateStats(data.stats);
            }
        } catch (error) {
            console.error('Error loading stats:', error);
        }
    }

    updateStats(stats) {
        document.getElementById('total-tickets').textContent = stats.total || 0;
        document.getElementById('open-tickets').textContent = stats.open || 0;
        document.getElementById('progress-tickets').textContent = stats.in_progress || 0;
        document.getElementById('resolved-tickets').textContent = stats.resolved || 0;
        document.getElementById('closed-tickets').textContent = stats.closed || 0;
        document.getElementById('hold-tickets').textContent = stats.on_hold || 0;
    }

    renderTickets(tickets) {
        const container = document.getElementById('tickets-container');
        
        if (!tickets || tickets.length === 0) {
            container.classList.add('hidden');
            document.getElementById('no-results').classList.remove('hidden');
            return;
        }

        document.getElementById('no-results').classList.add('hidden');
        container.innerHTML = tickets.map(ticket => this.createTicketCard(ticket)).join('');
    }

    createTicketCard(ticket) {
        const statusConfig = this.getStatusConfig(ticket.status);
        const priorityConfig = this.getPriorityConfig(ticket.priority);
        
        return `
            <div class="bg-white rounded-lg shadow hover:shadow-md transition-shadow">
                <div class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                                    ${ticket.ticket_id}
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${statusConfig.class} border">
                                    ${statusConfig.icon}
                                    <span class="ml-1 capitalize">${ticket.status.replace('-', ' ')}</span>
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${priorityConfig.class} border">
                                    <span class="capitalize">${ticket.priority}</span>
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                                    ${ticket.category}
                                </span>
                            </div>

                            <h3 class="text-lg font-semibold text-gray-900 mb-2">${ticket.title}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">${ticket.description}</p>

                            <div class="flex items-center gap-6 text-sm text-gray-500">
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span>${ticket.customer_name}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>${ticket.customer_email}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0h6m-6 0l-2 13a2 2 0 002 2h6a2 2 0 002-2L16 7"></path>
                                    </svg>
                                    <span>Created ${this.formatDate(ticket.created_at)}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Updated ${this.formatDate(ticket.updated_at)}</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 ml-4">
                            <img class="h-8 w-8 rounded-full object-cover" src="${ticket.customer_avatar || base_url + 'assets/images/default-avatar.png'}" alt="${ticket.customer_name}">
                            
                            <div class="relative">
                                <button onclick="showTicketActions('${ticket.id}')" class="inline-flex items-center p-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    getStatusConfig(status) {
        const configs = {
            'open': {
                class: 'bg-blue-100 text-blue-800 border-blue-200',
                icon: '<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
            },
            'in-progress': {
                class: 'bg-yellow-100 text-yellow-800 border-yellow-200',
                icon: '<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
            },
            'resolved': {
                class: 'bg-green-100 text-green-800 border-green-200',
                icon: '<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
            },
            'closed': {
                class: 'bg-gray-100 text-gray-800 border-gray-200',
                icon: '<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
            },
            'on-hold': {
                class: 'bg-orange-100 text-orange-800 border-orange-200',
                icon: '<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
            }
        };
        return configs[status] || configs['open'];
    }

    getPriorityConfig(priority) {
        const configs = {
            'high': { class: 'bg-red-100 text-red-800 border-red-200' },
            'medium': { class: 'bg-yellow-100 text-yellow-800 border-yellow-200' },
            'low': { class: 'bg-green-100 text-green-800 border-green-200' }
        };
        return configs[priority] || configs['medium'];
    }

    formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
    }

    renderPagination(pagination) {
        const container = document.getElementById('pagination-container');
        if (!pagination || pagination.total_pages <= 1) {
            container.innerHTML = '';
            return;
        }

        let paginationHTML = '<div class="flex items-center justify-between bg-white px-4 py-3 border border-gray-200 rounded-lg">';
        paginationHTML += `<div class="text-sm text-gray-700">Showing ${pagination.start} to ${pagination.end} of ${pagination.total} results</div>`;
        paginationHTML += '<div class="flex space-x-2">';

        // Previous button
        if (pagination.current_page > 1) {
            paginationHTML += `<button onclick="agentHistory.goToPage(${pagination.current_page - 1})" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Previous</button>`;
        }

        // Page numbers
        for (let i = Math.max(1, pagination.current_page - 2); i <= Math.min(pagination.total_pages, pagination.current_page + 2); i++) {
            const isActive = i === pagination.current_page;
            paginationHTML += `<button onclick="agentHistory.goToPage(${i})" class="px-3 py-2 text-sm font-medium ${isActive ? 'text-white bg-indigo-600 border-indigo-600' : 'text-gray-500 bg-white border-gray-300 hover:bg-gray-50'} border rounded-md">${i}</button>`;
        }

        // Next button
        if (pagination.current_page < pagination.total_pages) {
            paginationHTML += `<button onclick="agentHistory.goToPage(${pagination.current_page + 1})" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</button>`;
        }

        paginationHTML += '</div></div>';
        container.innerHTML = paginationHTML;
    }

    goToPage(page) {
        this.currentPage = page;
        this.loadTickets();
    }

    // showError(message) {
    //     // You can implement a toast notification here
    //     console.error(message);
    //     alert(message);
    // }
}

// Global functions
function refreshTickets() {
    if (window.agentHistory) {
        window.agentHistory.loadTickets();
        window.agentHistory.loadStats();
    }
}

function showTicketActions(ticketId) {
    // Implement ticket actions modal
    document.getElementById('ticket-modal').classList.remove('hidden');
    // Load ticket actions content via AJAX
}

function closeModal() {
    document.getElementById('ticket-modal').classList.add('hidden');
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.agentHistory = new AgentHistory();
});