<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaborators Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <!-- Modal Backdrop -->
    <div class="modal-backdrop fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <!-- Main Modal Container -->
    <div class="main-modal fixed inset-0 flex items-center justify-center z-50 hidden">
        
        <!-- First Modal - Collaborators List -->
        <div class="collaborators-modal bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Collaborators</h2>
                <button class="close-modal text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Content -->
            <div class="p-4">
                <button class="add-collaborator-btn inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Collaborator
                </button>
            </div>
            
            <!-- Footer -->
            <div class="flex justify-between p-4 border-t border-gray-200">
                <div class="space-x-2">
                    <button class="reset-btn px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors">Reset</button>
                    <button class="done-btn px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors">Done</button>
                </div>
                <button class="save-changes-btn px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Save Changes</button>
            </div>
        </div>

        <!-- Second Modal - Add Collaborator Form -->
        <div class="add-collaborator-modal bg-white rounded-lg shadow-xl w-full max-w-lg mx-4 hidden max-h-[90vh] overflow-y-auto">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">Add a collaborator</h2>
                <button class="close-add-modal text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Content -->
            <div class="p-3">
                <!-- Info Banner -->
                <div class="bg-blue-50 border border-blue-200 rounded-md p-2 mb-3">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-xs text-blue-700">Search existing users or add a new user.</span>
                    </div>
                </div>

                <!-- Search Field -->
                <div class="mb-3">
                    <input type="text" placeholder="Search by email, phone or name" 
                           class="search-input w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Create New User Section -->
                <div class="bg-gray-50 rounded-md p-3">
                    <h3 class="font-semibold text-gray-800 mb-3 text-sm">Create New User:</h3>
                    
                    <form class="collaborator-form">
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Email Address: <span class="text-red-500">*</span>
                            </label>
                            <input type="email" name="email" required
                                   class="email-input w-full px-2 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Full Name: <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="full_name" required
                                   class="name-input w-full px-2 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Phone Number:</label>
                            <div class="flex space-x-2">
                                <input type="tel" name="phone" placeholder="Phone number"
                                       class="phone-input flex-1 px-2 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <div class="flex items-center">
                                    <span class="text-xs text-gray-600 mr-1">Ext:</span>
                                    <input type="text" name="extension" placeholder="Ext"
                                           class="ext-input w-14 px-2 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                        </div>

                        <!-- Internal Notes -->
                        <div class="mb-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Internal Notes:</label>
                            <textarea name="internal_notes" rows="2"
                                      class="notes-input w-full px-2 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="flex justify-between p-3 border-t border-gray-200">
                <div class="space-x-2">
                    <button class="reset-form-btn px-3 py-1.5 text-sm text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors">Reset</button>
                    <button class="cancel-add-btn px-3 py-1.5 text-sm text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors">Cancel</button>
                </div>
                <button class="add-user-btn px-3 py-1.5 text-sm bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Add User</button>
            </div>
        </div>
    </div> 
<script src="<?= base_url('assets/js/collaboratorModal.js') ?>"></script>