<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<!-- Main Content Wrapper -->
<div class="flex-1 bg-white p-6 overflow-auto">
  <!-- Page Heading -->
  <h1 class="text-lg text-gray-500 font-semibold mb-2">Users Directory.</h1>

  <!-- Section Header -->
  <div class="flex justify-between items-center mt-6 mb-4">
    <h2 class="text-lg font-semibold">All Users</h2>

    <!-- Filters -->
    <div class="flex items-center space-x-2">
      <input type="text" placeholder="Search..." class="border rounded px-3 py-2 text-sm w-64" />

      <button id="addUserBtn" class="bg-black text-white px-4 py-2 rounded text-sm font-medium hover:bg-gray-800">
        + Add User
      </button>
    </div>
  </div>
  <div class="flex space-x-4 text-sm text-blue-600">
    <span>Select:</span>
    <button class="hover:underline">All</button>
    <button class="hover:underline">None</button>
    <button class="hover:underline">Toggle</button>
  </div>

  <!-- Table Header -->
  <div class="mt-3 overflow-auto border rounded-lg">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-900 font-semibold">
        <tr>
          <th class="px-4 py-3">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </th>
          <th class="px-6 py-3">Name</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3">Created</th>
          <th class="px-6 py-3">Updated</th>
        </tr>
      </thead>

      <tbody class="divide-y">
        <tr class="hover:bg-yellow-100 bg-blue-50">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </td>
          <td class="px-6 py-4 text-blue-600">"Jotiba Patil"</td>
          <td class="px-6 py-4">Guest</td>
          <td class="px-6 py-4">11/10/23</td>
          <td class="px-6 py-4">12/26/23 9:53 AM</td>
        </tr>

        <tr class="hover:bg-yellow-100 bg-white">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </td>
          <td class="px-6 py-4 text-blue-600">"abhishek chatterjee"</td>
          <td class="px-6 py-4">Guest</td>
          <td class="px-6 py-4">4/8/23</td>
          <td class="px-6 py-4">11/9/23 9:33 AM</td>
        </tr>

        <tr class="hover:bg-yellow-100 bg-blue-50">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
          </td>
          <td class="px-6 py-4 text-blue-600">"Aafaque Malik"</td>
          <td class="px-6 py-4">Guest</td>
          <td class="px-6 py-4">7/30/24</td>
          <td class="px-6 py-4">8/8/24 12:04 PM</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Overlay -->
<div id="userModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-lg shadow-xl max-w-xl w-full max-h-[90vh] overflow-y-auto">

      <!-- Modal Header -->
      <div class="flex justify-between items-center p-6 border-b">
        <h3 class="text-lg font-semibold text-gray-900">Lookup or create a user</h3>
        <button id="closeModal" class="text-gray-400 hover:text-gray-600">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Modal Body -->
      <div class="p-6">
        <!-- Info Banner -->
        <div class="bg-blue-50 border border-blue-200 rounded-md p-3 mb-4 flex items-center">
          <svg class="w-5 h-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="text-blue-700 text-sm">Search existing users or add a new user.</span>
        </div>

        <!-- Search Field -->
        <div class="mb-6">
          <input type="text" placeholder="Search by email, phone or name"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <!-- Create New User Form -->
        <form id="createUserForm" action="<?php echo base_url('users/create'); ?>" method="POST">
          <h4 class="text-md font-semibold text-gray-900 mb-4">Create New User:</h4>

          <!-- Email Address -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">
              Email Address <span class="text-red-500">*</span>
            </label>
            <input type="email" name="email" required
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          </div>

          <!-- Full Name -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">
              Full Name <span class="text-red-500">*</span>
            </label>
            <input type="text" name="full_name" required
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          </div>

          <!-- Phone Number and Extension -->
          <div class="mb-4 flex space-x-2">
            <div class="flex-1">
              <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number:</label>
              <input type="tel" name="phone_number"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="w-20">
              <label class="block text-sm font-medium text-gray-700 mb-1">Ext:</label>
              <input type="text" name="extension"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
          </div>

          <!-- Internal Notes -->
          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Internal Notes:</label>
            <textarea name="internal_notes" rows="4"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
          </div>

          <!-- Modal Footer -->
          <div class="flex justify-between items-center pt-4">
            <button type="button" id="resetForm" class="px-4 py-2 text-gray-600 hover:text-gray-800">
              Reset
            </button>
            <div class="flex space-x-2">
              <button type="button" id="cancelModal" class="px-4 py-2 text-gray-600 hover:text-gray-800">
                Cancel
              </button>
              <button type="submit" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800">
                Add User
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url('assets/js/user-modal.js') ?>"></script>