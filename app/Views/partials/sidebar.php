<?= $this->include('modals/newTaskModal') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SlashDesk :: Staff Control Panel</title>
  <link rel="shortcut icon" href="<?= base_url('/assets/images/foot-logo.svg') ?>" type="image/x-icon">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Flatpickr -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/css/ticketDashBoard.css') ?>">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="w-[17rem] bg-white shadow-lg flex flex-col h-screen transition-all duration-300">
      <!-- Logo Section -->
      <div class="p-4 border-b">
        <div class="flex items-center space-x-3">
          <div class="w-10 h-10 relative">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
              style="background-image: url('/assets/images/SlashLogo.png');"></div>
          </div>
          <div>
            <h1 class="font-semibold text-gray-900">Slashdesk</h1>
            <p class="text-xs text-gray-500">Support System</p>
          </div>
        </div>
      </div>

      <!-- Platform Label -->
      <div class="px-4 py-2">
        <p class="text-xs text-gray-500 uppercase tracking-wide">Platform</p>
      </div>

      <!-- Navigation Menu - Scrollable Area -->
      <div class="flex-1 overflow-y-auto">
        <nav class="px-2">
          <!-- Dashboard Menu -->
          <div class="mb-1">
            <button onclick="toggleMenu('dashboard')"
              class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <div class="flex items-center space-x-3">
                <i class="fas fa-home text-gray-500"></i>
                <span>Dashboard</span>
              </div>
              <i id="dashboard-arrow" class="fas fa-chevron-down text-xs text-gray-400 transition-transform"></i>
            </button>
            <div id="dashboard-menu" class="ml-6 mt-1 space-y-1 hidden">
              <a href="/dashboard"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Dashboard</a>
              <a href="/agentDirectory"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Agent
                Directory</a>
            </div>
          </div>

          <!-- Users Menu -->
          <div class="mb-1">
            <button onclick="toggleMenu('users')"
              class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <div class="flex items-center space-x-3">
                <i class="fas fa-users text-gray-500"></i>
                <span>Users</span>
              </div>
              <i id="users-arrow" class="fas fa-chevron-down text-xs text-gray-400 transition-transform"></i>
            </button>
            <div id="users-menu" class="ml-6 mt-1 space-y-1 hidden">
              <a href="/userDirectory"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">User
                Directory</a>
              <a href="/organizations"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Organizations</a>
            </div>
          </div>

          <!-- Tasks Menu -->
          <div class="mb-1">
            <button onclick="toggleMenu('tasks')"
              class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <div class="flex items-center space-x-3">
                <i class="fas fa-tasks text-gray-500"></i>
                <span>Tasks</span>
              </div>
              <i id="tasks-arrow" class="fas fa-chevron-down text-xs text-gray-400 transition-transform"></i>
            </button>
            <div id="tasks-menu" class="ml-6 mt-1 space-y-1 hidden">
              <a href="/taskOpen"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Open</a>
              <a href="/myTask"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">My
                Task</a>
              <a href="/taskCompleted"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Completed</a>
              <a href="/taskUpdates"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Task
                Updates</a>
            </div>
          </div>

          <!-- Tickets Menu -->
          <div class="mb-1">
            <button onclick="toggleMenu('tickets')"
              class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <div class="flex items-center space-x-3">
                <i class="fas fa-ticket-alt text-gray-500"></i>
                <span>Tickets</span>
              </div>
              <i id="tickets-arrow" class="fas fa-chevron-down text-xs text-gray-400 transition-transform"></i>
            </button>
            <div id="tickets-menu" class="ml-6 mt-1 space-y-1 hidden">
              <a href="/ticketOpen"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Open</a>
              <a href="/myTicket"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">My
                Tickets</a>
              <a href="/ticketClosed"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Closed</a>
              <a href="/ticketSearch"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Search</a>
            </div>
          </div>

          <!-- Knowledgebase Menu -->
          <div class="mb-1">
            <button onclick="toggleMenu('knowledgebase')"
              class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <div class="flex items-center space-x-3">
                <i class="fas fa-book text-gray-500"></i>
                <span>Knowledgebase</span>
              </div>
              <i id="knowledgebase-arrow" class="fas fa-chevron-down text-xs text-gray-400 transition-transform"></i>
            </button>
            <div id="knowledgebase-menu" class="ml-6 mt-1 space-y-1 hidden">
              <a href="/faqs"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">FAQS</a>
              <a href="/categories"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Categories</a>
              <a href="/cannedResponse"
                class="block px-3 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Canned
                Response</a>
            </div>
          </div>

          <!-- Single Menu Items -->
          <div class="mt-4 space-y-1">
            <a href="#" class="navModal flex items-center space-x-3 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <i class="fas fa-plus text-gray-500"></i>
              <span>New Task</span>
            </a>
            <a href="/ticketDashBoard"
              class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <i class="fa-solid fa-chart-line text-gray-500"></i>
              <span>Ticket DashBoard</span>
            </a>
            <a href="/agentHistory"
              class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <i class="fas fa-info-circle text-gray-500"></i>
              <span>My History</span>
            </a>
            <a href="#"
              class="flex items-center space-x-3 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
              <i class="fas fa-cog text-gray-500"></i>
              <span>Settings</span>
            </a>
          </div>
        </nav>
      </div>

      <!-- User Profile - Fixed at Bottom -->
      <div class="p-4 border-t bg-white relative">
        <div class="flex items-center space-x-3">
          <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
            <i class="fas fa-user text-gray-600 text-sm px-3"></i>
          </div>
          <div class="flex-1">
            <p class="text-sm font-medium text-gray-900">Farru</p>
            <p class="text-xs text-gray-500">farhaan.chaudhary@slashrtc.com</p>
          </div>
          <i class="fas fa-ellipsis-v text-gray-400 cursor-pointer" onclick="toggleDropdown('profileDropdown')"></i>
        </div>

        <!-- Popup Dropdown Menu -->
        <div id="profileDropdown"
          class="hidden absolute left-[18rem] bottom-2 w-[17rem] bg-white border border-gray-200 shadow-xl rounded-lg z-50">

          <!-- Header: Profile Info -->
          <div class="flex items-center px-4 py-3 border-b space-x-3">
            <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
              <i class="fas fa-user text-gray-600 text-sm"></i>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-900">Farru</p>
              <p class="text-xs text-gray-500">farhaan.chaudhary@slashrtc.com</p>
            </div>
          </div>

          <!-- Menu Items -->
          <ul class="py-1 text-sm text-gray-700">
            <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
              <i class="fas fa-magic text-gray-500 mr-3 w-4 text-base"></i>
              <a href="#">Upgrade to Pro</a>
            </li>
            <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
              <i class="fas fa-cog text-gray-500 mr-3 w-4 text-base"></i>
              <a href="/account">Account</a>
            </li>
            <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
              <i class="fas fa-bell text-gray-500 mr-3 w-4 text-base"></i>
              <a href="/notifications">Notifications</a>
            </li>
            <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
              <i class="fas fa-sign-out-alt text-gray-500 mr-3 w-4 text-base"></i>
              <a href="/">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script src="<?= base_url('assets/js/task-modal.js') ?>"></script>
    <script src="<?= base_url('assets/js/sidebar.js') ?>"></script>

</body>

</html>