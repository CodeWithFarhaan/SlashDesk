<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<?= $this->include('modals/newTaskModal') ?>
<!-- Dashboard Content -->
<main class="flex-1 p-6 overflow-auto">
  <!-- Welcome Banner -->
  <div class="bg-gradient-to-r from-purple-600 to-purple-700 rounded-xl p-6 mb-6 text-white relative overflow-hidden">
    <div class="relative z-10">
      <h1 class="text-2xl font-bold mb-2">Welcome back, Farru!</h1>
      <p class="text-purple-100">You have 17 open tasks and 1 task due today.</p>
    </div>
    <div class="absolute right-6 top-1/2 transform -translate-y-1/2">
      <img class="w-20 h-20" src="/assets/images/flash.png" alt="">
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-xl p-6 shadow-sm">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-sm font-medium text-gray-600">Open Tasks</h3>
        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
      </div>
      <div class="text-2xl font-bold text-gray-900 mb-1">17</div>
      <p class="text-sm text-gray-500">+2 from yesterday</p>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-sm font-medium text-gray-600">My Tasks</h3>
        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
      </div>
      <div class="text-2xl font-bold text-gray-900 mb-1">1</div>
      <p class="text-sm text-gray-500">Due Today</p>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-sm font-medium text-gray-600">Completed</h3>
        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
      </div>
      <div class="text-2xl font-bold text-gray-900 mb-1">15,765</div>
      <p class="text-sm text-gray-500">+127 This Week</p>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-sm font-medium text-gray-600">Active Users</h3>
        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
      </div>
      <div class="text-2xl font-bold text-gray-900 mb-1">2,847</div>
      <p class="text-sm text-gray-500">+12% This Month</p>
    </div>
  </div>

  <!-- Recent Tasks and Tickets -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <!-- Recent Tasks -->
    <div class="bg-white rounded-xl p-6 shadow-sm">
      <div class="flex items-center justify-between mb-4">
        <div>
          <h3 class="text-lg font-semibold text-gray-900">Recent Tasks</h3>
          <p class="text-sm text-gray-500">Latest tasks requiring attention</p>
        </div>
        <button class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50">View
          All</button>
      </div>
      <div class="space-y-3">
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="w-8 h-8 bg-gray-200 rounded-full"></div>
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">BFL Process Priority</span>
              <span class="text-xs text-blue-500 hover:underline">35156</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">Imran Khan</span>
              <span class="text-xs text-gray-400">5/23/25 10:28 AM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-red-100 text-red-600 rounded-full">Priority</span>
        </div>
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="w-8 h-8 bg-gray-200 rounded-full"></div>
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">BFL Process Priority</span>
              <span class="text-xs text-blue-500 hover:underline">35156</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">Imran Khan</span>
              <span class="text-xs text-gray-400">5/23/25 10:28 AM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-orange-100 text-orange-600 rounded-full">High</span>
        </div>
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="w-8 h-8 bg-gray-200 rounded-full"></div>
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">BFL Process Priority</span>
              <span class="text-xs text-blue-500 hover:underline">35156</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">Imran Khan</span>
              <span class="text-xs text-gray-400">5/23/25 10:28 AM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-blue-100 text-blue-600 rounded-full">Medium</span>
        </div>
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="w-8 h-8 bg-gray-200 rounded-full"></div>
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">BFL Process Priority</span>
              <span class="text-xs text-blue-500 hover:underline">35156</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">Imran Khan</span>
              <span class="text-xs text-gray-400">5/23/25 10:28 AM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 rounded-full">Low</span>
        </div>
      </div>
    </div>

    <!-- Recent Tickets -->
    <div class="bg-white rounded-xl p-6 shadow-sm">
      <div class="flex items-center justify-between mb-4">
        <div>
          <h3 class="text-lg font-semibold text-gray-900">Recent Tickets</h3>
          <p class="text-sm text-gray-500">Latest support requests</p>
        </div>
        <button class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50">View
          All</button>
      </div>
      <div class="space-y-3">
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">Create CRM for Slash</span>
              <span class="text-xs text-blue-500 hover:underline">063536</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">rahul panda</span>
              <span class="text-xs text-gray-400">5/26/25 12:47 PM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-red-100 text-red-600 rounded-full">Priority</span>
        </div>
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">Create CRM for Slash</span>
              <span class="text-xs text-blue-500 hover:underline">063536</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">rahul panda</span>
              <span class="text-xs text-gray-400">5/26/25 12:47 PM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-orange-100 text-orange-600 rounded-full">High</span>
        </div>
        <div class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg">
          <div class="flex-1">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-blue-600 hover:underline">Create CRM for Slash</span>
              <span class="text-xs text-blue-500 hover:underline">063536</span>
              <span class="text-xs text-gray-400">—</span>
              <span class="text-xs text-gray-600">rahul panda</span>
              <span class="text-xs text-gray-400">5/26/25 12:47 PM</span>
            </div>
          </div>
          <span class="px-2 py-1 text-xs bg-blue-100 text-blue-600 rounded-full">Medium</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Quick Actions -->
  <div class="bg-white rounded-xl p-6 shadow-sm">
    <div class="mb-4">
      <h3 class="text-lg font-semibold text-gray-900">Quick Actions</h3>
      <p class="text-sm text-gray-500">Frequently used actions and shortcuts</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <button 
        class="navModal flex flex-col items-center justify-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 hover:bg-gray-50">
        <i class="fas fa-plus text-2xl text-gray-400 mb-2"></i>
        <span class="text-sm font-medium text-gray-600">New Task</span>
      </button>
      <button
        class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 hover:bg-gray-50">
        <i class="fas fa-ticket-alt text-2xl text-gray-400 mb-2"></i>
        <span class="text-sm font-medium text-gray-600">New Ticket</span>
      </button>
      <button
        class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 hover:bg-gray-50">
        <i class="fas fa-user-plus text-2xl text-gray-400 mb-2"></i>
        <span class="text-sm font-medium text-gray-600">Add User</span>
      </button>
      <button
        class="flex flex-col items-center justify-center p-6 border-2 border-dashed border-gray-300 rounded-lg hover:border-gray-400 hover:bg-gray-50">
        <i class="fas fa-star text-2xl text-gray-400 mb-2"></i>
        <span class="text-sm font-medium text-gray-600">Knowledge Base</span>
      </button>
    </div>
  </div>
</main>
</div>
</div>