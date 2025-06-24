<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SlashDesk :: Staff Control Panel</title>
  <link rel="shortcut icon" href="<?= base_url('/assets/images/foot-logo.svg') ?>" type="image/x-icon">
  <!-- Include compiled Tailwind CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4f46e5',
            secondary: '#6366f1',
            'slashdesk-blue': '#4F46E5',
            'slashdesk-purple': '#7C3AED',
            'slashdesk-pink': '#EC4899',
          }
        }
      }
    }
  </script>
</head>

<body class="min-h-screen flex flex-col bg-gray-50">
  <header class="bg-white shadow-sm overflow-y-auto">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center">
        <div class="w-10 h-10 relative">
          <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('/assets/images/SlashLogo.png');"></div>
        </div>
        <div class="ml-2">
          <div class="font-bold text-lg">Slashdesk</div>
          <div class="text-xs text-gray-500">Support System</div>
        </div>
      </div>
      <div class="flex items-center space-x-2">
        <span class="text-gray-600">Guest User</span>
        <span class="text-gray-400">|</span>
        <a href="/newTicket" class="text-primary hover:text-indigo-700 font-medium">Sign In</a>
      </div>
    </div>
  </header>