<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Modal HTML Structure -->
<div id="update-due-date-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-lg border">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-blue-600">
                    Task #35773: Update Due Date
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="update-due-date-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            
            <!-- Modal body -->
            <div class="p-4 space-y-4">
                    <!-- Due Date Field -->
                    <div>
                        <label for="due_date" class="block mb-2 text-sm font-medium text-gray-700">Due Date:</label>
                        <div class="relative">
                            <input type="date" id="due_date" name="due_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10" required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <span class="absolute right-12 top-1/2 transform -translate-y-1/2 text-xs text-gray-500">(IST)</span>
                        </div>
                    </div>
                    
                    <!-- Optional Reason Field -->
                    <div>
                        <label for="update_reason" class="block mb-2 text-sm font-medium text-gray-700">Optional reason for the update</label>
                        <textarea id="update_reason" name="update_reason" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 resize-none" placeholder="Enter reason for updating the due date..."></textarea>
                    </div>
                    
                    <!-- Hidden field for task ID -->
                    <input type="hidden" name="task_id" value="35920">   
            </div>
            
            <!-- Modal footer -->
            <div class="flex items-center justify-between p-4 border-t border-gray-200 space-x-3">
                <button data-modal-hide="update-due-date-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Cancel
                </button>
                <button type="submit" form="update-due-date-form" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Update
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal backdrop -->
<div id="modal-backdrop" class="hidden bg-gray-900 bg-opacity-50 fixed inset-0 z-40"></div>
</body>
<script src="<?= base_url('assets/js/dueDateModal.js') ?>"></script>
</html>