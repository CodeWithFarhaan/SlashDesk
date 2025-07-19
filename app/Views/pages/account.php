<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Main Content -->
<main class="flex-1 p-6 md:p-8 overflow-auto">
  <!-- Header with Back Button -->
  <div class="flex items-center mb-8">
    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 flex items-center">
      <span class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">
        Personal Preferences
      </span>
    </h1>
  </div>

  <!-- Profile Card -->
  <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md">
    <!-- Profile Section -->
    <div class="p-6 md:p-8">
      <div class="flex flex-col md:flex-row gap-8">
        <!-- Avatar Upload -->
        <div class="flex-shrink-0 flex flex-col items-center">
          <div class="relative group">
            <div class="w-28 h-28 bg-gradient-to-br from-blue-50 to-gray-100 rounded-full flex items-center justify-center overflow-hidden shadow-inner">
              <svg class="w-14 h-14 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
              </svg>
            </div>
            <button class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full shadow-md hover:bg-blue-600 transition-all transform hover:scale-110">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </button>
          </div>
          <span class="mt-3 text-sm font-medium text-gray-500">Profile Photo</span>
        </div>

        <!-- Form Fields -->
        <div class="flex-1 space-y-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-1">
              <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
              <input type="text" name="full_name" placeholder="Enter Name" value="<?= session()->get('username') ?>"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all hover:border-gray-300">
            </div>
            
            <div class="space-y-1">
              <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
              <input type="email" name="email" value="<?= session()->get('email') ?>" placeholder="your.email@example.com"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all hover:border-gray-300">
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-1">
              <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
              <div class="flex">
                <input type="tel" name="phone_number" placeholder="+1 (___) ___-____"
                  class="flex-1 px-4 py-3 border border-gray-200 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all hover:border-gray-300">
                <input type="text" name="phone_ext" placeholder="Ext"
                  class="w-20 px-4 py-3 border-t border-r border-b border-gray-200 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all hover:border-gray-300">
              </div>
            </div>
            
            <div class="space-y-1">
              <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
              <input type="tel" name="mobile_number" placeholder="+1 (___) ___-____"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all hover:border-gray-300">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Authentication Section -->
    <div class="px-6 md:px-8 py-6 border-t border-gray-100 bg-gray-50">
      <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        Authentication
      </h2>

      <div class="flex flex-col md:flex-row gap-4 items-start md:items-end">
        <div class="flex-1 w-full">
          <label class="block text-sm font-medium text-gray-700 mb-1">UserName:<span class="text-red-500 ml-1">*</span></label>
          <input type="text" name="username" value="Farru" readonly
            class="w-full px-4 py-3 border border-gray-200 bg-gray-100 rounded-lg text-gray-600 cursor-not-allowed">
        </div>
        <button type="button" onclick="openPasswordModal()"
          class="w-full md:w-auto px-5 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium flex items-center gap-2 hover:border-blue-300 hover:text-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
          </svg>
          Change Password
        </button>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="px-6 md:px-8 py-4 border-t border-gray-100 bg-white flex flex-col-reverse md:flex-row justify-end gap-3">
      <button type="button" onclick="resetForm()"
        class="px-6 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium hover:border-gray-300">
        Reset
      </button>
      <button type="button" onclick="cancelChanges()"
        class="px-6 py-2.5 bg-white border border-red-200 text-red-600 rounded-lg hover:bg-red-50 transition-colors font-medium hover:border-red-300">
        Cancel
      </button>
      <button type="submit"
        class="px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg hover:from-blue-700 hover:to-blue-600 transition-all font-medium shadow-sm hover:shadow-md transform hover:-translate-y-0.5">
        Save Changes
      </button>
    </div>
  </div>
</main>

<!-- Modern Password Modal -->
<div id="passwordModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 p-4 backdrop-blur-sm transition-opacity duration-300">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-4 border-b">
      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
        </svg>
        <h3 class="text-xl font-semibold text-gray-900">Change Password</h3>
      </div>
      <button id="closeModalBtn" class="text-gray-400 hover:text-gray-600 transition transform hover:rotate-90">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Info text -->
    <div class="px-6 pt-5 pb-2">
      <p class="text-sm text-gray-600 mb-4">
        For security, please confirm your current password and enter a new password.
      </p>
    </div>

    <!-- Form fields -->
    <form id="passForm">
      <div class="px-6 space-y-4">
        <div class="space-y-1">
          <label for="currentpassword" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
            Current Password <span class="text-red-500 ml-1">*</span>
          </label>
          <div class="relative">
            <input type="password" id="currentpassword" name="currentpassword" placeholder="Enter current password"
              class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition hover:border-gray-400"/>
            <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" onclick="togglePassword('currentpassword')">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </button>
          </div>
        </div>
        
        <div class="space-y-3">
          <h3 class="text-blue-600 font-medium flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Enter New Password
          </h3>
          
          <div class="space-y-1">
            <label for="newpassword" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
              New Password <span class="text-red-500 ml-1">*</span>
            </label>
            <div class="relative">
              <input type="password" id="newpassword" name="newpassword" placeholder="Enter new password"
                class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition hover:border-gray-400"/>
              <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" onclick="togglePassword('newpassword')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
            </div>
            <div class="text-xs text-gray-500 mt-1">
              Password must be at least 8 characters with 1 uppercase, 1 number, and 1 special character.
            </div>
          </div>
          
          <div class="space-y-1">
            <label for="confirmpassword" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
              Confirm Password <span class="text-red-500 ml-1">*</span>
            </label>
            <div class="relative">
              <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm new password"
                class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition hover:border-gray-400"/>
              <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" onclick="togglePassword('confirmpassword')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <div class="flex flex-col sm:flex-row gap-3 mt-6 px-6 py-4 border-t bg-gray-50">
        <button type="button" id="passwordForm"
          class="sm:order-1 w-full sm:w-auto px-4 py-2.5 text-white bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 border border-green-500 rounded-lg text-sm font-medium transition-all shadow-sm hover:shadow-md">
          Update Password
        </button>
        <button type="reset" id="resetForm"
          class="sm:order-3 w-full sm:w-auto px-4 py-2.5 bg-white text-gray-600 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition hover:border-gray-400">
          Reset
        </button>
        <button type="button" id="PasswordcancelBtn"
          class="sm:order-2 w-full sm:w-auto px-4 py-2.5 bg-white text-gray-600 border border-gray-300 rounded-lg text-sm font-medium hover:bg-gray-50 transition hover:border-gray-400">
          Cancel
        </button>
      </div>
    </form>
  </div>
</div>

<script src="<?= base_url('assets/js/account.js') ?>"></script>