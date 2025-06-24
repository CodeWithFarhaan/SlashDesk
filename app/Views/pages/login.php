<?= $this->include('layout/header') ?>
<!-- Main Content -->
<main class="flex-1">
  <div
    class="min-h-screen bg-gradient-to-br from-blue-600 via-purple-600 to-pink-500 flex items-center justify-center px-20">
    <div class="bg-white rounded-2xl shadow-2xl px-16 py-16">
      <div class="flex flex-col lg:flex-row">
        <!-- Left Side - Image -->
        <div class="lg:w-1/2 rounded-lg">
          <img src="/assets/images/login-banner.jpg" alt="Customer support representative"
            class="rounded-lg">
        </div>

        <!-- Right Side - Login Form -->
        <div class="lg:w-1/2">
          <div class="max-w-md mx-auto w-full">
            <!-- Greeting -->
            <div class="text-center mb-8">
              <h2 class="text-2xl font-bold text-slashdesk-pink mb-2">Hello !</h2>
              <p class="text-xl text-slashdesk-blue font-medium">Welcome to SlashDesk</p>
            </div>

            <!-- Logo -->
            <div class="flex justify-center mb-8">
              <div class="w-12 h-12 rounded-lg flex items-center justify-center">
                <img src="/assets/images/SlashLogo.png" alt="Logo" class="w-12 h-12">
              </div>
            </div>

            <!-- Login Form -->
            <form action="<?= base_url('auth/login') ?>" method="POST" class="space-y-6">
              <?= csrf_field() ?>

              <!-- Email Input -->
              <div>
                <input type="email" name="email" placeholder="Enter Email..." required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slashdesk-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
              </div>

              <!-- Password Input -->
              <div>
                <input type="password" name="password" placeholder="Enter Password..." required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slashdesk-blue focus:border-transparent outline-none transition-all duration-200 text-gray-700 placeholder-gray-400">
              </div>

              <!-- Login Button -->
              <button type="submit"
                class="w-full bg-gradient-to-r from-slashdesk-blue to-slashdesk-purple text-white py-3 px-4 rounded-lg font-medium hover:from-slashdesk-purple hover:to-slashdesk-blue transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slashdesk-blue">
                <a href="/dashboard">Login</a>
              </button>
            </form>

            <!-- Error Message -->
            <?php if (session()->getFlashdata('error')): ?>
              <div class="mt-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <?= session()->getFlashdata('error') ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?= $this->include('layout/footer') ?>