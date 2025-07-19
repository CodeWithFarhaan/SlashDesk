<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<div class="container mx-auto px-4 py-6">
  <!-- Header Buttons -->
  <div class="max-w-4xl mx-auto mb-8">
    <div class="flex bg-gray-200 rounded-lg p-1">
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/ticketOpen">Open</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/myTicket">My Tickets</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/ticketClosed">Closed</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
        <a href="/ticketSearch">Search</a>
      </button>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="flex items-center justify-between mb-4">
    <div class="relative w-full">
      <input type="text" placeholder="Search tickets..." id="searchInput"
        class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer"
        onclick="openSearchModal()" readonly />
      <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
  </div>

  <!-- Rest of your content here -->
</div>

<!-- Search Modal -->
<div id="searchModal"
  class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden opacity-0 transition-opacity duration-300">
  <div class="flex items-center justify-center min-h-screen p-4">
    <div id="modalContent"
      class="bg-white rounded-lg shadow-xl w-full max-w-2xl transform scale-95 transition-transform duration-300">
      <!-- Modal Header -->
      <div class="flex items-center justify-between p-6 border-b">
        <div>
          <h2 class="text-xl font-semibold text-gray-900">Search Tickets</h2>
          <p class="text-sm text-gray-500 mt-1">Search through all helpdesk tickets by ID, title, or assignee</p>
        </div>
        <button onclick="closeSearchModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Modal Search Input -->
      <div class="p-6 border-b">
        <div class="relative">
          <input type="text" placeholder="Search tickets..." id="modalSearchInput"
            class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            oninput="searchTickets(this.value)" />
          <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
      </div>

      <!-- Search Results -->
      <div class="p-6 max-h-96 overflow-y-auto" id="searchResults">
        <!-- Loading state -->
        <div id="loadingState" class="hidden text-center py-8">
          <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500 mx-auto"></div>
          <p class="text-gray-500 mt-2">Searching...</p>
        </div>

        <!-- No results state -->
        <div id="noResults" class="hidden text-center py-8">
          <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
            </path>
          </svg>
          <p class="text-gray-500">No tickets found</p>
        </div>

        <!-- Results container -->
        <div id="resultsContainer">
          <!-- Sample results - replace with dynamic content -->
          <div class="space-y-3">
            <div class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer transition-colors">
              <div class="flex items-center justify-between mb-2">
                <div class="flex items-center space-x-2">
                  <span class="text-blue-600 font-medium">#062798</span>
                  <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded-full">Medium</span>
                  <span class="px-2 py-1 bg-orange-100 text-orange-800 text-xs rounded-full">In Progress</span>
                </div>
                <span class="text-xs text-gray-500">2 days ago</span>
              </div>
              <h3 class="font-medium text-gray-900 mb-2">Anamtech - PBX Installation</h3>
              <div class="flex items-center text-sm text-gray-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Sylvius Smith
              </div>
            </div>

            <div class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer transition-colors">
              <div class="flex items-center justify-between mb-2">
                <div class="flex items-center space-x-2">
                  <span class="text-blue-600 font-medium">#047987</span>
                  <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Low</span>
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Open</span>
                </div>
                <span class="text-xs text-gray-500">1 day ago</span>
              </div>
              <h3 class="font-medium text-gray-900 mb-2">Route Optimization</h3>
              <div class="flex items-center text-sm text-gray-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Rufus Singh
              </div>
            </div>
            <div class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer transition-colors">
              <div class="flex items-center justify-between mb-2">
                <div class="flex items-center space-x-2">
                  <span class="text-blue-600 font-medium">#047987</span>
                  <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Low</span>
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Open</span>
                </div>
                <span class="text-xs text-gray-500">1 day ago</span>
              </div>
              <h3 class="font-medium text-gray-900 mb-2">Route Optimization</h3>
              <div class="flex items-center text-sm text-gray-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Rufus Singh
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="px-6 py-4 border-t bg-gray-50 rounded-b-lg">
        <p class="text-sm text-gray-500" id="resultsCount">5 tickets found</p>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url('assets/js/ticketSearch.js') ?>"></script>