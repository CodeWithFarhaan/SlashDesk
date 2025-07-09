<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestedOn Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="testedOnModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-blue-600">Task #35773: Update Tested On</h2>
                <button class="testedclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- TestedOn Dropdown -->
                <div>
                    <label for="testedon" class="block text-sm font-medium text-gray-700 mb-2">
                        Tested On:
                    </label>
                    <select id="testedon" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="na" selected>NA</option>
                        <option value="production">Production</option>
                        <option value="uat">UAT</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="testedReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="testedReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for testedon update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="testedclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="testedUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const testedOpenButtons = document.querySelectorAll('.testedopenmodal');
        const testedCloseButtons = document.querySelectorAll('.testedclosemodal');
        const testedUpdateBtn = document.getElementById('testedUpdateBtn');
        

        // Function to open complexity modal
        function openTestedModal() {
            const testedOnModal = document.getElementById('testedOnModal');
            testedOnModal.classList.remove('hidden');
            testedOnModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close complexity modal
        function closeTestedModal() {
            testedOnModal.classList.add('hidden');
            testedOnModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        testedOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openTestedModal();
            });
        });

        // Add event listeners to close buttons
        testedCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeTestedModal();
            });
        });

        // Close modal when clicking outside
        testedOnModal.addEventListener('click', function(e) {
            if (e.target === testedOnModal) {
                closeTestedModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !testedOnModal.classList.contains('hidden')) {
                closeTestedModal();
            }
        });

        // Handle update button click
        testedUpdateBtn.addEventListener('click', function() {
            const testedon = document.getElementById('testedon').value;
            const reason = document.getElementById('testedReason').value;
                        
            // Here you can add your update logic
            console.log('TestedOn:', testedon);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`TestedOn updated to: ${testedon}`);
            closeTestedModal();
                        
            // Reset form
            document.getElementById('testedReason').value = '';
        });
    </script>
</body>
</html>
