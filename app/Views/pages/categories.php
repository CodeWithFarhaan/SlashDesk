<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<div class="flex-1 bg-gray-50 overflow-hidden">
  <!-- Main Content -->
  <div class="px-6 py-8 h-[calc(100vh-64px)] overflow-y-auto">
    <!-- Tabs -->
    <div class="max-w-4xl mx-auto mb-3">
      <div class="flex bg-gray-200 rounded-lg p-1">
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/faqs">FAQ's</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
          <a href="/categories">Categories</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/cannedResponse">Canned Response</a>
        </button>
      </div>
    </div>
    <div class="container mx-auto px-4 py-6">
      <!-- Getting Started Section -->
      <div class="grid md:grid-cols-2 gap-6">
        <!-- User Management Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Getting Started</h2>
          <p class="text-gray-600 mb-4">Everything you need to know to get up and running quickly.</p>
          <p class="text-sm text-gray-500 mb-4">12 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 2 days ago</p>
        </div>

        <!-- Account & Billing Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Account & Billing</h2>
          <p class="text-gray-600 mb-4">Manage your account settings and billing preferences:</p>
          <p class="text-sm text-gray-500 mb-4">8 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 1 weeks ago</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Product Features</h2>
          <p class="text-gray-600 mb-4">Learn about all the features and how to use them effectively</p>
          <p class="text-sm text-gray-500 mb-4">15 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 3 days ago</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">User Management</h2>
          <p class="text-gray-600 mb-4">Add, remove, add manage permissions</p>
          <p class="text-sm text-gray-500 mb-4">6 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 2 weeks ago</p>
        </div>

        <!-- Security & Privacy Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Security & Privacy</h2>
          <p class="text-gray-600 mb-4">Understand how to keep your data secure</p>
          <p class="text-sm text-gray-500 mb-4">9 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 5 days ago</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Troubleshooting</h2>
          <p class="text-gray-600 mb-4">Common issues and how to resolve them quickly</p>
          <p class="text-sm text-gray-500 mb-4">14 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 1 days ago</p>
        </div>

        <!-- API Documentation Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-lg font-semibold text-gray-800 mb-4">Api Documentation</h2>
          <p class="text-gray-600 mb-4">Comprehensive guides for developers using our Api</p>
          <p class="text-sm text-gray-500 mb-4">18 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 1 days ago</p>
        </div>

        <!-- Advanced Settings Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-lg font-semibold text-gray-800 mb-4">Advanced Settings</h2>
          <p class="text-gray-600 mb-4">Configure advanced options for power users</p>
          <p class="text-sm text-gray-500 mb-4">7 articles</p>
          <p class="text-gray-600 py-2 rounded-md">Updated 3 weeks ago</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url('assets/js/faqs.js') ?>"></script>