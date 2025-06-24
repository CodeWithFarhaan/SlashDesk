<?= $this->include('layout/header') ?>
<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-blue-600 to-blue-700">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex items-center justify-between h-14">
			<a href="/" class="text-white font-medium px-4 py-2 hover:bg-white hover:bg-opacity-10 rounded transition-colors">
				Support Center Home
			</a>

			<a href="/newTicket"
				class="text-white font-medium px-4 py-2 hover:bg-white hover:bg-opacity-10 rounded transition-colors">
				Open a New Ticket
			</a>

			<div class="bg-white rounded-full px-6 py-2">
				<a href="/ticketStatus" class="text-blue-600 font-medium">
					Check Ticket Status
				</a>
			</div>
		</div>
	</div>
</nav>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 py-8">
	<!-- Page Title and Description -->
	<div class="mb-8">
		<h1 class="text-3xl font-normal text-blue-600 mb-4">Check Ticket Status</h1>
		<p class="text-gray-600">Please provide your email address and a ticket number. An access link will be emailed
			to you.</p>
		<hr class="mt-4 border-gray-300">
	</div>

	<!-- Form Container -->
	<div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8 mb-8">
		<div class="flex flex-col lg:flex-row gap-8">
			<!-- Form Section -->
			<div class="flex-1">
				<form class="space-y-4">
					<div>
						<input type="email" placeholder="Enter Email..."
							class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
							required>
					</div>

					<div>
						<input type="text" placeholder="Enter Ticket No..."
							class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
							required>
					</div>

					<div>
						<button type="submit"
							class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
							Email Access Link
						</button>
					</div>
				</form>
			</div>

			<!-- Right Side Content -->
			<div class="flex-1 flex flex-col items-center justify-center text-center">
				<!-- Account Info -->
				<div class="mb-6">
					<p class="text-gray-600">
						Have an account with us?
						<a href="/newTicket" class="text-blue-600 hover:underline">Sign In</a>
						or
						<a href="/registration" class="text-blue-600 hover:underline">register for an account</a>
						to access all your tickets.
					</p>
				</div>

				<!-- Illustration -->
				<div>
					<div class="relative w-64 h-[11rem]"> <!-- adjust width and height as needed -->
						<div class="absolute inset-0 bg-cover bg-center"
							style="background-image: url('/assets/images/Mobile-login.png'); filter: brightness(0.7);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<p class="text-gray-600">
		If this is your first time contacting us or you've lost the ticket number, please
		<a href="/newTicket" class="text-blue-600 hover:text-blue-700 font-medium underline">
			open a new ticket
		</a>
	</p>
</div>
<?= $this->include('layout/footer') ?>