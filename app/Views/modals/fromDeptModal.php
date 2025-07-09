<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Department Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Overlay -->
    <div id="fromDepartmentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-blue-600">Task #35773: Update From Department</h2>
                <button class="fromdepartmentclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
                        
            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- From Department Dropdown -->
                <div>
                    <label for="fromdepartment" class="block text-sm font-medium text-gray-700 mb-2">
                        From Department:
                    </label>
                    <select id="fromdepartment" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">— Select —</option>
                        <option value="480">Architectural Changes</option>
                        <option value="588">Code Merge</option>
                        <option value="407">Customer Deliveries</option>
                        <option value="403">DevOps</option>
                        <option value="405">DevOps - Activity</option>
                        <option value="404" selected>DevOps - Code Update</option>
                        <option value="487">DevOps Issues</option>
                        <option value="493">DevOps VAPT</option>
                        <option value="400">L1 Support</option>
                        <option value="401">L2 Support</option>
                        <option value="402">L3 Dev Support</option>
                        <option value="492">MTT Issues</option>
                        <option value="413">NOC</option>
                        <option value="488">Onboarding</option>
                        <option value="410">Presales</option>
                        <option value="489">Product Fix</option>
                        <option value="406">QA - Testing</option>
                        <option value="411">RCA Review</option>
                        <option value="408">Resops</option>
                        <option value="843">RFC</option>
                        <option value="409">Slash IT HelpDesk</option>
                        <option value="412">Tech Operation</option>
                        <option value="494">Tech VAPT</option>
                        <option value="490">Telephony</option>
                        <option value="491">VAPT Issues</option>
                    </select>
                </div>
                                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="fromDepartmentReason" class="block text-sm text-gray-500 mb-2">
                        Optional reason for the update
                    </label>
                    <textarea 
                        id="fromDepartmentReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Enter reason for from department update..."
                    ></textarea>
                </div>
            </div>
                        
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200">
                <button class="fromdepartmentclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="fromDepartmentUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get modal elements
        const fromDepartmentOpenButtons = document.querySelectorAll('.fromdepartmentopenmodal');
        const fromDepartmentCloseButtons = document.querySelectorAll('.fromdepartmentclosemodal');
        const fromDepartmentUpdateBtn = document.getElementById('fromDepartmentUpdateBtn');
        

        // Function to open fromdepartment modal
        function openFromDepartmentModal() {
            const fromDepartmentModal = document.getElementById('fromDepartmentModal');
            fromDepartmentModal.classList.remove('hidden');
            fromDepartmentModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close fromdepartment modal
        function closeFromDepartmentModal() {
            fromDepartmentModal.classList.add('hidden');
            fromDepartmentModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Add event listeners to open buttons
        fromDepartmentOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openFromDepartmentModal();
            });
        });

        // Add event listeners to close buttons
        fromDepartmentCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeFromDepartmentModal();
            });
        });

        // Close modal when clicking outside
        fromDepartmentModal.addEventListener('click', function(e) {
            if (e.target === fromDepartmentModal) {
                closeFromDepartmentModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !fromDepartmentModal.classList.contains('hidden')) {
                closeFromDepartmentModal();
            }
        });

        // Handle update button click
        fromDepartmentUpdateBtn.addEventListener('click', function() {
            const fromdepartment = document.getElementById('fromdepartment').value;
            const reason = document.getElementById('fromDepartmentReason').value;
                        
            // Here you can add your update logic
            console.log('From Department:', fromdepartment);
            console.log('Reason:', reason);
                        
            // For demo purposes, just close the modal
            alert(`From Department updated to: ${fromdepartment}`);
            closeFromDepartmentModal();
                        
            // Reset form
            document.getElementById('fromDepartmentReason').value = '';
        });
    </script>
</body>
</html>
