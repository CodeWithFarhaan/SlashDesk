<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaborator Modal System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <!-- First Modal - Collaborators -->
    <div id="collaboratorModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-40">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Collaborators</h2>
                <button class="closecollaboratormodal text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="p-4">
                <a href="#" class="openaddcollaboratormodal flex items-center text-blue-600 hover:text-blue-800 mb-4">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Collaborator
                </a>
            </div>
            
            <!-- Modal Footer -->
            <div class="flex items-center justify-between p-4 border-t border-gray-200">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Reset</button>
                    <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Done</button>
                </div>
                <button class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Save Changes</button>
            </div>
        </div>
    </div>

    <!-- Second Modal - Add Collaborator -->
    <div id="addCollaboratorModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl max-h-[90vh] overflow-y-auto mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Add a collaborator</h2>
                <button class="closeaddcollaboratormodal text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="p-4">
                <!-- Info Message -->
                <div class="bg-blue-50 border border-blue-200 rounded-md p-3 mb-4">
                    <div class="flex">
                        <svg class="w-5 h-5 text-blue-400 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-blue-700 text-sm">Search existing users or add a new user.</p>
                    </div>
                </div>
                
                <!-- Search Field -->
                <div class="mb-4">
                    <input type="text" placeholder="Search by email, phone or name" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <!-- Create New User Section -->
                <div class="bg-gray-50 rounded-md p-4 mb-4">
                    <h3 class="font-semibold text-gray-800 mb-3">Create New User:</h3>
                    
                    <div class="space-y-3">
                        <!-- Email Address -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Email Address: <span class="text-red-500">*</span>
                            </label>
                            <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <!-- Full Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Full Name: <span class="text-red-500">*</span>
                            </label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <!-- Phone Number -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number:</label>
                            <div class="flex space-x-2">
                                <input type="tel" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <span class="flex items-center text-gray-500">Ext:</span>
                                <input type="text" class="w-20 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <!-- Internal Notes -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Internal Notes:</label>
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="flex items-center justify-between p-4 border-t border-gray-200">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Reset</button>
                    <button class="closeaddcollaboratormodal px-4 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Cancel</button>
                </div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add User</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const collaboratorModal = document.getElementById('collaboratorModal');
            const addCollaboratorModal = document.getElementById('addCollaboratorModal');
            
            // Open first modal
            document.addEventListener('click', function(e) {
                if (e.target.closest('.opencollaboratormodal')) {
                    e.preventDefault();
                    collaboratorModal.classList.remove('hidden');
                    collaboratorModal.classList.add('flex');
                }
            });

            // Close first modal
            document.addEventListener('click', function(e) {
                if (e.target.closest('.closecollaboratormodal')) {
                    e.preventDefault();
                    collaboratorModal.classList.add('hidden');
                    collaboratorModal.classList.remove('flex');
                }
            });

            // Open second modal
            document.addEventListener('click', function(e) {
                if (e.target.closest('.openaddcollaboratormodal')) {
                    e.preventDefault();
                    addCollaboratorModal.classList.remove('hidden');
                    addCollaboratorModal.classList.add('flex');
                }
            });

            // Close second modal
            document.addEventListener('click', function(e) {
                if (e.target.closest('.closeaddcollaboratormodal')) {
                    e.preventDefault();
                    addCollaboratorModal.classList.add('hidden');
                    addCollaboratorModal.classList.remove('flex');
                }
            });

            // Click outside to close
            document.addEventListener('click', function(e) {
                if (e.target === collaboratorModal) {
                    collaboratorModal.classList.add('hidden');
                    collaboratorModal.classList.remove('flex');
                }
                if (e.target === addCollaboratorModal) {
                    addCollaboratorModal.classList.add('hidden');
                    addCollaboratorModal.classList.remove('flex');
                }
            });

            // Escape key to close
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    collaboratorModal.classList.add('hidden');
                    collaboratorModal.classList.remove('flex');
                    addCollaboratorModal.classList.add('hidden');
                    addCollaboratorModal.classList.remove('flex');
                }
            });
        });
    </script>

</body>
</html>