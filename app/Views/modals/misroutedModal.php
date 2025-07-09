<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misrouted Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="misroutedModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-blue-600">Task #35773: Update Misrouted</h2>
                <button class="misroutedclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- Misrouted Dropdown -->
                <div>
                    <label for="misrouted" class="block text-sm font-medium text-gray-700 mb-2">
                        Misrouted:
                    </label>
                    <select id="misrouted" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">— Select —</option>
                        <option value="614">L1 Support</option>
                        <option value="615">L2 Support</option>
                        <option value="823">L2-Presales</option>
                        <option value="616">L3 Dev Support</option>
                        <option value="629">MTT Issue</option>
                        <option value="634">MTT QA</option>
                        <option value="630">MTT-Phase3</option>
                        <option value="622" selected>NA</option>
                        <option value="628">New Instance</option>
                        <option value="631">NoBroker-MTT</option>
                        <option value="617">Onboarding</option>
                        <option value="618">Presales</option>
                        <option value="627">Product Fix</option>
                        <option value="626">Product Issues</option>
                        <option value="619">QA-Testing</option>
                        <option value="620">RCA Review</option>
                        <option value="633">Repetitive issue</option>
                        <option value="632">ResOps</option>
                        <option value="624">Slash Admin</option>
                        <option value="621">Slash IT HelpDesk</option>
                        <option value="635">Slash-Product</option>
                        <option value="623">Tech Operation</option>
                        <option value="636">Tech VAPT</option>
                        <option value="625">Telephony</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="misroutedReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="misroutedReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for misrouted update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="misroutedclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="misroutedUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const misroutedOpenButtons = document.querySelectorAll('.misroutedopenmodal');
        const misroutedCloseButtons = document.querySelectorAll('.misroutedclosemodal');
        const misroutedUpdateBtn = document.getElementById('misroutedUpdateBtn');
        

        // Function to open misrouted modal
        function openMisroutedModal() {
            const misroutedModal = document.getElementById('misroutedModal');
            misroutedModal.classList.remove('hidden');
            misroutedModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close misrouted modal
        function closeMisroutedModal() {
            misroutedModal.classList.add('hidden');
            misroutedModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        misroutedOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openMisroutedModal();
            });
        });

        // Add event listeners to close buttons
        misroutedCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeMisroutedModal();
            });
        });

        // Close modal when clicking outside
        misroutedModal.addEventListener('click', function(e) {
            if (e.target === misroutedModal) {
                closeMisroutedModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !misroutedModal.classList.contains('hidden')) {
                closeMisroutedModal();
            }
        });

        // Handle update button click
        misroutedUpdateBtn.addEventListener('click', function() {
            const misrouted = document.getElementById('misrouted').value;
            const reason = document.getElementById('misroutedReason').value;
                        
            // Here you can add your update logic
            console.log('Misrouted:', misrouted);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`Misrouted updated to: ${misrouted}`);
            closeMisroutedModal();
                        
            // Reset form
            document.getElementById('misroutedReason').value = '';
        });
    </script>
</body>
</html>
