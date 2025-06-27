<?= $this->include('layout/header') ?>
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-50">
  <!-- Navigation Bar -->
  <nav class="bg-gradient-to-r from-purple-600 to-blue-700">
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
  <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Messages Container -->
    <div class="w-[56 rem] mx-auto mb-4">
      <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-4 rounded-lg shadow-sm">
          <div class="flex items-center">
            <svg class="h-5 w-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-green-700"><?= session()->getFlashdata('success') ?></p>
          </div>
        </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('errors')): ?>
        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-lg shadow-sm">
          <div class="flex items-start">
            <svg class="h-5 w-5 text-red-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div>
              <h3 class="text-red-800 font-medium mb-2">Please fix these errors:</h3>
              <ul class="list-disc list-inside text-red-700 space-y-1">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  <li><?= $error ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <!-- Registration Form Container -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden w-[full] mx-auto">
      <div class="md:flex">
        <!-- Left Side - Form -->
        <div class="p-8 md:p-10 md:w-2/3">
          <form action="<?= base_url('/registration') ?>" method="POST" id="registrationForm" class="space-y-6">
            <!-- Contact Information Section -->
            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-100">Contact Information</h3>
              <div class="space-y-4">
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                  <input type="email" name="email" id="email" placeholder="your@email.com" value="<?= old('email') ?>"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all <?= session()->getFlashdata('errors.email') ? 'border-red-500' : '' ?>"
                    required />
                </div>

                <div>
                  <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                  <input type="text" name="full_name" id="full_name" placeholder="John Doe" value="<?= old('full_name') ?>"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all <?= session()->getFlashdata('errors.full_name') ? 'border-red-500' : '' ?>"
                    required />
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                  <div class="sm:col-span-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" name="phone" id="phone" placeholder="(123) 456-7890" value="<?= old('phone') ?>"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all <?= session()->getFlashdata('errors.phone') ? 'border-red-500' : '' ?>"
                      required />
                  </div>
                  <div>
                    <label for="extension" class="block text-sm font-medium text-gray-700 mb-1">Extension</label>
                    <input type="text" name="extension" id="extension" placeholder="123" value="<?= old('extension') ?>"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Access Credentials Section -->
            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-4 pb-2 border-b border-gray-100">Account Credentials</h3>
              <div class="space-y-4">
                <div>
                  <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                  <div class="relative">
                    <input type="password" name="password" id="password" placeholder="••••••••"
                      class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all <?= session()->getFlashdata('errors.password') ? 'border-red-500' : '' ?>"
                      required />
                    <button type="button" onclick="togglePassword('password')"
                      class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="password-eye">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                      </svg>
                    </button>
                  </div>
                  <p class="mt-1 text-xs text-gray-500">Minimum 8 characters with at least one number</p>
                </div>

                <div>
                  <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                  <div class="relative">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••"
                      class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all <?= session()->getFlashdata('errors.confirm_password') ? 'border-red-500' : '' ?>"
                      required />
                    <button type="button" onclick="togglePassword('confirm_password')"
                      class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="confirm_password-eye">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="pt-4">
              <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors shadow-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create Account
              </button>
              <div class="mt-4 text-center text-sm text-gray-600">
                Already have an account? <a href="<?= base_url('/newTicket') ?>" class="text-blue-600 hover:text-blue-700 font-medium">Sign in</a>
              </div>
            </div>
          </form>
        </div>

        <!-- Right Side - Illustration -->
        <div class="hidden md:block md:w-1/3 bg-gradient-to-b from-purple-500 to-blue-600 p-8 flex items-center justify-center">
          <div class="text-center text-white">
            <h3 class="text-xl font-semibold mb-2">Welcome to SupportCenter</h3>
            <p class="text-blue-100">Create your account to get started with our support services</p>
            <img src="/assets/images/mobile-login.png" alt="Create Account" class="w-full max-w-xs mx-auto mb-6">
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<script src="<?= base_url('assets/js/registration.js') ?>"></script>

<?= $this->include('layout/footer') ?>