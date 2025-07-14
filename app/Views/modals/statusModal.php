<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">  
<!-- Modal Backdrop -->
<div id="closeTaskModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <!-- Modal Container -->
    <div class="bg-white rounded-lg shadow-xl max-w-xl w-full max-h-[90vh] overflow-hidden">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-blue-700">
                Close Task #35773
            </h3>
            <button type="button" onclick="closeStatusModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-4">
            <!-- Warning Alert -->
            <div class="flex items-start space-x-3 p-3 bg-amber-50 border border-amber-200 rounded-lg mb-4">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-amber-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                </div>
                <p class="text-sm text-amber-800">
                    Are you sure you want to change status of this task?
                </p>
            </div>

            <!-- Form -->
            <form id="closeTaskForm" action="<?= base_url('tasks/close') ?>" method="POST">
                <input type="hidden" name="task_id" value="<?= $task_id ?? '35920' ?>">
                
                <!-- Textarea -->
                <div class="mb-6">
                    <label for="reason" class="block text-sm font-medium text-gray-700 mb-2">
                        Optional reason for status change (internal note)
                    </label>
                    <textarea 
                        id="reason" 
                        name="reason" 
                        rows="4" 
                        class="w-full px-3 py-2 border rounded-md shadow-sm border-blue-500 resize-none"
                        placeholder="Enter your reason here..."
                    ></textarea>
                </div>
            </form>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-between px-4 py-3 bg-gray-50 border-t border-gray-200">
            <div class="flex space-x-2">
                <button 
                    type="button" 
                    onclick="resetForm()" 
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors"
                >
                    Reset
                </button>
                <button 
                    type="button" 
                    onclick="closeStatusModal()" 
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors"
                >
                    Cancel
                </button>
            </div>
            <button 
                type="submit" 
                form="closeTaskForm"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors"
            >
                Submit
            </button>
        </div>
    </div>
</div>
</body>
<script>
function openStatusModal() {
    document.getElementById('closeTaskModal').classList.remove('hidden');
    document.getElementById('closeTaskModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeStatusModal() {
    document.getElementById('closeTaskModal').classList.add('hidden');
    document.getElementById('closeTaskModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
    resetForm();
}

function resetForm() {
    document.getElementById('closeTaskForm').reset();
}

// Close modal when clicking outside
document.getElementById('closeTaskModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeStatusModal(); // Changed from closeModal() to closeStatusModal()
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeStatusModal(); // Changed from closeModal() to closeStatusModal()
    }
});

// You can keep this for other modal triggers if needed
document.addEventListener('DOMContentLoaded', function() {
    // If you have multiple triggers with the same class
    const modalTriggers = document.querySelectorAll('.open-close-modal');
    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    });
});
</script>
</html>