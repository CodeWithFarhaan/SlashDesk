<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Edit Task Overlay -->
    <div id="editTaskModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Edit Task Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 flex flex-col">
            <!-- Edit Task Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200 flex-shrink-0">
                <h2 class="text-lg font-semibold text-blue-600">Edit Task #35773</h2>
                <button class="edittaskclosemodal text-gray-400 hover:text-gray-600 text-xl font-bold w-6 h-6 flex items-center justify-center">
                    ×
                </button>
            </div>
            
            <!-- Modal Body - Made scrollable -->
            <div class="p-4 space-y-4 overflow-y-auto max-h-[calc(100vh-160px)]">
                <!-- Edit Task Dropdown -->
                <div>
                    <h2 class="font-bold text-xl">Task Information</h2>
                    <p class="mt-3">Please Describe The Issue</p>
                    <label class="mt-3 block">Title:<span class="text-red-500">*</span></label>
                    <input id="taskTitle" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="BFL Automated Leadset Removal Issue">
                    
                    <label for="edittask" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        Complexity:
                    </label>
                    <select id="edittask" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="low" selected>Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                    
                    <label for="testedon" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        Tested On: <span class="text-red-500">*</span>
                    </label>
                    <select id="testedon" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="na" selected>NA</option>
                        <option value="production">Production</option>
                        <option value="uat">UAT</option>
                    </select>
                    
                    <label for="testingstatus" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        Testing Status: <span class="text-red-500">*</span>
                    </label>
                    <select id="testingstatus" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="failed">Failed</option>
                        <option value="na" selected>NA</option>
                        <option value="pass">Pass</option>
                    </select>
                    
                    <label for="tasktype" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        Task Type: <span class="text-red-500">*</span>
                    </label>
                    <select id="tasktype" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="activity">Activity</option>
                        <option value="codemerge">Code Merge</option>
                        <option value="codeupdate" selected>Code Update</option>
                        <option value="customization">Customization</option>
                        <option value="issue">Issue</option>
                        <option value="na">NA</option>
                        <option value="qatest">QA Test</option>
                        <option value="rcareview">RCA Review</option>
                        <option value="serveralerts">Server Alerts</option>
                    </select>
                    
                    <label for="fromdepartment" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        From Department: <span class="text-red-500">*</span>
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
                    
                    <label for="misrouted" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        Misrouted: <span class="text-red-500">*</span>
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
                    
                    <label for="infomissing" class="mt-3 block text-sm font-medium text-gray-700 mb-2">
                        Information Missing:
                    </label>
                    <select id="infomissing" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="no" selected>No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                
                <!-- Optional Reason Textarea -->
                <div>
                    <label for="editTaskReason" class="block text-sm text-gray-500 mb-2">
                        Internal Note
                    </label>
                    <textarea 
                        id="editTaskReason"
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                        placeholder="Reason for editing the task (optional)"
                    ></textarea>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="flex justify-end space-x-3 p-4 border-t border-gray-200 flex-shrink-0">
                <button id="editTaskResetBtn" class="px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Reset
                </button>
                <button class="edittaskclosemodal px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button id="editTaskUpdateBtn" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </div>
    </div>
    <script>
        // Get modal elements
        const editTaskOpenButtons = document.querySelectorAll('.edittaskopenmodal');
        const editTaskCloseButtons = document.querySelectorAll('.edittaskclosemodal');
        const editTaskUpdateBtn = document.getElementById('editTaskUpdateBtn');
        const editTaskResetBtn = document.getElementById('editTaskResetBtn'); // New reset button
        const editTaskModal = document.getElementById('editTaskModal'); // Define here for broader scope

        // Store initial form values for reset
        const initialValues = {
            taskTitle: "BFL Automated Leadset Removal Issue",
            edittask: "low",
            testedon: "na",
            testingstatus: "na",
            tasktype: "activity",
            fromdepartment: "404",
            misrouted: "622",
            infomissing: "no",
            editTaskReason: ""
        };

        // Function to open edittask modal
        function openEditTaskModal() {
            editTaskModal.classList.remove('hidden');
            editTaskModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        // Function to close edittask modal
        function closeEditTaskModal() {
            editTaskModal.classList.add('hidden');
            editTaskModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Function to reset form fields to initial values
        function resetForm() {
            document.getElementById('taskTitle').value = initialValues.taskTitle;
            document.getElementById('edittask').value = initialValues.edittask;
            document.getElementById('testedon').value = initialValues.testedon;
            document.getElementById('testingstatus').value = initialValues.testingstatus;
            document.getElementById('tasktype').value = initialValues.tasktype;
            document.getElementById('fromdepartment').value = initialValues.fromdepartment;
            document.getElementById('misrouted').value = initialValues.misrouted;
            document.getElementById('infomissing').value = initialValues.infomissing;
            document.getElementById('editTaskReason').value = initialValues.editTaskReason;
        }

        // Add event listeners to open buttons
        editTaskOpenButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                openEditTaskModal();
            });
        });

        // Add event listeners to close buttons
        editTaskCloseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                closeEditTaskModal();
            });
        });

        // Close modal when clicking outside
        editTaskModal.addEventListener('click', function(e) {
            if (e.target === editTaskModal) {
                closeEditTaskModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !editTaskModal.classList.contains('hidden')) {
                closeEditTaskModal();
            }
        });

        // Handle update button click
        editTaskUpdateBtn.addEventListener('click', function() {
            const taskTitle = document.getElementById('taskTitle').value;
            const complexity = document.getElementById('edittask').value;
            const testedOn = document.getElementById('testedon').value;
            const testingStatus = document.getElementById('testingstatus').value;
            const taskType = document.getElementById('tasktype').value;
            const fromDepartment = document.getElementById('fromdepartment').value;
            const misrouted = document.getElementById('misrouted').value;
            const infoMissing = document.getElementById('infomissing').value;
            const reason = document.getElementById('editTaskReason').value;
                                    
            // Here you can add your update logic
            console.log('Task Title:', taskTitle);
            console.log('Complexity:', complexity);
            console.log('Tested On:', testedOn);
            console.log('Testing Status:', testingStatus);
            console.log('Task Type:', taskType);
            console.log('From Department:', fromDepartment);
            console.log('Misrouted:', misrouted);
            console.log('Information Missing:', infoMissing);
            console.log('Internal Note:', reason);
                                    
            // For demo purposes, just close the modal
            alert(`Task updated! Title: ${taskTitle}`);
            closeEditTaskModal();
        });

        // Handle reset button click
        editTaskResetBtn.addEventListener('click', function() {
            resetForm();
            alert('Form fields have been reset!');
        });

        // Initial form reset when the page loads to ensure consistent state
        document.addEventListener('DOMContentLoaded', resetForm);
    </script>
</body>
</html>