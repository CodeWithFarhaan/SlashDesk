<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create New Department</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <!-- Department Modal -->

  <div id="departModal" class="modal fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <form id="departForm" method="POST" action="<?= base_url('/department/Create') ?>" class="relative top-10 mx-auto p-5 border w-11/12 max-w-2xl shadow-lg rounded-lg bg-white">
      <!-- Modal Header -->
      <div class="flex justify-between items-center pb-4 border-b">
        <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
          Create New Department
        </h3>
        <button type="button" class="closeModal text-gray-400 hover:text-gray-600 transition-colors">
          <i class="fas fa-times text-xl"></i>
        </button>
      </div>
      
      <!-- Modal Body - Simplified to 5 divs -->
      <div class="mt-6 space-y-4">
        <!-- Department Name -->
        <div>
          <label for="dept_name" class="block text-sm font-medium text-gray-700 mb-1">
            Department Name <span class="text-red-500">*</span>
          </label>
          <input type="text" id="dept_name" name="dept_name" required
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Department Code -->
        <div>
          <label for="dept_code" class="block text-sm font-medium text-gray-700 mb-1">
            Department Code <span class="text-red-500">*</span>
          </label>
          <input type="text" id="dept_code" name="dept_code" required
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
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

        <!-- Description -->
        <div>
          <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
            Description
          </label>
          <textarea id="description" name="description" rows="3"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex justify-end gap-2 pt-4 border-t mt-4">
        <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
          Cancel
        </button>
        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
          Create Department
        </button>

          
      </div>
  
  </div>

  <script>
    // Simple modal toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
      const modal = document.getElementById('departModal');
      const closeBtn = document.querySelector('.closeModal');
      
      // Function to open modal
      window.openDeptModal = function() {
        modal.classList.remove('hidden');
      };
      
      // Function to close modal
      function closeModal() {
        modal.classList.add('hidden');
      }
      
      // Close modal events
      closeBtn.addEventListener('click', closeModal);
      modal.addEventListener('click', function(e) {
        if (e.target === modal) {
          closeModal();
        }
      });
      
      // Close on Escape key
      // document.addEventListener('keydown', function(e) {
      //   if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
      //     closeModal();
      //   }
      // });
    });
  </script>
  </form>
</body>
</html>