<?= $this->include('layout/header') ?>

<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-purple-600 to-blue-700">
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

<!-- Main Content -->
<div class="bg-gradient-to-br from-blue-50 to-indigo-50 py-12 overflow-y-auto">
  <div class="w-[50rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Login Card with rotated header -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden flex">
      <!-- Card Body (Left Side) -->
      <div class="flex-1 p-8">
        <form action="#" method="POST" class="space-y-6">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
          </div>
          
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <div class="relative">
              <input type="password" id="password" name="password" placeholder="••••••••" required
                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
              <button type="button" onclick="togglePassword()"
                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="eye-icon">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
              </button>
            </div>
            <a href="/forgot-password" class="text-xs text-blue-600 hover:text-blue-700 mt-1 inline-block">Forgot password?</a>
          </div>
          
          <button type="submit" 
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors shadow-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Sign in
          </button>
        </form>

        <!-- Card Footer -->
        <div class="mt-6 text-center">
          <p class="text-sm text-gray-600">
            Not yet registered? <a href="/registration" class="font-medium text-blue-600 hover:text-blue-500">Create an account</a>
          </p>
          <p class="text-xs text-gray-500 mt-2">
            I'm an agent — <a href="/login" class="font-medium text-blue-600 hover:text-blue-500">sign in here</a>
          </p>
        </div>
      </div>

      <div class="w-[20rem] bg-blue-600 flex flex-col items-center justify-center py-4">
        <div class="text-center whitespace-nowrap">
          <h2 class="text-xl font-bold text-white">Sign in to your account</h2>
          <p class="text-blue-100 text-xs mt-1">To better serve you</p>
        </div>
        <img src="/assets/images/Mobile-login.png" alt="Mobile login" class="mt-4 w-full object-cover" style="filter: brightness(0.7);">
      </div>
    </div>
    
    <!-- Help Text -->
    <div class="mt-6 text-center">
      <p class="text-sm text-gray-600">
        If this is your first time contacting us or you've lost the ticket number, please
        <a href="/newTicket" class="font-medium text-blue-600 hover:text-blue-500">open a new ticket</a>
      </p>
    </div>
  </div>
</div>

<script src="<?= base_url('assets/js/newTicket.js') ?>"></script>
<?= $this->include('layout/footer') ?>