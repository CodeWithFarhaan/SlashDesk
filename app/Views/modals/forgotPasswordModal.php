<!-- Modal Overlay -->
<div         
    id="modalOverlay"         
    class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4"
>
    <!-- Modal Container -->
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md transform transition-all duration-300 scale-95 opacity-0" id="modalContainer">
                    
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Reset Password</h2>
            <button                     
                id="closeModal"
                class="text-gray-400 hover:text-gray-600 transition-colors duration-200"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Step 1: Email Input -->
        <div id="step1" class="p-6">
            <div class="mb-4">
                <p class="text-gray-600 text-sm mb-4">Enter your email address and we'll send you an OTP to reset your password.</p>
            </div>
                            
            <form id="emailForm">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input                             
                        type="email"                             
                        id="email"                             
                        name="email"
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Enter your email address"
                    >
                </div>
                                    
                <button                         
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center"
                    id="sendOtpBtn"
                >
                    <span id="sendOtpText">Send OTP</span>
                    <svg id="sendOtpLoader" class="animate-spin -mr-1 ml-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Step 2: OTP Verification -->
        <div id="step2" class="p-6 hidden">
            <div class="mb-4">
                <p class="text-gray-600 text-sm mb-4">We've sent an OTP to <span id="emailDisplay" class="font-medium text-gray-800"></span>.</p>
            </div>
                            
            <form id="otpForm">
                <div class="mb-6">
                    <label for="otp" class="block text-sm font-medium text-gray-700 mb-2">Enter OTP</label>
                    <input                             
                        type="text"                             
                        id="otp"                             
                        name="otp"
                        required
                        maxlength="6"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-center text-lg tracking-widest"
                        placeholder="000000"
                    >
                </div>
                                    
                <div class="flex space-x-3">
                    <button                             
                        type="button"
                        id="backBtn"
                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-lg transition-colors duration-200"
                    >
                        Back
                    </button>
                    <button                             
                        type="submit"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center"
                        id="verifyOtpBtn"
                    >
                        <span id="verifyOtpText">Verify OTP</span>
                        <svg id="verifyOtpLoader" class="animate-spin -mr-1 ml-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </div>
            </form>
                            
            <div class="mt-4 text-center">
                <button                         
                    id="resendOtp"
                    class="text-blue-600 hover:text-blue-700 text-sm font-medium transition-colors duration-200"
                >
                    Didn't receive OTP? Resend
                </button>
            </div>
        </div>

        <!-- Step 3: New Password -->
        <div id="step3" class="p-6 hidden">
            <div class="mb-4">
                <p class="text-gray-600 text-sm mb-4">Please enter your new password below.</p>
            </div>
                            
            <form id="resetForm">
                <div class="mb-4">
                    <label for="newPassword" class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                    <input                             
                        type="password"                             
                        id="newPassword"                             
                        name="newPassword"
                        required
                        minlength="8"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Enter new password"
                    >
                </div>
                                    
                <div class="mb-6">
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input                             
                        type="password"                             
                        id="confirmPassword"                             
                        name="confirmPassword"
                        required
                        minlength="8"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="Confirm new password"
                    >
                </div>
                                    
                <div class="flex space-x-3">
                    <button                             
                        type="button"
                        id="backToOtpBtn"
                        class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-lg transition-colors duration-200"
                    >
                        Back
                    </button>
                    <button                             
                        type="submit"
                        class="flex-1 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center"
                        id="resetPasswordBtn"
                    >
                        <span id="resetPasswordText">Reset Password</span>
                        <svg id="resetPasswordLoader" class="animate-spin -mr-1 ml-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Success Message -->
        <div id="successMessage" class="p-6 text-center hidden">
            <div class="mb-4">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                    <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Password Reset Successful!</h3>
            <p class="text-gray-600 text-sm mb-4">Your password has been successfully reset. You can now login with your new password.</p>
            <button                     
                id="closeSuccessBtn"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200"
            >
                Close
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM Elements
        const forgotPasswordBtns = document.querySelectorAll('.forgotPasswordBtn');
        const modalOverlay = document.getElementById('modalOverlay');
        const modalContainer = document.getElementById('modalContainer');
        const closeModal = document.getElementById('closeModal');
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        const step3 = document.getElementById('step3');
        const successMessage = document.getElementById('successMessage');
        const emailForm = document.getElementById('emailForm');
        const otpForm = document.getElementById('otpForm');
        const resetForm = document.getElementById('resetForm');
        const backBtn = document.getElementById('backBtn');
        const backToOtpBtn = document.getElementById('backToOtpBtn');
        const resendOtp = document.getElementById('resendOtp');
        const closeSuccessBtn = document.getElementById('closeSuccessBtn');

        // Open Modal - Fixed to handle multiple buttons
        forgotPasswordBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default link behavior
                modalOverlay.classList.remove('hidden');
                modalOverlay.classList.add('flex');
                setTimeout(() => {
                    modalContainer.classList.remove('scale-95', 'opacity-0');
                    modalContainer.classList.add('scale-100', 'opacity-100');
                }, 10);
            });
        });

        // Close Modal Function
        function closeModalFunction() {
            modalContainer.classList.remove('scale-100', 'opacity-100');
            modalContainer.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modalOverlay.classList.add('hidden');
                modalOverlay.classList.remove('flex');
                // Reset to step 1
                step1.classList.remove('hidden');
                step2.classList.add('hidden');
                step3.classList.add('hidden');
                successMessage.classList.add('hidden');
                // Reset forms
                emailForm.reset();
                otpForm.reset();
                resetForm.reset();
            }, 300);
        }

        // Close Modal Events
        closeModal.addEventListener('click', closeModalFunction);
        closeSuccessBtn.addEventListener('click', closeModalFunction);

        // Close modal when clicking outside
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                closeModalFunction();
            }
        });

        // Step 1: Email Form Submission
        emailForm.addEventListener('submit', async (e) => {
            e.preventDefault();
                        
            const email = document.getElementById('email').value;
            const sendOtpBtn = document.getElementById('sendOtpBtn');
            const sendOtpText = document.getElementById('sendOtpText');
            const sendOtpLoader = document.getElementById('sendOtpLoader');
                        
            // Show loading state
            sendOtpBtn.disabled = true;
            sendOtpText.textContent = 'Sending...';
            sendOtpLoader.classList.remove('hidden');
                        
            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                sendOtpBtn.disabled = false;
                sendOtpText.textContent = 'Send OTP';
                sendOtpLoader.classList.add('hidden');
                                
                // Show step 2
                step1.classList.add('hidden');
                step2.classList.remove('hidden');
                                
                // Display email in step 2
                document.getElementById('emailDisplay').textContent = email;
                                
                // Show success message (simulate OTP sent)
                showToast('OTP sent successfully to ' + email, 'success');
            }, 2000);
        });

        // Step 2: OTP Form Submission
        otpForm.addEventListener('submit', async (e) => {
            e.preventDefault();
                        
            const otp = document.getElementById('otp').value;
                        
            // Validate OTP (simple validation)
            if (otp.length !== 6) {
                showToast('Please enter a valid 6-digit OTP', 'error');
                return;
            }
                        
            const verifyOtpBtn = document.getElementById('verifyOtpBtn');
            const verifyOtpText = document.getElementById('verifyOtpText');
            const verifyOtpLoader = document.getElementById('verifyOtpLoader');
                        
            // Show loading state
            verifyOtpBtn.disabled = true;
            verifyOtpText.textContent = 'Verifying...';
            verifyOtpLoader.classList.remove('hidden');
                        
            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                verifyOtpBtn.disabled = false;
                verifyOtpText.textContent = 'Verify OTP';
                verifyOtpLoader.classList.add('hidden');
                                
                // Show step 3
                step2.classList.add('hidden');
                step3.classList.remove('hidden');
            }, 2000);
        });

        // Step 3: Reset Form Submission
        resetForm.addEventListener('submit', async (e) => {
            e.preventDefault();
                        
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
                        
            // Validate passwords match
            if (newPassword !== confirmPassword) {
                showToast('Passwords do not match', 'error');
                return;
            }
                        
            const resetPasswordBtn = document.getElementById('resetPasswordBtn');
            const resetPasswordText = document.getElementById('resetPasswordText');
            const resetPasswordLoader = document.getElementById('resetPasswordLoader');
                        
            // Show loading state
            resetPasswordBtn.disabled = true;
            resetPasswordText.textContent = 'Resetting...';
            resetPasswordLoader.classList.remove('hidden');
                        
            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                resetPasswordBtn.disabled = false;
                resetPasswordText.textContent = 'Reset Password';
                resetPasswordLoader.classList.add('hidden');
                                
                // Show success message
                step3.classList.add('hidden');
                successMessage.classList.remove('hidden');
            }, 2000);
        });

        // Back Buttons
        backBtn.addEventListener('click', () => {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
        });

        backToOtpBtn.addEventListener('click', () => {
            step3.classList.add('hidden');
            step2.classList.remove('hidden');
        });

        // Resend OTP
        resendOtp.addEventListener('click', () => {
            const email = document.getElementById('email').value;
            showToast('OTP resent to ' + email, 'success');
        });

        // Toast Notification Function
        function showToast(message, type = 'info') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 z-50 px-4 py-2 rounded-lg text-white font-medium transform transition-all duration-300 translate-x-full ${
                type === 'success' ? 'bg-green-500' : 
                type === 'error' ? 'bg-red-500' : 'bg-blue-500'
            }`;
            toast.textContent = message;
                        
            document.body.appendChild(toast);
                        
            setTimeout(() => {
                toast.classList.remove('translate-x-full');
            }, 100);
                        
            setTimeout(() => {
                toast.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        }

        // Auto-format OTP input
        document.getElementById('otp').addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        // Escape key to close modal
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
                closeModalFunction();
            }
        });
    });
</script>