<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<?= $this->include('partials/newTaskModal') ?>

<div class="container mx-auto px-4 py-6 overflow-y-auto">
  <!-- Header Buttons -->
  <div class="max-w-4xl mb-8">
    <div class="flex bg-gray-200 rounded-lg p-1">
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/taskOpen">Open</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/myTask">My Tasks</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        <a href="/taskCompleted">Completed</a>
      </button>
      <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
        <a href="/taskUpdates">Task Updates</a>
      </button>
      <button class="navModal flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
        New Task
      </button>
    </div>
  </div>
  <!-- Filter Bar as Navbar -->
  <div class="bg-white sticky top-16 z-10 border border-gray-200 rounded-lg shadow-md mb-6">
    <div class="px-6 py-4 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
      <div class="flex flex-wrap gap-4 w-full md:w-auto">
        <!-- Task Created At -->
        <div class="space-y-1">
          <label class="block text-sm font-medium text-gray-700">
            <i class="fas fa-calendar-plus mr-1 text-green-500"></i>
            Task Created At
          </label>
          <input type="date" name="created_from"
            class="w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm">
        </div>

        <!-- Task Updated At -->
        <div class="space-y-1">
          <label class="block text-sm font-medium text-gray-700">
            <i class="fas fa-calendar-check mr-1 text-blue-500"></i>
            Task Updated At
          </label>
          <input type="date" name="updated_from"
            class="w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm">
        </div>

        <!-- Department -->
        <div class="space-y-1">
          <label class="block text-sm font-medium text-gray-700">
            <i class="fas fa-building mr-1 text-purple-500"></i>
            Select Department
          </label>
          <select name="department_id"
            class="w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm bg-white">
            <option value="">All</option>
            <option value="" selected="selected">
              Select Dept. </option>
            <option value="Admin">Admin</option>
            <option value="All Feature Test">All Feature Test</option>
            <option value="Architectural Changes ">Architectural Changes </option>
            <option value="Backup Alert">Backup Alert</option>
            <option value="Branch Merge">Branch Merge</option>
            <option value="Cloud Server Alerts">Cloud Server Alerts</option>
            <option value="Code Deployment">Code Deployment</option>
            <option value="Code Merge">Code Merge</option>
            <option value="Customer Deliveries">Customer Deliveries</option>
            <option value="Daily Priority">Daily Priority</option>
            <option value="DevOps - Activity">DevOps - Activity</option>
            <option value="DevOps - Code Update">DevOps - Code Update</option>
            <option value="Devops Delivery">Devops Delivery</option>
            <option value="DevOps Internal">DevOps Internal</option>
            <option value="DevOps Issues">DevOps Issues</option>
            <option value="DevOps Jayesh">DevOps Jayesh</option>
            <option value="DevOps Solution ">DevOps Solution </option>
            <option value="DevOps VAPT">DevOps VAPT</option>
            <option value="DevOps_Config">DevOps_Config</option>
            <option value="L1 Support">L1 Support</option>
            <option value="L2 Support">L2 Support</option>
            <option value="L2_Pre-Sales">L2_Pre-Sales</option>
            <option value="L3 Cold Box">L3 Cold Box</option>
            <option value="L3 Dev Support">L3 Dev Support</option>
            <option value="Maintenance">Maintenance</option>
            <option value="MTT Issue">MTT Issue</option>
            <option value="MTT QA">MTT QA</option>
            <option value="MTT-Phase3">MTT-Phase3</option>
            <option value="Multi Tenancy Module ">Multi Tenancy Module </option>
            <option value="Nature of Ticket">Nature of Ticket</option>
            <option value="New Instance">New Instance</option>
            <option value="NoBroker-MTT">NoBroker-MTT</option>
            <option value="NOC">NOC</option>
            <option value="Noreply">Noreply</option>
            <option value="Onboarding">Onboarding</option>
            <option value="Presales">Presales</option>
            <option value="Product Fix">Product Fix</option>
            <option value="Product Issues ">Product Issues </option>
            <option value="Product-QA ">Product-QA </option>
            <option value="QA Delivery">QA Delivery</option>
            <option value="QA-Testing">QA-Testing</option>
            <option value="RCAs">RCAs</option>
            <option value="Repetitive issue">Repetitive issue</option>
            <option value="ResOps">ResOps</option>
            <option value="RFC">RFC</option>
            <option value="Sales">Sales</option>
            <option value="Slash Admin">Slash Admin</option>
            <option value="Slash IT HelpDesk">Slash IT HelpDesk</option>
            <option value="Slash-Product">Slash-Product</option>
            <option value="Slash_IP-PBX">Slash_IP-PBX</option>
            <option value="Support-To-do-later">Support-To-do-later</option>
            <option value="Tech Operation">Tech Operation</option>
            <option value="Tech VAPT">Tech VAPT</option>
            <option value="Telephony">Telephony</option>
            <option value="To-Do-Later ">To-Do-Later </option>
            <option value="UAT-QA">UAT-QA</option>
            <option value="UAT-Support">UAT-Support</option>
            <option value="UAT-Tech">UAT-Tech</option>
            <option value="VAPT Issues">VAPT Issues</option>
          </select>
        </div>

        <!-- Status -->
        <div class="space-y-1">
          <label class="block text-sm font-medium text-gray-700">
            <i class="fas fa-flag mr-1 text-orange-500"></i>
            Status
          </label>
          <select name="status" class="w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm bg-white">
            <option value="">All</option>
            <option>Open</option>
            <option>Closed</option>
          </select>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex space-x-2 mt-4 md:mt-0">
        <button type="submit"
          class="inline-flex items-center px-4 py-2 bg-gray-700 text-white text-sm font-medium rounded-md hover:bg-gray-800 shadow-sm">
          <i class="fas fa-search mr-2"></i> Filter
        </button>
        <a href=""
          class="inline-flex items-center px-4 py-2 bg-red-100 text-red-700 text-sm font-medium rounded-md hover:bg-red-200">
          <i class="fas fa-times mr-2"></i> Clear
        </a>
      </div>
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
  </div>

  <!-- Ticket Table -->
  <div class="bg-white border rounded-lg overflow-x-auto mb-6">
    <table class="min-w-full text-sm">
      <thead class="bg-gray-100">
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <th class="p-3 text-left">Task N.</th>
          <th class="p-3 text-left">Ticket N.</th>
          <th class="p-3 text-left">Task Created</th>
          <th class="p-3 text-left">Task Updated</th>
          <th class="p-3 text-left">Task Dept.</th>
          <th class="p-3 text-left">Task Status</th>
          <th class="p-3 text-left">Task Assignee</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <!-- Row 1 -->
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer">35773</td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer">046314</td>
          <td class="p-3 text-gray-600">6/13/25 7:34 PM</td>
          <td class="p-3 text-gray-600">6/13/25 7:34 PM</td>
          <td class="p-3">Customer Deliveries</td>
          <td class="p-3">
            <span
              class="inline-block px-3 py-1 text-xs font-semibold text-green-600 border border-green-400 rounded-full">Open</span>
          </td>
          <td class="p-3 flex">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>hamza shaikh
          </td>
        </tr>
        <!-- Row 2 -->
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer">35773</td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer">046314</td>
          <td class="p-3 text-gray-600">6/13/25 7:34 PM</td>
          <td class="p-3 text-gray-600">6/13/25 7:34 PM</td>
          <td class="p-3">Customer Deliveries</td>
          <td class="p-3">
            <span
              class="inline-block px-3 py-1 text-xs font-semibold text-red-600 border border-red-400 rounded-full">Closed</span>
          </td>
          <td class="p-3 flex">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>hamza shaikh
          </td>
        </tr>
      </tbody>
    </table>
  </div>