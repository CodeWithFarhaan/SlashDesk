<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Type Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="taskTypeModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-blue-600">Task #35773: Update Task Type</h2>
                <button class="tasktypeclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- Task Type Dropdown -->
                <div>
                    <label for="tasktype" class="block text-sm font-medium text-gray-700 mb-2">
                        Task Type:
                    </label>
                    <select id="tasktype" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="activity" selected>Activity</option>
                        <option value="codemerge">Code Merge</option>
                        <option value="codeupdate" selected>Code Update</option>
                        <option value="customization">Customization</option>
                        <option value="issue">Issue</option>
                        <option value="na">NA</option>
                        <option value="qatest">QA Test</option>
                        <option value="rcareview">RCA Review</option>
                        <option value="serveralerts">Server Alerts</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="taskTypeReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="taskTypeReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for tasktype update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="tasktypeclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="taskTypeUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const tastTypeOpenButtons = document.querySelectorAll('.tasktypeopenmodal');
        const taskTypeCloseButtons = document.querySelectorAll('.tasktypeclosemodal');
        const taskTypeUpdateBtn = document.getElementById('taskTypeUpdateBtn');
        

        // Function to open tasktype modal
        function openTaskTypeModal() {
            const taskTypeModal = document.getElementById('taskTypeModal');
            taskTypeModal.classList.remove('hidden');
            taskTypeModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close tasktype modal
        function closeTaskTypeModal() {
            taskTypeModal.classList.add('hidden');
            taskTypeModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        tastTypeOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openTaskTypeModal();
            });
        });

        // Add event listeners to close buttons
        taskTypeCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeTaskTypeModal();
            });
        });

        // Close modal when clicking outside
        taskTypeModal.addEventListener('click', function(e) {
            if (e.target === taskTypeModal) {
                closeTaskTypeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !taskTypeModal.classList.contains('hidden')) {
                closeTaskTypeModal();
            }
        });

        // Handle update button click
        taskTypeUpdateBtn.addEventListener('click', function() {
            const tasktype = document.getElementById('tasktype').value;
            const reason = document.getElementById('taskTypeReason').value;
                        
            // Here you can add your update logic
            console.log('Task Type:', tasktype);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`Task Type updated to: ${tasktype}`);
            closeTaskTypeModal();
                        
            // Reset form
            document.getElementById('taskTypeReason').value = '';
        });
    </script>
</body>
</html>
