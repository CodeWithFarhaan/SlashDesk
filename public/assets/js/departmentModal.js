class TransferModal {
    constructor() {
        this.modal = document.getElementById('transferModal');
        this.form = document.getElementById('transferForm');
        this.init();
    }

    init() {
        this.bindEvents();
        this.setupFormValidation();
    }

    bindEvents() {
        // Close modal events
        document.getElementById('closeModal').addEventListener('click', () => this.close());
        document.getElementById('cancelBtn').addEventListener('click', () => this.close());
        
        // Close on backdrop click
        this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) {
                this.close();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !this.modal.classList.contains('hidden')) {
                this.close();
            }
        });

        // Reset button
        document.getElementById('resetBtn').addEventListener('click', () => this.resetForm());

        // Form submission
        this.form.addEventListener('submit', (e) => this.handleSubmit(e));

        // Department change validation
        document.getElementById('department').addEventListener('change', () => this.validateForm());
    }

    setupFormValidation() {
    const departmentSelect = document.getElementById('department');

    // Real-time validation (optional if you still want to validate input)
    departmentSelect.addEventListener('input', () => {
        this.validateForm();
    });

    // Initial validation
    this.validateForm();
    }

    validateForm() {
        // Just validate, but don't disable the button
        const department = document.getElementById('department').value;
        const transferBtn = document.getElementById('transferBtn');

        // Optional: You can show a warning or style the input if invalid,
        // but don't disable the button
        if (!department) {
            console.warn("Department not selected.");
            // Optionally add a warning class or message
        }

        // Ensure the button is always enabled and styled normally
        transferBtn.disabled = false;
        transferBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }

    open() {
        this.modal.classList.remove('hidden');
        this.modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        
        // Focus first input
        setTimeout(() => {
            document.getElementById('department').focus();
        }, 100);
    }

    close() {
        this.modal.classList.add('hidden');
        this.modal.classList.remove('flex');
        document.body.style.overflow = '';
        this.resetForm();
    }

    resetForm() {
        this.form.reset();
        this.validateForm();
        
        // Reset any error states
        this.clearErrors();
    }

    async handleSubmit(e) {
        e.preventDefault();
        
        if (!this.validateForm()) {
            return;
        }

        this.showLoading();
        
        try {
            const formData = new FormData(this.form);
            
            const response = await fetch(this.form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const result = await response.json();
            
            if (result.success) {
                this.showSuccess(result.message || 'Task transferred successfully!');
                setTimeout(() => {
                    this.close();
                    // Optionally reload page or update UI
                    if (typeof window.refreshTaskList === 'function') {
                        window.refreshTaskList();
                    }
                }, 1500);
            } else {
                this.showError(result.message || 'Transfer failed. Please try again.');
            }
        } catch (error) {
            console.error('Transfer error:', error);
            this.showError('An error occurred. Please try again.');
        } finally {
            this.hideLoading();
        }
    }

    showSuccess(message) {
        this.showNotification(message, 'success');
    }

    showError(message) {
        this.showNotification(message, 'error');
    }

    showNotification(message, type = 'info') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-70 p-4 rounded-lg shadow-lg max-w-sm transform transition-all duration-300 translate-x-full ${
            type === 'success' ? 'bg-green-500 text-white' : 
            type === 'error' ? 'bg-red-500 text-white' : 
            'bg-blue-500 text-white'
        }`;
        
        notification.innerHTML = `
            <div class="flex items-center space-x-2">
                <span>${message}</span>
                <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-white hover:text-gray-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 300);
        }, 5000);
    }

    clearErrors() {
        // Remove any existing error styling
        const inputs = this.form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.classList.remove('border-red-500', 'ring-red-500');
        });
    }
}

// Initialize modal when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.transferModal = new TransferModal();
});

// Function to open modal (call this from your main page)
function openTransferModal(taskId = null) {
    if (taskId) {
        document.querySelector('input[name="task_id"]').value = taskId;
    }
    window.transferModal.open();
}