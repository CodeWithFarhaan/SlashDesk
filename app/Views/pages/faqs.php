<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<div class="flex-1 bg-gray-50 overflow-hidden">
  <!-- Main Content -->
  <div class="px-6 py-8 h-[calc(100vh-64px)] overflow-y-auto">
    <!-- Knowledge Base Header -->
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-gray-900 mb-2">Knowledge Base</h1>
      <p class="text-gray-600 mb-6">Find answers to your questions and explore our resources</p>

      <!-- Search Bar -->
      <div class="max-w-md mx-auto relative">
        <div class="relative">
          <input type="text" placeholder="Search..."
            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <button
          class="absolute right-0 top-0 h-full px-4 bg-black text-white rounded-r-lg hover:bg-gray-800 transition-colors">
          Search
        </button>
      </div>
    </div>

    <!-- Tabs -->
    <div class="max-w-4xl mx-auto mb-8">
      <div class="flex bg-gray-200 rounded-lg p-1">
        <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
          <a href="/faqs">FAQ's</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/categories">Categories</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/cannedResponse">Canned Response</a>
        </button>
      </div>
    </div>

    <!-- FAQ Section -->
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>

      <div class="space-y-4" id="faq-accordion">
        <!-- FAQ Item 1 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-1">
            <span class="font-medium text-gray-900">How do I create an account?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">To create an account, click on the "Sign Up" button in the top right corner of the
              homepage. Fill in your details including name, email address, and password. Once submitted, you'll receive
              a verification email. Click the link in the email to verify your account and you're all set!</p>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-2">
            <span class="font-medium text-gray-900">What payment methods do you accept?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and
              bank transfers. For enterprise customers, we also offer invoicing options. All payments are processed
              securely through our payment gateway.</p>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-3">
            <span class="font-medium text-gray-900">How can I reset my password?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">If you've forgotten your password, click on the "Login" button and then select
              "Forgot Password". Enter the email address associated with your account, and we'll send you a password
              reset link. Follow the instructions in the email to create a new password.</p>
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-4">
            <span class="font-medium text-gray-900">Can I upgrade or downgrade my subscription?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">Yes, you can change your subscription plan at any time. Go to your Account Settings
              and select "Subscription". From there, you can choose to upgrade or downgrade your plan. Changes to your
              subscription will be prorated and reflected in your next billing cycle.</p>
          </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-5">
            <span class="font-medium text-gray-900">How do I contact customer support?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">Our customer support team is available 24/7. You can reach us through the "Contact
              Us" form on our website, by emailing support@example.com, or by calling our toll-free number at
              1-800-123-4567. For premium users, we also offer priority support through our dedicated support portal.
            </p>
          </div>
        </div>

        <!-- FAQ Item 6 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-6">
            <span class="font-medium text-gray-900">What is your refund policy?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">We offer a 30-day money-back guarantee for all new subscriptions. If you're not
              satisfied with our service within the first 30 days, you can request a full refund. After this period,
              refunds are handled on a case-by-case basis. Please contact our support team to discuss your specific
              situation.</p>
          </div>
        </div>

        <!-- FAQ Item 7 -->
        <div class="bg-white border border-gray-200 rounded-lg">
          <button
            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors faq-trigger"
            data-target="faq-7">
            <span class="font-medium text-gray-900">Is my data secure?</span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">Yes, we take data security very seriously. All data is encrypted both in transit
              and at rest. We use industry-standard security protocols and regularly undergo security audits. We are
              GDPR compliant and never share your personal information with third parties without your consent.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url('assets/js/faqs.js') ?>"></script>