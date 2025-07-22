<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>



<!-- Main Content Wrapper -->
<div class="flex-1 p-6 overflow-auto relative">
  <!-- Page Heading -->
  <h1 class="text-md text-gray-500 font-semibold mb-2">Below are all the listed Organizations.</h1>

  <!-- Section Header -->
  <div class="flex justify-between items-center mt-6 mb-4">
    <h2 class="text-lg font-semibold">All Organizations</h2>

    <!-- Filters -->
    <div class="flex items-center space-x-2">
      <input type="text" placeholder="Search..."
        class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-64 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />

      <button id="addOrganizationBtn"
        class="bg-black text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200 flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Add Organizations
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
  <div class="mt-3 overflow-auto border border-gray-200 rounded-lg shadow-sm">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-50 text-gray-900 font-semibold">
        <tr>
          <th class="px-4 py-3">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 rounded focus:ring-blue-500">
          </th>
          <th class="px-6 py-3">Name</th>
          <th class="px-6 py-3">Domain</th>
          <th class="px-6 py-3">Created By</th>
          <th class="px-6 py-3">is Active</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200">

        <?php foreach ($responseBody as $key => $value) { ?>
        <tr class="hover:bg-yellow-50 <?= $key%2==0 ? 'bg-blue-50' : 'bg-white' ?> transition-colors duration-150">
          <td class="px-4 py-4">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 rounded focus:ring-blue-500">
          </td>
          <td class="px-6 py-4 text-blue-600"><?= print_r($value['organization_name']) ?> </td>
          <td class="px-6 py-4 text-gray-900"><?= print_r($value['domain']) ?></td>
          <td class="px-6 py-4 text-gray-600"><?= print_r($value['created_by']) ?> </td> 
          <td class="px-6 py-4">
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" <?= $value['is_active'] ? "checked" : "" ?> class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
            </label>
          </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
<!-- Add Organization Modal -->
<div id="organizationModal"
  class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
  <div
    class="bg-white rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto transform transition-all duration-300 scale-95 opacity-0"
    id="modalContent">
    <!-- Modal Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200">
      <div class="flex items-center gap-3">
        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
          <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
            </path>
          </svg>
        </div>
        <h2 class="text-xl font-semibold text-gray-900">Add New Organization</h2>
      </div>
      <button id="closeModal" class="text-gray-400 hover:text-gray-600 transition-colors duration-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <!-- Info Banner -->
    <div class="mx-6 mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
      <div class="flex items-start gap-3">
        <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="text-blue-800 text-sm">Complete the form below to add a new organization.</p>
      </div>
    </div>

    <!-- Form Section -->
    <div class="p-6">
      <div class="bg-gray-50 rounded-lg p-4 mb-6">
        <h3 class="font-semibold text-gray-900 mb-1">Create New Organization:</h3>
        <p class="text-sm text-gray-600">Details on user organization</p>
      </div>

      <form id="organizationForm" action="<?= base_url('organizations/store') ?>" method="POST" class="space-y-6">

        <!-- Name Field -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
            Name <span class="text-red-500">*</span>
          </label>
          <input type="text" id="name" name="name" required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200"
            placeholder="Enter organization name">
        </div>

        <!--  -->
        <div>
          <label for="code" class="block text-sm font-medium text-gray-700 mb-2">
            Code <span class="text-red-500">*</span>
          </label>
          <input type="text" id="code" name="code" required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200"
            placeholder="Enter organization Code">
        </div>

        <div>
             <label for="active" class="block text-sm font-medium text-gray-700 mb-2">
            Is Active? <span class="text-red-500">*</span>
             </label>
             <select id="active" name="active" required
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200">
                 <option value="">-- Select Option --</option>
                 <option value="1">Yes</option>
                 <option value="0">No</option>
             </select>     
        </div>
        <div>
          <label for="Domain" class="block text-sm font-medium text-gray-700 mb-2">Domain</label>
          <input type="url" id="Domain" name="Domain"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200"
            placeholder="https://example.com">
        </div>

        <!-- Internal Notes Field -->
        <div>
          <label for="Description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
          <textarea id="Description" name="Description" rows="4"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200 resize-none"
            placeholder="Enter Description about this organization"></textarea>
        </div>



        <div class="flex items-center justify-between p-6 border-t border-gray-200 bg-gray-50 rounded-b-xl">
      <div class="flex gap-3">
        <button type="button" id="resetForm"
          class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
          Reset
        </button>
        <button type="button" id="cancelModal"
          class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200">
          Cancel
        </button>
      </div>
      <button type="submit" form="organizationForm"
        class="px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200 flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Add Organization
      </button>
    </div>
      </form>
    </div>

    <!-- Modal Footer -->
    
  </div>
</div>
<script src="<?= base_url('assets/js/organization-modal.js') ?>"></script>










