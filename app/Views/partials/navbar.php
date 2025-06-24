<?= $this->include('partials/newTaskModal') ?>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
  <!-- Main Content -->
  <div class="flex-1 flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b px-6 py-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <div id="sidebar-toggle" class="px-2">
            <i class="fas fa-bars text-gray-500 cursor-pointer"></i>
          </div>
          <nav class="flex items-center space-x-2 text-sm text-gray-500">
            <span>Slashdesk</span>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gray-900">Dashboard</span>
          </nav>
        </div>
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input type="text" placeholder="Search..."
              class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
          </div>
          <div class="relative cursor-pointer">
            <button
              class="navModal space-x-2 bg-black text-white px-4 py-2 rounded text-sm font-medium hover:bg-gray-800">
              + New Task
            </button>
          </div>
        </div>
      </div>
    </header>


    <script src="<?= base_url('assets/js/task-modal.js') ?>"></script>

</body>

</html>