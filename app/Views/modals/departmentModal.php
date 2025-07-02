<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SlashDesk :: Staff Control Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!-- Modal Backdrop -->
<div id="transferModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <!-- Modal Container -->
    <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-blue-700">
                Task #35773: Transfer
            </h3>
            <button type="button" id="closeModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-4">
            <form id="transferForm" method="POST" action="<?= base_url('tasks/transfer') ?>">
                <input type="hidden" name="task_id" value="35773">
                
                <!-- Department Field -->
                <div class="mb-4">
                    <label for="department" class="block text-sm font-medium text-gray-700 mb-2">
                        Department: <span class="text-red-500">*</span>
                    </label>
                    <select id="department" name="department" required 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option value="">— Select —</option>
                        <option value="61">All Feature Test</option>
                        <option value="54">Architectural Changes </option>
                        <option value="69">Backup Alert</option>
                        <option value="62">Branch Merge</option>
                        <option value="23">Cloud Server Alerts</option>
                        <option value="60">Code Deployment</option>
                        <option value="49">Code Merge</option>
                        <option value="11" selected="selected">Customer Deliveries</option>
                        <option value="70">Daily Priority</option>
                        <option value="51">DevOps - Activity</option>
                        <option value="50">DevOps - Code Update</option>
                        <option value="14">DevOps Internal</option>
                        <option value="12">DevOps Issues</option>
                        <option value="31">DevOps Jayesh</option>
                        <option value="55">DevOps Solution </option>
                        <option value="59">DevOps VAPT</option>
                        <option value="67">DevOps_Config</option>
                        <option value="25">Devops Delivery</option>
                        <option value="6">L1 Support</option>
                        <option value="7">L2 Support</option>
                        <option value="66">L2_Pre-Sales</option>
                        <option value="30">L3 Cold Box</option>
                        <option value="16">L3 Dev Support</option>
                        <option value="17">MTT Issue</option>
                        <option value="43">MTT QA</option>
                        <option value="63">MTT-Phase3</option>
                        <option value="3">Maintenance</option>
                        <option value="4">Maintenance / Admin</option>
                        <option value="27">Multi Tenancy Module </option>
                        <option value="52">NOC</option>
                        <option value="72">Nature of Ticket</option>
                        <option value="65">New Instance</option>
                        <option value="44">NoBroker-MTT</option>
                        <option value="41">Noreply</option>
                        <option value="46">Onboarding</option>
                        <option value="24">Presales</option>
                        <option value="26">Product Fix</option>
                        <option value="28">Product Issues </option>
                        <option value="29">Product-QA </option>
                        <option value="19">QA Delivery</option>
                        <option value="20">QA-Testing</option>
                        <option value="47">RCAs</option>
                        <option value="71">RFC</option>
                        <option value="33">Repetitive issue</option>
                        <option value="53">ResOps</option>
                        <option value="2">Sales</option>
                        <option value="42">Slash Admin</option>
                        <option value="5">Slash IT HelpDesk</option>
                        <option value="32">Slash-Product</option>
                        <option value="68">Slash_IP-PBX</option>
                        <option value="21">Support-To-do-later</option>
                        <option value="48">Tech Operation</option>
                        <option value="58">Tech VAPT</option>
                        <option value="56">Telephony</option>
                        <option value="22">To-Do-Later </option>
                        <option value="35">UAT-QA</option>
                        <option value="1">UAT-Support</option>
                        <option value="34">UAT-Tech</option>
                        <option value="57">VAPT Issues</option>
                    </select>
                </div>

                <!-- Maintain Access Checkbox -->
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" id="maintainAccess" name="maintain_access" value="1"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <span class="ml-2 text-sm text-gray-700">
                            Maintain referral access to current department
                        </span>
                    </label>
                </div>

                <!-- Optional Reason -->
                <div class="mb-6">
                    <label for="reason" class="block text-sm font-medium text-gray-700 mb-2">
                        Optional reason for the transfer
                    </label>
                    <textarea id="reason" name="reason" rows="4" 
                              placeholder="Enter reason for transfer..."
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none transition-colors"></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                    <div class="flex space-x-2">
                        <button type="reset" id="resetBtn"
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors">
                            Reset
                        </button>
                        <button type="button" id="cancelBtn"
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors">
                            Cancel
                        </button>
                    </div>
                    <button type="submit" id="transferBtn"
                        class="px-6 py-2 text-sm font-medium text-white bg-blue-600 border rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Transfer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="<?= base_url('assets/js/departmentModal.js') ?>"></script>
</html>