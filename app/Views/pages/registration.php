<?= $this->include('layout/header') ?>

<div class="min-h-screen bg-gray-50">
  <!-- Navigation Bar -->
  <nav class="bg-gradient-to-r from-blue-600 to-blue-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-14">
        <div class="bg-white rounded-full px-6 py-2">
          <a href="/" class="text-blue-600 font-medium">
            Support Center Home
          </a>
        </div>

        <a href="/newTicket"
          class="text-white font-medium px-4 py-2 hover:bg-white hover:bg-opacity-10 rounded transition-colors">
          Open a New Ticket
        </a>

        <a href="/ticketStatus"
          class="text-white font-medium px-4 py-2 hover:bg-white hover:bg-opacity-10 rounded transition-colors">
          Check Ticket Status
        </a>
      </div>
    </div>
  </nav>
  <!-- Main Content -->
  <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Page Header -->
    <div class="mb-8">
      <h2 class="text-3xl font-semibold text-blue-600 mb-3">Account Registration</h2>
      <p class="text-gray-600 mb-6">
        Use the forms below to create or update the information we have on file for your account
      </p>
      <hr class="border-gray-300" />
    </div>

    <!-- Display Success Message -->
    <?php if (session()->getFlashdata('success')): ?>
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        <?= session()->getFlashdata('success') ?>
      </div>
    <?php endif; ?>

    <!-- Display Validation Errors -->
    <?php if (session()->getFlashdata('errors')): ?>
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        <ul class="list-disc list-inside">
          <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= $error ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <!-- Registration Form Container -->
    <div class="bg-white rounded-lg shadow-lg p-8">
      <form action="<?= base_url('auth/processRegistration') ?>" method="POST" id="registrationForm">
        <?= csrf_field() ?>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
          <!-- Left Side - Form -->
          <div class="lg:col-span-2 space-y-8">
            <!-- Contact Information Section -->
            <div>
              <h3 class="text-xl font-semibold text-blue-600 mb-6">Contact Information</h3>
              <div class="space-y-4">
                <div>
                  <input type="email" name="email" placeholder="Enter Email..." value="<?= old('email') ?>"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 <?= session()->getFlashdata('errors.email') ? 'border-red-500' : '' ?>"
                    required />
                </div>

                <div>
                  <input type="text" name="full_name" placeholder="Enter Full Name..." value="<?= old('full_name') ?>"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 <?= session()->getFlashdata('errors.full_name') ? 'border-red-500' : '' ?>"
                    required />
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                  <div class="sm:col-span-2">
                    <input type="tel" name="phone" placeholder="Phone Number..." value="<?= old('phone') ?>"
                      class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 <?= session()->getFlashdata('errors.phone') ? 'border-red-500' : '' ?>"
                      required />
                  </div>
                  <div>
                    <input type="text" name="extension" placeholder="Ext" value="<?= old('extension') ?>"
                      class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Access Credentials Section -->
            <div>
              <h3 class="text-xl font-semibold text-blue-600 mb-6">Access Credentials</h3>
              <div class="space-y-4">
                <div class="relative">
                  <input type="password" name="password" id="password" placeholder="Create a Password..."
                    class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 <?= session()->getFlashdata('errors.password') ? 'border-red-500' : '' ?>"
                    required />
                  <button type="button" id="togglePassword" onclick="togglePassword('password', 'togglePassword')"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5 eye-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                      </path>
                    </svg>
                    <svg class="w-5 h-5 eye-off-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21">
                      </path>
                    </svg>
                  </button>
                </div>

                <div class="relative">
                  <input type="password" name="confirm_password" id="confirmPassword"
                    placeholder="Confirm New Password..."
                    class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 <?= session()->getFlashdata('errors.confirm_password') ? 'border-red-500' : '' ?>"
                    required />
                  <button type="button" id="toggleConfirmPassword"
                    onclick="togglePassword('confirmPassword', 'toggleConfirmPassword')"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5 eye-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                      </path>
                    </svg>
                    <svg class="w-5 h-5 eye-off-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21">
                      </path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6">
              <button type="submit"
                class="bg-green-500 hover:bg-green-600 text-white font-medium px-8 py-3 rounded-md transition-colors disabled:opacity-50"
                id="submitBtn">
                Register
              </button>
              <a href="<?= base_url('login') ?>"
                class="bg-red-500 hover:bg-red-600 text-white font-medium px-8 py-3 rounded-md transition-colors text-center">
                Cancel
              </a>
            </div>
          </div>

          <!-- Right Side - Illustration -->
          <div class="lg:col-span-1 flex justify-center items-center">
            <div class="relative">
              <!-- Illustration Container -->
              <div class="w-64 h-64 relative">
                <!-- Illustration -->
                <div>
                  <div class="relative w-64 h-40">
                    <div class="absolute inset-0 bg-cover bg-center"
                      style="background-image: url('/assets/images/Mobile-login.png'); filter: brightness(0.7);"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </main>
</div>

<?= $this->include('layout/footer') ?>