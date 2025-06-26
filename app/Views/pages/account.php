<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Main Content -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 w-full max-w-5xl mx-auto mt-6">
  <!-- Header with Back Button -->
  <div class="flex items-center mb-8">
    <!-- <button onclick="history.back()" class="mr-4 p-2 rounded-full hover:bg-gray-100 transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
      </svg>
    </button> -->
    <h1 class="text-2xl font-bold text-gray-800">Personal Preferences</h1>
  </div>

  <!-- Profile Section -->
  <div class="flex flex-col md:flex-row gap-8 mb-8">
    <!-- Avatar Upload -->
    <div class="flex-shrink-0">
      <div class="relative group">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center overflow-hidden">
          <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
          </svg>
        </div>
        <button class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full shadow-md hover:bg-blue-600 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Form Fields -->
    <div class="flex-1 space-y-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input type="text" name="full_name" placeholder="Enter Name" value="<?= session()->get('username') ?>"
            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
          <input type="email" name="email" value="<?= session()->get('email') ?>" placeholder="your.email@example.com"
            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
          <div class="flex">
            <input type="tel" name="phone_number" placeholder="+1 (___) ___-____"
              class="flex-1 px-4 py-3 border border-gray-200 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
            <input type="text" name="phone_ext" placeholder="Ext"
              class="w-20 px-4 py-3 border-t border-r border-b border-gray-200 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
          </div>
        </div>
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
          <input type="tel" name="mobile_number" placeholder="+1 (___) ___-____"
            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
      </div>
    </div>
  </div>

  <!-- Authentication Section -->
  <div class="pt-6 border-t border-gray-100 mt-6 mb-8">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Authentication</h2>

    <div class="flex flex-col md:flex-row gap-4 items-start md:items-end">
      <div class="flex-1">
        <label class="block text-sm font-medium text-gray-700 mb-1">User ID</label>
        <input type="text" name="user_id" value="<?= session()->get('user_id') ?>" readonly
          class="w-full px-4 py-3 border border-gray-200 bg-gray-50 rounded-lg text-gray-500 cursor-not-allowed">
      </div>
      <button type="button" onclick="openPasswordModal()"
        class="px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
        </svg>
        Change Password
      </button>
    </div>
  </div>

  <!-- Action Buttons -->
  <div class="flex flex-col-reverse md:flex-row justify-end gap-3 pt-6 border-t border-gray-100 mt-8">
    <button type="button" onclick="resetForm()"
      class="px-6 py-3 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium">
      Reset
    </button>
    <button type="button" onclick="cancelChanges()"
      class="px-6 py-3 bg-white border border-red-100 text-red-600 rounded-lg hover:bg-red-50 transition-colors font-medium">
      Cancel
    </button>
    <button type="submit"
      class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium shadow-sm hover:shadow-md">
      Save Changes
    </button>
  </div>
</div>

<!-- Modern Password Modal (Placeholder) -->
<div id="passwordModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 p-4">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden">
    
    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-4 border-b">
      <h3 class="text-xl font-semibold text-gray-900">Change Password</h3>
      <button id="CannedcloseModalBtn" class="text-gray-400 hover:text-gray-600 transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Info text -->
    <div class="px-6 pt-5 pb-2">
      <p class="text-sm text-gray-600 mb-4">
        Confirm your current password and enter a new password to continue.
      </p>
    </div>

    <!-- Form fields -->
    <form id="passForm">
      <div class="px-6 space-y-4">
        <div>
          <label for="currentpassword" class="block text-sm font-medium text-gray-700 mb-1">Current Password <span class="text-red-500">*</span>
          </label>
          <input type="text" id="currentpassword" name="currentpassword" placeholder="Enter current password..."
            class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"/>
        </div>
        <div>
          <h3 class="text-blue-700">Enter New Password Section:</h3>
          <div class="mt-3">
            <label for="newpassword" class="block text-sm font-medium text-gray-700 mb-1">New Password <span class="text-red-500">*</span>
            </label>
            <input type="text" id="newpassword" name="newpassword" placeholder="Enter new password..."
              class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"/>
          </div>
          <div class="mt-3">
            <label for="confirmpassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password <span class="text-red-500">*</span>
            </label>
            <input type="text" id="confirmpassword" name="confirmpassword" placeholder="Confirm new password..."
              class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"/> 
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="flex flex-col sm:flex-row gap-3 mt-3 px-6 py-4 border-t bg-gray-50">
        <button type="button" id="passwordForm"
          class="sm:order-1 w-full sm:w-auto px-4 py-2 text-white bg-green-600 hover:bg-green-700 border border-green-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Update
        </button>
        <button type="reset" id="resetForm"
          class="sm:order-3 w-full sm:w-auto px-4 py-2 bg-white text-gray-600 border border-gray-300 rounded-lg text-sm font-medium transition focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Reset
        </button>
        <button type="button" form="PasswordcancelBtn"
          class="sm:order-2 w-full sm:w-auto px-4 py-2 text-white bg-red-600 hover:bg-red-700 border border-red-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Cancel
        </button>
      </div>
    </form>

  </div>
</div>


<script src="<?= base_url('assets/js/account.js') ?>"></script>