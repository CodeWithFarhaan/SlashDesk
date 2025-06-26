<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<div class="flex-1 overflow-hidden">
    <!-- Header -->
    <div class="bg-white border-b border-gray-200 px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-gray-600 text-sm px-3"></i>
                </div>
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">Farru</h1>
                    <p class="text-sm text-gray-500">Support Agent • Ticket History</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <button class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Export
                </button>
                <button class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="refreshTickets()">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Refresh
                </button>
            </div>
        </div>
    </div>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto bg-gray-50">
        <div class="p-6">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 mb-8">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-gray-900" id="total-tickets"><?= $stats['total'] ?? 0 ?></div>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Total Tickets</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-blue-600" id="open-tickets"><?= $stats['open'] ?? 0 ?></div>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Open</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-yellow-600" id="progress-tickets"><?= $stats['in_progress'] ?? 0 ?></div>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">In Progress</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-green-600" id="resolved-tickets"><?= $stats['resolved'] ?? 0 ?></div>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Resolved</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-gray-600" id="closed-tickets"><?= $stats['closed'] ?? 0 ?></div>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Closed</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-2xl font-bold text-orange-600" id="hold-tickets"><?= $stats['on_hold'] ?? 0 ?></div>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">On Hold</p>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-white rounded-lg shadow mb-6 p-6">
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="text" id="search-input" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search tickets, customers, or ticket IDs...">
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <select id="status-filter" class="block w-36 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="all">Select Status</option>
                            <option value="open">Open</option>
                            <option value="in-progress">In Progress</option>
                            <option value="resolved">Resolved</option>
                            <option value="closed">Closed</option>
                            <option value="on-hold">On Hold</option>
                        </select>
                        <select id="priority-filter" class="block w-36 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="all">Select Priority</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                        <select id="category-filter" class="block w-36 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="all">Select Categories</option>
                            <option value="Technical">Technical</option>
                            <option value="Billing">Billing</option>
                            <option value="Feature Request">Feature Request</option>
                            <option value="Account">Account</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Loading Spinner -->
            <div id="loading-spinner" class="hidden flex justify-center items-center py-8">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600"></div>
            </div>

            <!-- Tickets List -->
            <div id="tickets-container" class="space-y-4">
                <!-- Tickets will be loaded here via AJAX -->
            </div>

            <!-- No Results -->
            <div id="no-results" class="hidden bg-white rounded-lg shadow">
                <div class="p-12 text-center">
                    <div class="text-gray-400 mb-4">
                        <svg class="h-12 w-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No tickets found</h3>
                    <p class="text-gray-500">Try adjusting your search criteria or filters to find what you're looking for.</p>
                </div>
            </div>

            <!-- Pagination -->
            <div id="pagination-container" class="mt-6">
                <!-- Pagination will be loaded here -->
            </div>
        </div>
    </div>
</div>

<!-- Ticket Action Modal -->
<div id="ticket-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900" id="modal-title">Ticket Actions</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="modal-content">
                <!-- Modal content will be loaded here -->
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/agentHistory.js') ?>"></script>