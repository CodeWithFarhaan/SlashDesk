<?= $this->include('layout/header') ?>

<main>
  <!-- Hero Section with Background Image -->
  <section class="relative bg-gray-800 text-white">
    <!-- Background image with overlay -->
    <div class="absolute inset-0 bg-cover bg-center"
      style="background-image: url('/assets/images/carousel.jpg'); filter: brightness(0.7)"></div>

    <div class="container mx-auto px-4 py-16 md:py-24 relative z-10">
      <div class="max-w-2xl ml-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">SlashRTC Ticket Portal</h1>
        <div class="space-y-4 text-lg">
          <p>In order to streamline support requests and better serve you, we utilize a support ticket system.</p>
          <p>Every support request is assigned a unique ticket number which you can use to track the progress and
            responses online. For your reference we provide complete archives and history of all your support requests.
          </p>
          <p>A valid email address is required to submit a ticket.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Three Cards Section -->
  <section class="py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Open a New Ticket -->
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
          <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h2 class="text-xl font-bold text-indigo-600 mb-3">Open a New Ticket</h2>
          <p class="text-gray-600 mb-6">Please provide as much detail as possible so we can best assist you. To update a
            previously submitted ticket, please login.</p>
          <a href="/newTicket"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md transition duration-300">Open
            a New Ticket</a>
        </div>

        <!-- Card 2: Check Ticket Status -->
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
          <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
          </div>
          <h2 class="text-xl font-bold text-indigo-600 mb-3">Check Ticket Status</h2>
          <p class="text-gray-600 mb-6">We provide archives and history of all your current and past support requests
            complete with responses.</p>
          <a href="/ticketStatus"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md transition duration-300">Check
            Ticket Status</a>
        </div>

        <!-- Card 3: Frequently Asked Questions -->
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
          <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h2 class="text-xl font-bold text-indigo-600 mb-3">Frequently Asked Questions</h2>
          <p class="text-gray-600 mb-6">Be sure to browse our Frequently Asked Questions before opening a ticket</p>
          <a href="#"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md transition duration-300">Search</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->include('layout/footer') ?>