<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<div class="flex-1 bg-gray-50 overflow-hidden">
  <!-- Main Content -->
  <div class="px-6 py-8 h-[calc(100vh-64px)] overflow-y-auto">
    <!-- Tabs -->
    <div class="max-w-4xl px-6 mb-3">
      <div class="flex bg-gray-200 rounded-lg p-1">
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/faqs">FAQ's</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/categories">Categories</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
          <a href="/cannedResponse">Canned Response</a>
        </button>
      </div>
    </div>
    <div class="flex-1 p-6 bg-gray-50">
      <!-- Tabs -->
      <div class="bg-white rounded-lg shadow-sm">
        <!-- Content Area -->
        <div class="p-6">
          <!-- Add New Response Button -->
          <div class="flex justify-end mb-4 space-x-4">
            <input type="text" placeholder="Search..." class="border rounded px-3 py-2 text-sm w-64" />
            <button class="bg-gray-200 px-5 py-2 rounded text-sm font-medium hover:bg-gray-300">
              Filter
            </button>
            <button id="cannedbtn"
              class="flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition-colors">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Add New Response
            </button>
          </div>

          <!-- Data Table -->
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                  <th class="text-left py-3 px-4 font-medium text-gray-700">
                    <input type="checkbox" class="rounded border-gray-300">
                  </th>
                  <th class="text-left py-3 px-4 font-medium text-gray-700">Title</th>
                  <th class="text-left py-3 px-4 font-medium text-gray-700">Status</th>
                  <th class="text-left py-3 px-4 font-medium text-gray-700">Department</th>
                  <th class="text-left py-3 px-4 font-medium text-gray-700">Updated</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                  <td class="py-3 px-4">
                    <input type="checkbox" class="rounded border-gray-300">
                  </td>
                  <td class="py-3 px-4 text-blue-600">BFL - First Response</td>
                  <td class="py-3 px-4 text-gray-600">Active</td>
                  <td class="py-3 px-4 text-gray-600">-- All Departments --</td>
                  <td class="py-3 px-4 text-gray-600">4/16/25 5:35 PM</td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                  <td class="py-3 px-4">
                    <input type="checkbox" class="rounded border-gray-300">
                  </td>
                  <td class="py-3 px-4 text-blue-600">Closure Message</td>
                  <td class="py-3 px-4 text-gray-600">Active</td>
                  <td class="py-3 px-4 text-gray-600">-- All Departments --</td>
                  <td class="py-3 px-4 text-gray-600">11/03/22 7:29 PM</td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                  <td class="py-3 px-4">
                    <input type="checkbox" class="rounded border-gray-300">
                  </td>
                  <td class="py-3 px-4 text-blue-600">Duplicate Closure</td>
                  <td class="py-3 px-4 text-gray-600">Active</td>
                  <td class="py-3 px-4 text-gray-600">-- All Departments --</td>
                  <td class="py-3 px-4 text-gray-600">10/30/22 11:51 AM</td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                  <td class="py-3 px-4">
                    <input type="checkbox" class="rounded border-gray-300">
                  </td>
                  <td class="py-3 px-4 text-blue-600">First response - Configuration</td>
                  <td class="py-3 px-4 text-gray-600">Active</td>
                  <td class="py-3 px-4 text-gray-600">-- All Departments --</td>
                  <td class="py-3 px-4 text-gray-600">8/16/23 4:15 PM</td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                  <td class="py-3 px-4">
                    <input type="checkbox" class="rounded border-gray-300">
                  </td>
                  <td class="py-3 px-4 text-blue-600">First response - issue</td>
                  <td class="py-3 px-4 text-gray-600">Active</td>
                  <td class="py-3 px-4 text-gray-600">-- All Departments --</td>
                  <td class="py-3 px-4 text-gray-600">8/16/23 11:14 PM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="cannedResponseModal"
  class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center p-4 hidden z-50">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl max-h-[90vh] flex flex-col">
    <!-- Modal Header - Fixed -->
    <div class="flex justify-between items-center p-6 border-b bg-white rounded-t-lg">
      <h3 class="text-xl font-semibold">Add New Canned Response</h3>
      <button id="CannedcloseModalBtn" class="text-gray-400 hover:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <!-- Modal Content - Scrollable -->
    <div class="flex-1 overflow-y-auto p-6">
      <!-- Canned Response Settings Section -->
      <div class="space-y-4 mb-6">
        <h4 class="text-lg font-medium">Canned Response Settings</h4>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Status Field -->
          <div class="space-y-3">
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <div class="flex gap-6">
              <div class="flex items-center space-x-2">
                <input type="radio" name="status" id="active" value="active" checked
                  class="h-4 w-4 text-blue-600 border-gray-300 rounded-full focus:ring-blue-500">
                <label for="active" class="text-sm text-gray-700 cursor-pointer">
                  Active
                </label>
              </div>
              <div class="flex items-center space-x-2">
                <input type="radio" name="status" id="disabled" value="disabled"
                  class="h-4 w-4 text-blue-600 border-gray-300 rounded-full focus:ring-blue-500">
                <label for="disabled" class="text-sm text-gray-700 cursor-pointer">
                  Disabled
                </label>
              </div>
            </div>
          </div>

          <!-- Department Field -->
          <div class="space-y-2">
            <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
            <select id="department" name="department"
              class="mt-1 border block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
              <option value="0">— All Departments —</option>
              <option value="61">All Feature Test</option>
              <option value="54">Architectural Changes </option>
              <option value="69">Backup Alert</option>
              <option value="62">Branch Merge</option>
              <option value="23">Cloud Server Alerts</option>
              <option value="60">Code Deployment</option>
              <option value="49">Code Merge</option>
              <option value="11">Customer Deliveries</option>
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
        </div>
      </div>
      <hr class="my-6">

      <!-- Form Fields Section -->
      <div class="space-y-4">
        <!-- Title Field -->
        <div class="space-y-2">
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter canned response title"
            class="mt-1 h-10 p-3 border block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <!-- Canned Response Field -->
        <div class="space-y-2">
          <label for="response" class="block text-sm font-medium text-gray-700">Canned Response</label>

          <!-- Rich Text Toolbar -->
          <div class="border rounded-t-md p-2 bg-gray-50 flex flex-wrap gap-1">
            <button type="button" onclick="formatText('bold')" class="p-2 rounded hover:bg-gray-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M3 4a1 1 0 011-1h4.586A2.414 2.414 0 0111 5.414 2.414 2.414 0 018.586 8H4v3h4.586A2.414 2.414 0 0111 13.414 2.414 2.414 0 018.586 16H4a1 1 0 01-1-1V4z" />
              </svg>
            </button>
            <button type="button" onclick="formatText('italic')" class="p-2 rounded hover:bg-gray-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M7 3a1 1 0 000 2h1.5L6.5 15H5a1 1 0 100 2h6a1 1 0 100-2h-1.5L11.5 5H13a1 1 0 100-2H7z" />
              </svg>
            </button>
            <button type="button" onclick="formatText('underline')" class="p-2 rounded hover:bg-gray-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M4 17a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM6 3a1 1 0 011-1h6a1 1 0 110 2v6a3 3 0 11-6 0V4a1 1 0 01-1-1z" />
              </svg>
            </button>
            <div class="h-6 mx-1 border-l border-gray-300"></div>
            <button type="button" onclick="formatText('insertUnorderedList')" class="p-2 rounded hover:bg-gray-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 16a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" />
              </svg>
            </button>
            <button type="button" onclick="formatText('insertOrderedList')" class="p-2 rounded hover:bg-gray-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 16a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" />
              </svg>
            </button>
            <div class="h-6 mx-1 border-l border-gray-300"></div>
            <button type="button" onclick="insertLink()" class="p-2 rounded hover:bg-gray-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5z" />
                <path
                  d="M7.414 15.414a2 2 0 01-2.828-2.828l3-3a2 2 0 012.828 0 1 1 0 001.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5z" />
              </svg>
            </button>
          </div>

          <div id="editor" contenteditable="true"
            class="min-h-[120px] p-3 border border-gray-300 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
            placeholder="Enter your canned response message..."></div>
          <textarea id="response" name="response" class="hidden"></textarea>

          <!-- Attachments Section -->
          <div class="space-y-2 mt-4">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" />
              </svg>
              <label class="text-sm font-medium text-gray-700">Attachments</label>
            </div>
            <div
              class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center hover:border-gray-400 transition-colors">
              <input type="file" multiple class="hidden" id="file-upload" name="attachments[]"
                accept=".pdf,.doc,.docx,.txt,.jpg,.jpeg,.png,.gif">
              <label for="file-upload" class="cursor-pointer">
                <svg class="w-8 h-8 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="text-sm text-gray-600">Click to upload or drag and drop files here</p>
                <p class="text-xs text-gray-500 mt-1">PDF, DOC, TXT, Images (Max 10MB each)</p>
              </label>
            </div>
            <div id="file-list" class="mt-2"></div>
          </div>
        </div>

        <!-- Internal Notes Field -->
        <div class="space-y-2">
          <label for="notes" class="block text-sm font-medium text-gray-700">Internal Notes</label>
          <textarea id="notes" name="notes" placeholder="Add internal notes (optional)..."
            class="mt-1 border p-3 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm min-h-[80px]"></textarea>
        </div>
      </div>
    </div>

    <!-- Modal Footer - Fixed -->
    <form id="cannedResponseForm">
      <div class="flex flex-col sm:flex-row gap-3 p-6 border-t bg-white rounded-b-lg">
        <button type="submit" form="cannedResponseForm"
          class="sm:order-3 w-full sm:w-auto px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Add Response
        </button>
        <button type="reset" form="cannedResponseForm"
          class="sm:order-2 w-full sm:w-auto px-4 py-2 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Reset
        </button>
        <button type="button" id="CannedcancelBtn"
          class="sm:order-1 w-full sm:w-auto px-4 py-2 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Cancel
        </button>
      </div>
    </form>
  </div>
</div>

<script src="<?= base_url('assets/js/cannedResponse.js') ?>"></script>