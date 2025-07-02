<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Reassign Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <!-- Modal Overlay -->
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <!-- Modal Container -->
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md transform transition-all">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Task #35773: Reassign</h2>
                <button id="closeModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-4 space-y-4">
                <!-- Current Assignment Info -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-blue-800 text-sm">Task is currently assigned to <strong>Vipul Parab</strong></span>
                    </div>
                </div>

                <!-- Assignee Selection -->
                <div>
                    <label for="assignee" class="block text-sm font-medium text-gray-700 mb-2">
                        Assignee: <span class="text-red-500">*</span>
                    </label>
                    <select id="assignee" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option value="">— Select —</option>
                        <option value="john_doe">John Doe</option>
                        <option value="jane_smith">Jane Smith</option>
                        <option value="mike_johnson">Mike Johnson</option>
                        <option value="sarah_wilson">Sarah Wilson</option>
                    </select>
                </div>

                <!-- Maintain Access Checkbox -->
                <div class="flex items-start">
                    <input id="maintainAccess" type="checkbox" class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="maintainAccess" class="ml-2 text-sm text-gray-700">
                        Maintain referral access to current assignees
                    </label>
                </div>

                <!-- Optional Reason -->
                <div>
                    <label for="reason" class="block text-sm font-medium text-gray-700 mb-2">
                        Optional reason for the assignment
                    </label>
                    <textarea id="reason" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none" placeholder="Enter reason for reassignment..."></textarea>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex justify-between items-center p-4 border-t border-gray-200">
                <div class="flex space-x-2">
                    <button id="resetBtn" class="px-4 py-2 text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-lg font-medium transition-colors">
                        Reset
                    </button>
                    <button id="cancelBtn" class="px-4 py-2 text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-lg font-medium transition-colors">
                        Cancel
                    </button>
                </div>
                <button id="assignBtn" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                    Assign
                </button>
            </div>
        </div>
    </div>
</body>
<script src="<?= base_url('assets/js/assignedToModal.js') ?>"></script>
</html>