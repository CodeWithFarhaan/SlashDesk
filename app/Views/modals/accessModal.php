<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create New Access Permission</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <!-- Access Permission Modal -->
  <div id="accessModals" class="accessModals fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <form id="accessForm" method="POST" action="<?= base_url('/access/create') ?>" class="relative top-10 mx-auto p-5 border w-11/12 max-w-2xl shadow-lg rounded-lg bg-white">
      <!-- Modal Header -->
      <div class="flex justify-between items-center pb-4 border-b">
        <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
          Create New Access Permission
        </h3>
        <button type="button" class="closeModal text-gray-400 hover:text-gray-600 transition-colors">
          <i class="fas fa-times text-xl"></i>
        </button>
      </div>
      
      <!-- Modal Body -->
      <div class="mt-6 space-y-4">
        <!-- User Selection -->
        <div>
          <label for="user_id" class="block text-sm font-medium text-gray-700 mb-1">
            User <span class="text-red-500">*</span>
          </label>
          <select id="user_id" name="user_id" required
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <option value="">Select User</option>
            <!-- Options would be populated from backend -->
            <option value="f57acad1-62c9-4c94-b316-1a8e707cb683">John Doe</option>
          </select>
        </div>

        <!-- Department Selection -->
        <div>
          <label for="department_id" class="block text-sm font-medium text-gray-700 mb-1">
            Department <span class="text-red-500">*</span>
          </label>
          <select id="department_id" name="department_id" required
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <option value="">Select Department</option>
            <!-- Options would be populated from backend -->
            <option value="a3dcdc30-5b99-4f6f-b044-dcf2ca396d60">IT Department</option>
          </select>
        </div>

        <!-- Permissions Sections -->
        <div class="space-y-6">
          <!-- Tickets Permissions -->
          <div class="border p-4 rounded-lg">
            <h4 class="font-medium text-lg mb-3 text-gray-700">Tickets Permissions</h4>
            <div class="grid grid-cols-2 gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="tickets_permission[create]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Create</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="tickets_permission[update]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Update</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="tickets_permission[view]" value="true" checked
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">View</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="tickets_permission[delete]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Delete</span>
              </label>
            </div>
          </div>

          <!-- Tasks Permissions -->
          <div class="border p-4 rounded-lg">
            <h4 class="font-medium text-lg mb-3 text-gray-700">Tasks Permissions</h4>
            <div class="grid grid-cols-2 gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="tasks_permission[create]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Create</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="tasks_permission[update]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Update</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="tasks_permission[view]" value="true" checked
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">View</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="tasks_permission[delete]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Delete</span>
              </label>
            </div>
          </div>

          <!-- Comments Permissions -->
          <div class="border p-4 rounded-lg">
            <h4 class="font-medium text-lg mb-3 text-gray-700">Comments Permissions</h4>
            <div class="grid grid-cols-2 gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="comments_permission[create]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Create</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="comments_permission[update]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Update</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="comments_permission[view]" value="true" checked
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">View</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="comments_permission[delete]" value="true" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                <span class="ml-2">Delete</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Status -->
        <div>
          <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
            Status <span class="text-red-500">*</span>
          </label>
          <select id="status" name="status" required
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex justify-end gap-2 pt-4 border-t mt-4">
        <button type="button" class="closeModal px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
          Cancel
        </button>
        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
          Create Access
        </button>
      </div>
    </form>
  </div>

  <script>
    // Simple modal toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
      const modal = document.getElementById('accessModals');
      const closeBtns = document.querySelectorAll('.closeModal');
      
      // Function to open modal
      window.openAccessModal = function() {
        modal.classList.remove('hidden');
      };
      
      // Function to close modal
      function closeModal() {
        modal.classList.add('hidden');
      }
      
      // Close modal events
      closeBtns.forEach(btn => {
        btn.addEventListener('click', closeModal);
      });
      
      modal.addEventListener('click', function(e) {
        if (e.target === modal) {
          closeModal();
        }
      });
    });
  </script>
</body>
</html>