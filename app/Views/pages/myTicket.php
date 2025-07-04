<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<div class="container mx-auto px-4 py-6 overflow-y-auto">
  <!-- Header Buttons -->
  <div class="max-w-4xl mx-auto mb-8">
    <div class="flex bg-gray-200 rounded-lg p-1">
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/ticketOpen">Open</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
        <a href="/myTicket">My Tickets</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/ticketClosed">Closed</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/ticketSearch">Search</a>
      </button>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="flex items-center justify-between mb-4">
    <div class="relative w-full max-w-md">
      <input type="text" placeholder="Search your tickets..."
        class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
    <div class="flex items-center space-x-2">
      <button class="flex items-center px-4 py-2 border border-gray-300 rounded-lg bg-white shadow-sm hover:bg-gray-50">
        <!-- Sort Icon -->
        <svg class="w-4 h-4 mr-2 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h10M4 14h6M4 18h2m0 0l-2 2m2-2l2 2" />
        </svg>

        <!-- Text -->
        <span class="text-gray-500 font-medium mr-2">Sort</span>

        <!-- Caret Icon -->
        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </button>

    </div>
  </div>

  <!-- Select Buttons -->
  <div class="flex items-center justify-between mb-2">
    <div class="flex space-x-4 text-sm text-blue-600">
      <span>Select:</span>
      <button class="hover:underline">All</button>
      <button class="hover:underline">None</button>
      <button class="hover:underline">Toggle</button>
    </div>
    <button class="text-sm text-gray-600 hover:underline">[Advanced]</button>
  </div>

  <!-- Ticket Table -->
  <div class="bg-white border rounded-lg overflow-x-auto mb-6">
    <table class="min-w-full text-sm">
      <thead class="bg-gray-100">
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <th class="p-3 text-left">Ticket</th>
          <th class="p-3 text-left">Last Updated</th>
          <th class="p-3 text-left">Subject</th>
          <th class="p-3 text-left">From</th>
          <th class="p-3 text-left">Complexity</th>
          <th class="p-3 text-left">Department</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <!-- Row 1 -->
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer">062796</td>
          <td class="p-3 text-gray-600">5/6/25 6:19 PM</td>
          <td class="p-3">
            <div class="flex space-x-2">
              <a href="#" class="text-blue-600 hover:underline">Anamtech - PBX Installation</a>
              <span class="text-xs ml-1">(10)</span>
              <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M18 10c0 3.866-3.582 7-8 7a8.772 8.772 0 01-3.338-.638l-3.52 1.056a.5.5 0 01-.624-.624l1.056-3.52A7.977 7.977 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7z" />
              </svg>
            </div>
          </td>
          <td class="p-3">Sarfaraz Shaikh</td>
          <td class="p-3">
            <span
              class="inline-block px-3 py-1 text-xs font-semibold text-red-600 border border-red-400 rounded-full">High</span>
          </td>
          <td class="p-3">Presales</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>