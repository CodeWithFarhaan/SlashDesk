<?= $this->include('layout/header') ?>
<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-blue-600 to-blue-700">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-14">
      <a href="/" class="text-white font-medium px-4 py-2 hover:bg-white hover:bg-opacity-10 rounded transition-colors">
        Support Center Home
      </a>

      <div class="bg-white rounded-full px-6 py-2">
        <a href="/newTicket" class="text-blue-600 font-medium">
          Open a New Ticket
        </a>
      </div>

      <a href="/ticketStatus" class="text-white font-medium px-4 py-2 hover:bg-white hover:bg-opacity-10 rounded transition-colors">
        Check Ticket Status
      </a>
    </div>
  </div>
</nav>
<div class="flex-1 w-[70%] mx-auto px-4 sm:px-6 lg:px-8 py-8">
  <!-- Main Content -->
  <main class="#">
    <!-- Page Header -->
    <div class="mb-8">
      <h2 class="text-3xl font-semibold text-blue-600 mb-2">Sign in to SlashRTC</h2>
      <p class="text-gray-600 mb-4">To better serve you, we encourage our Clients to register for an account.</p>
      <hr class="border-gray-300">
    </div>

    <!-- Login Container -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Left Side - Login Form -->
        <div class="space-y-6">
          <div>
            <input type="email" placeholder="Enter Email..."
              class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400">
          </div>

          <div>
            <input type="password" placeholder="Enter Password..."
              class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400">
          </div>

          <button class="bg-green-500 hover:bg-green-600 text-white font-medium px-6 py-2 rounded-md transition-colors">
            Sign In
          </button>
        </div>

        <!-- Right Side - Registration Info and Illustration -->
        <div class="flex justify-center mt-8">
          <div class="space-y-4">
            <div>
              <span class="text-gray-700 font-medium">Not yet registered? </span>
              <a href="/registration" class="text-blue-600 hover:text-blue-700 font-medium underline">
                Create an account
              </a>
            </div>

            <div>
              <span class="text-gray-700 font-medium">I'm an agent — </span>
              <a href="/login" class="text-blue-600 hover:text-blue-700 font-medium underline">
                sign in here
              </a>
            </div>
          </div>

          <!-- Illustration -->
          <div>
            <div class="relative w-64 h-40"> <!-- adjust width and height as needed -->
              <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('/assets/images/Mobile-login.png'); filter: brightness(0.7);"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Help Text -->
  </main>

  <p class="text-gray-600">
    If this is your first time contacting us or you've lost the ticket number, please
    <a href="/newTicket" class="text-blue-600 hover:text-blue-700 font-medium underline">
      open a new ticket
    </a>
  </p>
</div>

<?= $this->include('layout/footer') ?>