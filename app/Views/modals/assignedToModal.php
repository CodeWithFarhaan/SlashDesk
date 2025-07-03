<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!-- Modal Backdrop -->
<div class="modal-backdrop fixed inset-0 bg-black bg-opacity-50 hidden z-40" onclick="closeModal()"></div>

<!-- Modal Container -->
<div class="reassign-modal fixed inset-0 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200 bg-blue-50">
            <h3 class="text-lg font-medium text-blue-700">
                Task #35773: Reassign
            </h3>
            <button type="button" class="text-gray-400 hover:text-gray-600 transition-colors" onclick="closeModal()">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-4">
            <!-- Current Assignment Info -->
            <div class="bg-blue-50 border border-blue-200 rounded-md p-3 mb-4">
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-blue-700">
                        Task is currently assigned to <strong>hamza Shaikh</strong>
                    </p>
                </div>
            </div>

            <!-- Reassignment Form -->
            <form id="reassignForm" method="post" action="">
                <input type="hidden" name="task_id" value="36119">
                
                <!-- Assignee Selection -->
                <div class="mb-4">
                    <label for="assignee" class="block text-sm font-medium text-gray-700 mb-2">
                        Assignee: <span class="text-red-500">*</span>
                    </label>
                    <select name="assignee" id="assignee" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="">— Select —</option>
                        <option value="">Hie</option>
                    </select>
                </div>

                <!-- Maintain Access Checkbox -->
                <div class="mb-4">
                    <label class="flex items-start">
                        <input type="checkbox" name="maintain_access" value="1" class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-700">
                            Maintain referral access to current assignees
                        </span>
                    </label>
                </div>

                <!-- Optional Reason -->
                <div class="mb-6">
                    <label for="reason" class="block text-sm font-medium text-gray-700 mb-2">
                        Optional reason for the assignment
                    </label>
                    <textarea name="reason" id="reason" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none" placeholder="Enter reason for reassignment..."></textarea>
                </div>
            </form>
        </div>

        <!-- Modal Footer -->
        <div class="flex justify-between items-center p-4 border-t border-gray-200 bg-gray-50">
            <button type="button" onclick="resetForm()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                Reset
            </button>
            <div class="flex space-x-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Cancel
                </button>
                <button type="button" onclick="submitForm()" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Assign
                </button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add click event to all elements with 'open-reassign-modal' class
    const triggers = document.querySelectorAll('.open-reassign-modal');
    triggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    });
});

function openModal() {
    document.querySelector('.modal-backdrop').classList.remove('hidden');
    document.querySelector('.reassign-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.querySelector('.modal-backdrop').classList.add('hidden');
    document.querySelector('.reassign-modal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function resetForm() {
    document.getElementById('reassignForm').reset();
}

function submitForm() {
    const form = document.getElementById('reassignForm');
    const assignee = form.querySelector('[name="assignee"]').value;
    
    if (!assignee) {
        alert('Please select an assignee');
        return;
    }
    
    // You can add additional validation here
    form.submit();
}

// Close modal when clicking outside
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('modal-backdrop')) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>
</html>
