<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<!-- Main Content Area (Scrollable) -->
<div class="flex-1 overflow-y-auto">
    <div class="p-6 max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-purple-400">Notifications</h1>
                    <p class="text-gray-600 mt-1">Stay updated with your helpdesk activities</p>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <!-- Notification Bell Icon -->
                          <svg id="notification-bell" class="w-6 h-6 text-gray-600 hover:text-gray-800 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
      
                          <!-- Unread Count Badge -->
                          <span id="unread-badge" class="absolute -top-2 -right-2 inline-flex items-center justify-center px-1.5 py-0.5 rounded-full text-xs font-medium bg-red-500 text-white">
                            <span id="unread-count">0</span>
                          </span>
                    </div>
                    <button id="mark-all-read" class="hidden inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Mark all read
                    </button>
                </div>
            </div>
        </div>

        <!-- Search and Filters -->
        <div class="bg-white shadow rounded-lg mb-6">
            <div class="p-4">
                <div class="flex items-center space-x-4">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" id="search-input" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search notifications...">
                    </div>
                    <div class="relative">
                        <button id="filter-dropdown" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                            </svg>
                            Filter
                        </button>
                        <div id="filter-menu" class="hidden absolute right-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="py-1">
                                <a href="#" class="filter-option block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-filter="urgent">Urgent Only</a>
                                <a href="#" class="filter-option block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-filter="new_ticket">New Tickets</a>
                                <a href="#" class="filter-option block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-filter="assignment">Assignments</a>
                                <a href="#" class="filter-option block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-filter="escalation">Escalations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notification Tabs -->
        <div class="mb-6">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8">
                    <button class="tab-button active whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" data-tab="all">
                        All
                    </button>
                    <button class="tab-button whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" data-tab="unread">
                        Unread
                    </button>
                    <button class="tab-button whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" data-tab="urgent">
                        Urgent
                    </button>
                    <button class="tab-button whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" data-tab="new_ticket">
                        New Tickets
                    </button>
                    <button class="tab-button whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" data-tab="assignment">
                        Assignments
                    </button>
                    <button class="tab-button whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" data-tab="escalation">
                        Escalations
                    </button>
                </nav>
            </div>
        </div>

        <!-- Notifications List -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Recent Activity</h3>
                    <span id="notification-count" class="text-sm text-red-600">0 notifications</span>
                </div>
            </div>
            <div class="max-h-96 overflow-y-auto">
                <!-- Empty State -->
                <div id="empty-state" class="hidden text-center py-12 text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM9 7H4l5-5v5zM12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>
                    <p class="text-lg font-medium">No notifications found</p>
                    <p class="text-sm">Try adjusting your search or filters</p>
                </div>

                <!-- Notifications Container -->
                <div id="notifications-container" class="divide-y divide-gray-200">
                    <!-- Notifications will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notification Action Modal -->
<div id="action-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium text-gray-900 mb-4" id="modal-title">Confirm Action</h3>
            <p class="text-sm text-gray-500 mb-6" id="modal-message">Are you sure you want to perform this action?</p>
            <div class="flex justify-end space-x-3">
                <button id="modal-cancel" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="modal-confirm" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Confirm
                </button>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/notifications.js') ?>"></script>


