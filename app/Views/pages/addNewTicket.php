  <?= $this->include('partials/sidebar') ?>
  <?= $this->include('partials/navbar') ?>

  <!-- Main Content Area -->
  <div class="container mx-auto bg-gray-200 px-4 py-6 overflow-y-auto">
    <!-- Header Buttons -->
    <div class="max-w-6xl mx-auto mb-8">
      <div class="flex bg-gray-300 rounded-lg p-1">
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/ticketOpen">Open</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/myTicket">My Tickets</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/ticketClosed">Closed</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/ticketSearch">Search</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center bg-white rounded-md shadow-sm font-medium text-gray-900">
          <a href="/addnewTicket">New Ticket</a>
        </button>
      </div>
    </div>
    <form id="ticketForm" method="POST" action="<?= base_url('tickets/create') ?>" enctype="multipart/form-data">
      <?= csrf_field() ?>
      <div>
        <p class="text-xl text-bold ml-1 text-blue-600">Open a new Ticket</p>
      </div>
      <!-- User and Collaborators Section -->
      <div class="mt-3 bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">User and Collaborators</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">User: <span class="text-red-500">*</span></label>
              <div class="flex gap-2">
                <select name="user" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value="">Select User</option>
                  <option value="user1">User 1</option>
                  <option value="user2">User 2</option>
                </select>
                <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">+ Add New</button>
              </div>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Cc:</label>
              <div class="flex gap-2">
                <input type="text" name="cc" placeholder="Select Contacts" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">+ Add New</button>
              </div>
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Ticket Notice:</label>
            <select name="ticket_notice" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="alert_all">Alert All</option>
              <option value="alert_none">Alert None</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Ticket Information and Options -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Ticket Information and Options</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-bold text-black mb-2">Ticket Source: <span class="text-red-500">*</span></label>
              <select name="ticket_source" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="phone">Phone</option>
                <option value="email">Email</option>
                <option value="web">Web</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Help Topic: <span class="text-red-500">*</span></label>
              <select name="help_topic" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Report a Problem / Cloud Server Alert</option>
                <option value="technical">Technical Issue</option>
                <option value="billing">Billing</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Department:</label>
              <select name="department" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select Department—</option>
                <option value="technical">Technical</option>
                <option value="support">Support</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">SLA Plan:</label>
              <select name="sla_plan" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— System Default —</option>
                <option value="standard">Standard</option>
                <option value="premium">Premium</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Due Date:</label>
              <div class="flex gap-2">
                <input type="date" name="due_date" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="text-sm text-gray-500 self-center">(IST)</span>
              </div>
              <p class="text-xs text-gray-500 mt-1">Time is based on your time zone (Asia/Kolkata)</p>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Assign To:</label>
              <select name="assign_to" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select an Agent OR a Team —</option>
                <option value="agent1">Agent 1</option>
                <option value="team1">Team 1</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- Ticket Details -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Ticket Details</h2>
          <p class="text-sm text-gray-600">Please Describe Your Issue</p>
        </div>
        <div class="p-6 space-y-4">
          <div>
            <label class="block text-sm font-bold text-black mb-2">Issue Summary: <span class="text-red-500">*</span></label>
            <input type="text" name="issue_summary" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
          </div>

          <!-- Rich Text Editor Toolbar -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Description:</label>
            <div class="border border-gray-300 rounded-md">
              <div class="flex items-center gap-1 p-2 border-b border-gray-200 bg-gray-50">
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatText('bold')">
                  <strong>B</strong>
                </button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded italic" onclick="formatText('italic')">I</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded underline" onclick="formatText('underline')">U</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatText('strikethrough')">S</button>
                <div class="w-px h-4 bg-gray-300 mx-1"></div>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatText('insertUnorderedList')">•</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatText('insertOrderedList')">1.</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatText('createLink')">🔗</button>
              </div>
              <textarea name="description" id="description" rows="6" class="w-full p-3 border-0 focus:outline-none focus:ring-0 resize-none" placeholder="Details on the reason(s) for opening the ticket."></textarea>
            </div>
          </div>

          <!-- File Upload -->
          <div>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
              <input type="file" name="attachments[]" multiple class="hidden" id="fileInput">
              <label for="fileInput" class="cursor-pointer">
                <div class="text-gray-500">
                  <svg class="mx-auto h-8 w-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                  </svg>
                  <span class="text-blue-600">Drop files here or choose them</span>
                </div>
              </label>
            </div>
          </div>
        </div>
      </div>

      <!-- Priority and Classification -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Priority and Classification</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-bold text-black mb-2">Ticket Source: <span class="text-red-500">*</span></label>
              <select name="ticket_source" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
                <option value="critical">Critical</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Priority Level: <span class="text-red-500">*</span></label>
              <select name="priority_level" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
                <option value="critical">Critical</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Priority Type:</label>
              <select name="priority_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="p0">P0</option>
                <option value="p1">P1</option>
                <option value="p2">P2</option>
                <option value="p3">P3</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Priority Changed: <span class="text-red-500">*</span></label>
              <select name="priority_changed" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Hosting Type:</label>
              <select name="hosting_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="shared">Shared</option>
                <option value="vps">VPS</option>
                <option value="dedicated">Dedicated</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">First Level: <span class="text-red-500">*</span></label>
              <select name="first_level" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="level1">Level 1</option>
                <option value="level2">Level 2</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Second Level: <span class="text-red-500">*</span></label>
              <select name="second_level" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="level1">Level 1</option>
                <option value="level2">Level 2</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Third Level: <span class="text-red-500">*</span></label>
              <select name="third_level" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="level1">Level 1</option>
                <option value="level2">Level 2</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Information -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Additional Information</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-bold text-black mb-2">Others: <span class="text-red-500">*</span></label>
              <input type="text" name="others" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Affected Users: <span class="text-red-500">*</span></label>
              <select name="affected_users" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="single">Single User</option>
                <option value="multiple">Multiple Users</option>
                <option value="all">All Users</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Repetitive: <span class="text-red-500">*</span></label>
              <select name="repetitive" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Fix Type: <span class="text-red-500">*</span></label>
              <select name="fix_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="temporary">Temporary</option>
                <option value="permanent">Permanent</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Next Department To: <span class="text-red-500">*</span></label>
              <select name="next_department" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="technical">Technical</option>
                <option value="support">Support</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Server Hostname: <span class="text-red-500">*</span></label>
              <select name="server_hostname" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="server1">Server 1</option>
                <option value="server2">Server 2</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Affected: <span class="text-red-500">*</span></label>
              <select name="affected" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="single">Single User</option>
                <option value="multiple">Multiple Users</option>
                <option value="all">All Users</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Sub Affected: <span class="text-red-500">*</span></label>
              <select name="sub_affected" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="single">Single User</option>
                <option value="multiple">Multiple Users</option>
                <option value="all">All Users</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Affected BY: <span class="text-red-500">*</span></label>
              <select name="affected_by" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="single">Single User</option>
                <option value="multiple">Multiple Users</option>
                <option value="all">All Users</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Downtime Minutes: <span class="text-red-500">*</span></label>
              <select name="downtime_minutes" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="single">Single User</option>
                <option value="multiple">Multiple Users</option>
                <option value="all">All Users</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Customer Name:</label>
              <input type="text" name="customer_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Solved By: <span class="text-red-500">*</span></label>
              <select name="solved_by" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="agent1">Agent 1</option>
                <option value="agent2">Agent 2</option>
              </select>
            </div>
            <div>
              <label class="text-sm font-bold text-black mb-2">Issue Tag:<span class="text-red-500">*</span></label><br>
              <textarea class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Repetitive ref Ticket: <span class="text-red-500">*</span></label>
              <input type="text" name="repetitive_ref_ticket" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
          </div>
        </div>
      </div>

      <!-- Testing Information -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Testing Information</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">From Department:</label>
              <select name="uat_fail_count" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3+">3+</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">UAT Fail Count: <span class="text-red-500">*</span></label>
              <select name="uat_fail_count" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3+">3+</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Production Fail Count: <span class="text-red-500">*</span></label>
              <select name="production_fail_count" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3+">3+</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">UAT Pass: <span class="text-red-500">*</span></label>
              <select name="uat_pass" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Production Pass: <span class="text-red-500">*</span></label>
              <select name="production_pass" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">New Instance Fail counts: <span class="text-red-500">*</span></label>
              <select name="new_instance_fail_counts" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3+">3+</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">QA Testing Time: <span class="text-red-500">*</span></label>
              <select name="qa_testing_time" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="1-2 hours">1-2 hours</option>
                <option value="2-4 hours">2-4 hours</option>
                <option value="4+ hours">4+ hours</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-bold text-black mb-2">Nature Of Ticket: <span class="text-red-500">*</span></label>
              <select name="nature_of_ticket" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select —</option>
                <option value="bug">Bug</option>
                <option value="feature">Feature Request</option>
                <option value="support">Support</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- Response Section -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Response</h2>
          <p class="text-sm text-gray-600">Optional response to the above issue</p>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Canned Response:</label>
              <select name="canned_response" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">— Select a canned response —</option>
                <option value="response1">Standard Response 1</option>
                <option value="response2">Standard Response 2</option>
              </select>
            </div>
            <div class="flex items-center">
              <input type="checkbox" name="append" id="append" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
              <label for="append" class="ml-2 block text-sm text-gray-900">Append</label>
            </div>
          </div>

          <!-- Response Text Editor -->
          <div>
            <div class="border border-gray-300 rounded-md">
              <div class="flex items-center gap-1 p-2 border-b border-gray-200 bg-gray-50">
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatResponseText('bold')">
                  <strong>B</strong>
                </button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded italic" onclick="formatResponseText('italic')">I</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded underline" onclick="formatResponseText('underline')">U</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatResponseText('strikethrough')">S</button>
                <div class="w-px h-4 bg-gray-300 mx-1"></div>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatResponseText('insertUnorderedList')">•</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatResponseText('insertOrderedList')">1.</button>
                <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatResponseText('createLink')">🔗</button>
              </div>
              <textarea name="response" id="response" rows="6" class="w-full p-3 border-0 focus:outline-none focus:ring-0 resize-none" placeholder="Initial response for the ticket"></textarea>
            </div>
          </div>

          <!-- File Upload for Response -->
          <div>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
              <input type="file" name="response_attachments[]" multiple class="hidden" id="responseFileInput">
              <label for="responseFileInput" class="cursor-pointer">
                <div class="text-gray-500">
                  <svg class="mx-auto h-8 w-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                  </svg>
                  <span class="text-blue-600">Drop files here or choose them</span>
                </div>
              </label>
            </div>
          </div>
        </div>
      </div>

      <!-- Ticket Status and Signature -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Ticket Status and Signature</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Ticket Status:</label>
              <select name="ticket_status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="open">Open</option>
                <option value="in_progress">In Progress</option>
                <option value="resolved">Resolved</option>
                <option value="closed">Closed</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Signature:</label>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="radio" name="signature" value="none" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300" checked>
                  <span class="ml-2 text-sm text-gray-900">None</span>
                </label>
                <label class="flex items-center">
                  <input type="radio" name="signature" value="department" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                  <span class="ml-2 text-sm text-gray-900">Department Signature (if set)</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Internal Note -->
      <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
          <h2 class="text-lg font-semibold text-gray-900">Internal Note</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="border border-gray-300 rounded-md">
            <div class="flex items-center gap-1 p-2 border-b border-gray-200 bg-gray-50">
              <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatInternalNote('bold')">
                <strong>B</strong>
              </button>
              <button type="button" class="p-1 hover:bg-gray-200 rounded italic" onclick="formatInternalNote('italic')">I</button>
              <button type="button" class="p-1 hover:bg-gray-200 rounded underline" onclick="formatInternalNote('underline')">U</button>
              <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatInternalNote('strikethrough')">S</button>
              <div class="w-px h-4 bg-gray-300 mx-1"></div>
              <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatInternalNote('insertUnorderedList')">•</button>
              <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatInternalNote('insertOrderedList')">1.</button>
              <button type="button" class="p-1 hover:bg-gray-200 rounded" onclick="formatInternalNote('createLink')">🔗</button>
            </div>
            <textarea name="internal_note" id="internal_note" rows="4" class="w-full p-3 border-0 focus:outline-none focus:ring-0 resize-none" placeholder="Optional internal note (recommended on assignment)"></textarea>
          </div>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex justify-center gap-4 pb-8">
        <button type="submit" name="action" value="open" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Open
        </button>
        <button type="reset" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
          Reset
        </button>
        <button type="button" onclick="window.history.back()" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
          Cancel
        </button>
      </div>
    </form>
  </div>
  <script src="<?= base_url('assets/js/addNewTicket.js') ?>"></script>
