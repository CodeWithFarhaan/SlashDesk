<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Status Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="testingStatusModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-blue-600">Task #35773: Update Testing Status</h2>
                <button class="testingstatusclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- Testing Status Dropdown -->
                <div>
                    <label for="testingstatus" class="block text-sm font-medium text-gray-700 mb-2">
                        Testing Status:
                    </label>
                    <select id="testingstatus" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="failed">Failed</option>
                        <option value="na" selected>NA</option>
                        <option value="pass">Pass</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="testingStatusReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="testingStatusReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for testingstatus update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="testingstatusclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="testingStatusUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const testingStatusOpenButtons = document.querySelectorAll('.testingstatusopenmodal');
        const testingStatusCloseButtons = document.querySelectorAll('.testingstatusclosemodal');
        const testingStatusUpdateBtn = document.getElementById('testingStatusUpdateBtn');
        

        // Function to open complexity modal
        function openTestingStatusModal() {
            const testingStatusModal = document.getElementById('testingStatusModal');
            testingStatusModal.classList.remove('hidden');
            testingStatusModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close complexity modal
        function closeTestingStatusModal() {
            testingStatusModal.classList.add('hidden');
            testingStatusModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        testingStatusOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openTestingStatusModal();
            });
        });

        // Add event listeners to close buttons
        testingStatusCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeTestingStatusModal();
            });
        });

        // Close modal when clicking outside
        testingStatusModal.addEventListener('click', function(e) {
            if (e.target === testingStatusModal) {
                closeTestingStatusModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !testingStatusModal.classList.contains('hidden')) {
                closeTestingStatusModal();
            }
        });

        // Handle update button click
        testingStatusUpdateBtn.addEventListener('click', function() {
            const testingstatus = document.getElementById('testingstatus').value;
            const reason = document.getElementById('testingStatusReason').value;
                        
            // Here you can add your update logic
            console.log('Testing Status:', testingstatus);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`Testing Status updated to: ${testingstatus}`);
            closeTestingStatusModal();
                        
            // Reset form
            document.getElementById('testingStatusReason').value = '';
        });
    </script>
</body>
</html>
