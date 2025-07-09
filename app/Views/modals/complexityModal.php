<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complexity Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="complexityModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Task #36249: Update Complexity</h2>
                <button class="complexityclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- Complexity Dropdown -->
                <div>
                    <label for="complexity" class="block text-sm font-medium text-gray-700 mb-2">
                        Complexity:
                    </label>
                    <select id="complexity" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="low" selected>Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="complexityReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="complexityReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for complexity update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="complexityclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="complexityUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const complexityOpenButtons = document.querySelectorAll('.complexityopenmodal');
        const complexityCloseButtons = document.querySelectorAll('.complexityclosemodal');
        const complexityUpdateBtn = document.getElementById('complexityUpdateBtn');
        

        // Function to open complexity modal
        function openComplexityModal() {
            const complexityModal = document.getElementById('complexityModal');
            complexityModal.classList.remove('hidden');
            complexityModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close complexity modal
        function closeComplexityModal() {
            complexityModal.classList.add('hidden');
            complexityModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        complexityOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openComplexityModal();
            });
        });

        // Add event listeners to close buttons
        complexityCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeComplexityModal();
            });
        });

        // Close modal when clicking outside
        complexityModal.addEventListener('click', function(e) {
            if (e.target === complexityModal) {
                closeComplexityModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !complexityModal.classList.contains('hidden')) {
                closeComplexityModal();
            }
        });

        // Handle update button click
        complexityUpdateBtn.addEventListener('click', function() {
            const complexity = document.getElementById('complexity').value;
            const reason = document.getElementById('complexityReason').value;
                        
            // Here you can add your update logic
            console.log('Complexity:', complexity);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`Complexity updated to: ${complexity}`);
            closeComplexityModal();
                        
            // Reset form
            document.getElementById('complexityReason').value = '';
        });
    </script>
</body>
</html>
