<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Missing Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="infoMissingModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-blue-600">Task #35773: Update Information Missing</h2>
                <button class="infomissingclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- Information Missing Dropdown -->
                <div>
                    <label for="infomissing" class="block text-sm font-medium text-gray-700 mb-2">
                        Information Missing:
                    </label>
                    <select id="infomissing" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="no" selected>No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="infoMissingReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="infoMissingReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for infomissing update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="infomissingclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="infoMissingUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const infoMissingOpenButtons = document.querySelectorAll('.infomissingopenmodal');
        const infoMissingCloseButtons = document.querySelectorAll('.infomissingclosemodal');
        const infoMissingUpdateBtn = document.getElementById('infoMissingUpdateBtn');
        

        // Function to open infomissing modal
        function openInfoMissingModal() {
            const infoMissingModal = document.getElementById('infoMissingModal');
            infoMissingModal.classList.remove('hidden');
            infoMissingModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close infomissing modal
        function closeInfoMissingModal() {
            infoMissingModal.classList.add('hidden');
            infoMissingModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        infoMissingOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openInfoMissingModal();
            });
        });

        // Add event listeners to close buttons
        infoMissingCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeInfoMissingModal();
            });
        });

        // Close modal when clicking outside
        infoMissingModal.addEventListener('click', function(e) {
            if (e.target === infoMissingModal) {
                closeInfoMissingModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !infoMissingModal.classList.contains('hidden')) {
                closeInfoMissingModal();
            }
        });

        // Handle update button click
        infoMissingUpdateBtn.addEventListener('click', function() {
            const infomissing = document.getElementById('infomissing').value;
            const reason = document.getElementById('infoMissingReason').value;
                        
            // Here you can add your update logic
            console.log('InfoMissing:', infomissing);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`InfoMissing updated to: ${infomissing}`);
            closeInfoMissingModal();
                        
            // Reset form
            document.getElementById('infoMissingReason').value = '';
        });
    </script>
</body>
</html>
