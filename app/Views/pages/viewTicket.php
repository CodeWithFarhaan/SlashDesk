  <?= $this->include('partials/sidebar') ?>
  <?= $this->include('partials/navbar') ?>

  <div class="overflow-y-auto">
    <div class="container mx-auto px-4 py-6 relative z-0">
      <!-- Header -->
      <div class="mb-6">
        <div class="">
          <div class="flex bg-gray-200 p-1">
            <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
              <a href="/ticketOpen"><i class="fas fa-folder-open text-sm"></i> Open</a>
            </button>
            <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
              <a href="/myTicket"><i class="fas fa-user-check text-sm"></i> My Tickets</a>
            </button>
            <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
              <a href="/ticketClosed"><i class="fas fa-check-double text-sm"></i> Closed</a>
            </button>
            <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
              <a href="/ticketSearch"><i class="fas fa-sync-alt text-sm"></i> Search</a>
            </button>
          </div>
        </div>
        <!-- main div -->
        <div class="bg-white shadow-lg border border-gray-200">
          <div class="bg-gradient-to-r from-purple-600 to-blue-700 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-3">
              <i class="fas fa-tasks text-white text-lg"></i>
              <span class="font-semibold text-xl">Ticket #046314</span>
            </div>
            <div class="flex space-x-2">
              <button class="p-2 rounded-md bg-white/20 hover:bg-white/30 transition-colors" title="Back">↩️</button>
              <button class="p-2 rounded-md bg-white/20 hover:bg-white/30 transition-colors" title="Document">📄</button>
              <div class="flex rounded-md overflow-hidden">
                <button class="p-2 bg-white/20 hover:bg-white/30 transition-colors" title="Flag">🚩</button>
                <button class="p-2 border-l border-white/30 bg-white/20 hover:bg-white/30 transition-colors" title="Dropdown">▼</button>
              </div>
              <div class="flex rounded-md overflow-hidden">
                <button class="p-2 bg-white/20 hover:bg-white/30 transition-colors" title="User">👤</button>
                <button class="p-2 border-l border-white/30 bg-white/20 hover:bg-white/30 transition-colors" title="Dropdown">▼</button>
              </div>
              <button class="p-2 rounded-md bg-white/20 hover:bg-white/30 transition-colors" title="Share">↪️</button>
              <div class="flex rounded-md overflow-hidden">
                <button class="p-2 bg-white/20 hover:bg-white/30 transition-colors" title="Print">🖨️</button>
                <button class="p-2 border-l border-white/30 bg-white/20 hover:bg-white/30 transition-colors" title="Dropdown">▼</button>
              </div>
            </div>
          </div>

          <!-- Task Title -->
          <div class="px-4 py-3 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">
              BFL Automated Leadset Removal Issue
            </h2>
          </div>

          <!-- Ticket Details Section -->
          <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4 text-sm border-b border-gray-200">
            <!-- Left Column: Ticket Details -->
            <div>
              <h3 class="font-bold text-lg mb-3 text-gray-800">Ticket Details</h3>
              <div class="grid grid-cols-2 gap-y-2">
                <div class="text-gray-600">Status:</div><div class="font-medium text-gray-900">Resolution Given</div>
                <div class="text-gray-600">Priority:</div><div class="font-medium text-gray-900">Emergency</div>
                <div class="text-gray-600">Department:</div><div class="font-medium text-gray-900">Presales</div>
                <div class="text-gray-600">Create Date:</div><div class="font-medium text-gray-900">4/14/25 10:58 AM</div>
                <div class="text-gray-600">Assigned To:</div><div class="font-medium text-gray-900">Sarfaraz Shaikh</div>
                <div class="text-gray-600">SLA Plan:</div><div class="font-medium text-gray-900">Default SLA</div>
                <div class="text-gray-600">Due Date:</div><div class="font-medium text-gray-900">4/16/25 10:58 AM</div>
              </div>
              <h3 class="font-bold text-lg mt-6 mb-3 text-gray-800">Additional Details</h3>
              <div class="grid grid-cols-2 gap-y-2">
                <div class="text-gray-600">Ticket Source:</div><div class="font-medium text-gray-900">Chat</div>
                <div class="text-gray-600">Priority Type:</div><div class="font-medium text-gray-900">P8</div>
                <div class="text-gray-600">Priority Changed:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Hosting Type:</div><div class="font-medium text-gray-900">Cloud</div>
                <div class="text-gray-600">First Level:</div><div class="font-medium text-gray-900">Downtime</div>
                <div class="text-gray-600">Second Level:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Third Level:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Others:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Affected Users:</div><div class="font-medium text-gray-900">All User</div>
                <div class="text-gray-600">Repetitive:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Fix Type:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Next Department To:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Sub Hostname:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Affected:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Sub Affected:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Affected By:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Downtime Minutes:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Customer Name:</div><div class="font-medium text-gray-900">Anamtech</div>
                <div class="text-gray-600">Solved By:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Issue Tag:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Repetitive ref Ticket:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">From Department:</div><div class="font-medium text-gray-900">Presales</div>
                <div class="text-gray-600">Unit Fail Count:</div><div class="font-medium text-gray-900">—Empty—</div>
                <div class="text-gray-600">Production Fail Count:</div><div class="font-medium text-gray-900">—Empty—</div>
                <div class="text-gray-600">UAT Pass:</div><div class="font-medium text-gray-900">—Empty—</div>
                <div class="text-gray-600">Production Pass:</div><div class="font-medium text-gray-900">—Empty—</div>
                <div class="text-gray-600">New Instance Fail counts:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">QA Testing Time:</div><div class="font-medium text-gray-900">NA</div>
                <div class="text-gray-600">Nature Of Ticket:</div><div class="font-medium text-gray-900">—Empty—</div>
              </div>
            </div>
            <!-- Right Column: User/Organization Details -->
            <div>
              <h3 class="font-bold text-lg mb-3 text-gray-800">User & Organization Details</h3>
              <div class="grid grid-cols-2 gap-y-2">
                <div class="text-gray-600">User:</div><div class="font-medium text-gray-900">Sarfaraz Shaikh (2722)</div>
                <div class="text-gray-600">Email:</div><div class="font-medium text-gray-900">sarfaraz.shaikh@slashtc.com</div>
                <div class="text-gray-600">Organization:</div><div class="font-medium text-gray-900">SlashRTC - PreSales (8181)</div>
                <div class="text-gray-600">Source:</div><div class="font-medium text-gray-900">Phone</div>
                <div class="text-gray-600">Help Topic:</div><div class="font-medium text-gray-900">Report a Problem / Cloud Server Alert</div>
                <div class="text-gray-600">Last Message:</div><div class="font-medium text-gray-900">4/25/25 10:58 AM</div>
                <div class="text-gray-600">Last Response:</div><div class="font-medium text-gray-900">4/25/25 10:58 AM</div>
              </div>
            </div>
          </div>

          <!-- Tab Navigation for Ticket Thread / Tasks -->
          <div class="bg-white border-t border-gray-200">
            <div class="flex border-b border-gray-200">
              <button id="ticketThreadTab" class="tab-button active flex-1 py-3 px-4 text-center" onclick="showTab('ticketThread')">Ticket Thread (9)</button>
              <button id="tasksTab" class="tab-button flex-1 py-3 px-4 text-center" onclick="showTab('tasks')">Tasks (1)</button>
            </div>
            <!-- Ticket Thread Content -->
            <div id="ticketThreadContent" class="p-4">
              <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden mb-4">
                <div class="bg-gray-50 border-b border-gray-200 px-4 py-3 flex justify-between items-center">
                  <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 bg-blue-500 rounded-full flex items-center justify-center text-white text-lg font-semibold">
                      S
                    </div>
                    <div>
                      <span class="text-sm font-medium text-gray-800">sarfaraz shaikh</span>
                      <span class="text-sm text-gray-600 ml-1">posted</span>
                      <span class="text-sm text-gray-600 ml-1">7/8/25 9:39 AM</span>
                    </div>
                  </div>
                  <i class="fas fa-chevron-down text-gray-500 text-sm"></i>
                </div>
                <div class="p-4">
                  <p class="text-sm text-gray-700 mb-4">
                    Hi team,<br><br>
                    We have received downtime on 22nd June at 1 a.m. (night) to update the code for Callback Prompt on Blinc 360 Instance.
                  </p>
                </div>
              </div>
              <!-- More ticket thread entries would go here -->
            </div>
            <!-- Tasks Content -->
            <div id="tasksContent" class="p-4 hidden">
              <div class="flex justify-between items-center mb-4">
                <span class="text-sm text-gray-600">Showing 1 - 1 of 1 task</span>
                <div class="flex space-x-2">
                  <button class="navModal inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white h-9 px-4 py-2 hover:bg-blue-700">
                    <span class="mr-1">+</span> Add New Task
                  </button>
                  <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2">
                    Options <span class="ml-1">▼</span>
                  </button>
                </div>
              </div>
              <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="min-w-full bg-white text-sm">
                  <thead>
                    <tr>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left"><input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 rounded"></th>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-gray-700 font-semibold">Number</th>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-gray-700 font-semibold">Date</th>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-gray-700 font-semibold">Status</th>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-gray-700 font-semibold">Title</th>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-gray-700 font-semibold">Department</th>
                      <th class="py-3 px-4 border-b border-gray-200 bg-gray-50 text-left text-gray-700 font-semibold">Assignee</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-2 px-4 border-b border-gray-100"><input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 rounded"></td>
                      <td class="py-2 px-4 border-b border-gray-100">33771</td>
                      <td class="py-2 px-4 border-b border-gray-100">4/14/25 10:59 AM</td>
                      <td class="py-2 px-4 border-b border-gray-100"><span class="px-2 py-0.5 bg-green-100 text-green-700 rounded-full text-xs font-medium">closed</span></td>
                      <td class="py-2 px-4 border-b border-gray-100 text-blue-600 hover:underline cursor-pointer">Anamtech - Unable to Initiate a call (10)</td>
                      <td class="py-2 px-4 border-b border-gray-100">DevOps Issues</td>
                      <td class="py-2 px-4 border-b border-gray-100">👤 Imran Khan</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Alert Banner -->
          <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-b-lg flex items-center gap-2 text-sm" role="alert">
            <strong class="font-bold">⚠️</strong>
            <span class="block sm:inline">Ticket is assigned to Sarfaraz Shaikh</span>
            <span class="font-bold ml-4">🚩</span>
            <span class="block sm:inline">Marked overdue!</span>
          </div>
          <!-- Post Reply / Post Internal Note Section -->
          <div class="bg-white shadow-lg border border-gray-200 mt-6">
            <div class="flex bg-gray-200 rounded-lg p-1">
              <button id="postReplyTab" class="sub-tab-button flex-1 py-2 px-4 text-center rounded-md transition-colors tab-active" onclick="showSubTab('postReply')">
                <i class="fas fa-paper-plane mr-2"></i>Post Reply
              </button>
              <button id="postInternalNoteTab" class="sub-tab-button flex-1 py-2 px-4 text-center rounded-md transition-colors tab-inactive" onclick="showSubTab('postInternalNote')">
                Post Internal Note
              </button>
            </div>
            <!-- Post Reply Content -->
            <div id="postReplyContent" class="p-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 text-sm">
                <div>
                  <label for="from" class="block text-gray-700 font-medium mb-1">From:</label>
                  <select id="from" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    <option>Test &lt;test@slashtc.com&gt;</option>
                  </select>
                </div>
                <div>
                  <label for="recipients" class="block text-gray-700 font-medium mb-1">Recipients:</label>
                  <input type="text" id="recipients" value="&quot;Sarfaraz Shaikh&quot; &lt;sarfaraz.shaikh@slashtc.com&gt;" class="flex h-10 w-full rounded-md border border-input bg-gray-50 px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" readonly>
                  <div class="text-blue-600 text-xs mt-1 cursor-pointer hover:underline">▶ Collaborators: (1 of 1)</div>
                </div>
                <div class="col-span-2">
                  <label for="replyTo" class="block text-gray-700 font-medium mb-1">Reply To:</label>
                  <select id="replyTo" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    <option>All Active Recipients</option>
                  </select>
                </div>
                <div class="col-span-2">
                  <label for="response" class="block text-gray-700 font-medium mb-1">Response:</label>
                  <select id="response" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    <option>Select a canned response</option>
                  </select>
                </div>
              </div>
              <!-- Rich Text Editor Toolbar -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <div class="flex items-center gap-1 p-2 bg-gray-50 border-b border-gray-200 flex-wrap">
                  <button type="button" class="toolbar-btn" data-action="code">
                    <i class="fas fa-code text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="bold">
                    <i class="fas fa-bold text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="italic">
                    <i class="fas fa-italic text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="underline">
                    <i class="fas fa-underline text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="strikethrough">
                    <i class="fas fa-strikethrough text-sm"></i>
                  </button>
                  <div class="w-px h-6 bg-gray-300 mx-1"></div>
                  <button type="button" class="toolbar-btn" data-action="insertUnorderedList">
                    <i class="fas fa-list-ul text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="insertOrderedList">
                    <i class="fas fa-list-ol text-sm"></i>
                  </button>
                  <div class="w-px h-6 bg-gray-300 mx-1"></div>
                  <button type="button" class="toolbar-btn" data-action="justifyLeft">
                    <i class="fas fa-align-left text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="justifyCenter">
                    <i class="fas fa-align-center text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="justifyRight">
                    <i class="fas fa-align-right text-sm"></i>
                  </button>
                  <div class="w-px h-6 bg-gray-300 mx-1"></div>
                  <button type="button" class="toolbar-btn" data-action="insertImage">
                    <i class="fas fa-image text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="createLink">
                    <i class="fas fa-link text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="insertHorizontalRule">
                    <i class="fas fa-minus text-sm"></i>
                  </button>
                </div>
                <div id="commentEditor" class="min-h-[120px] p-3 focus:outline-none text-gray-900" contenteditable="true" onfocus="handleFocus()" onblur="handleBlur()">
                  <p id="placeholder" class="text-gray-500">Start writing your text here.</p>
                </div>
              </div>
              <div id="fileUploadArea" class="file-upload-area mt-3 p-3 border border-dashed border-gray-300 rounded-md text-center text-sm text-gray-500 bg-gray-50 hover:bg-gray-100 transition-colors cursor-pointer">
                <i class="fas fa-paperclip mr-2"></i> Drop files here or <span class="text-blue-600 choose-files-link hover:underline" id="chooseFilesLink">choose files</span>
                <input type="file" multiple="multiple" id="fileInput" class="hidden-input" style="display: none; width: 0px; height: 0px;" accept="">
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 text-sm">
                <div>
                  <label for="signature" class="block text-gray-700 font-medium mb-1">Signature:</label>
                  <div class="flex items-center space-x-2">
                    <input type="checkbox" id="signature" class="form-checkbox h-4 w-4 text-blue-600 rounded">
                    <label for="signature" class="text-gray-700">None</label>
                  </div>
                </div>
                <div>
                  <label for="ticketStatusReply" class="block text-gray-700 font-medium mb-1">Ticket Status:</label>
                  <select id="ticketStatusReply" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    <option>Resolution Given (current)</option>
                  </select>
                </div>
              </div>
              <div class="flex justify-end space-x-2 mt-6">
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-yellow-400 text-gray-900 h-9 px-4 py-2 hover:bg-yellow-500">
                  Post Reply
                </button>
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2">
                  <i class="fas fa-undo mr-2"></i>Reset
                </button>
              </div>
            </div>
            <!-- Post Internal Note Content -->
            <div id="postInternalNoteContent" class="hidden p-4">
              <div class="mb-4 text-sm">
                <label for="internalNoteTitle" class="block text-gray-700 font-medium mb-1">Internal Note: <span class="text-red-500">*</span></label>
                <input type="text" id="internalNoteTitle" placeholder="Note title - summary of the note (optional)" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
              </div>
              <!-- Rich Text Editor Toolbar -->
              <div class="border border-gray-200 rounded-lg overflow-hidden">
                <div class="flex items-center gap-1 p-2 bg-gray-50 border-b border-gray-200 flex-wrap">
                  <button type="button" class="toolbar-btn" data-action="code">
                    <i class="fas fa-code text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="bold">
                    <i class="fas fa-bold text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="italic">
                    <i class="fas fa-italic text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="underline">
                    <i class="fas fa-underline text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="strikethrough">
                    <i class="fas fa-strikethrough text-sm"></i>
                  </button>
                  <div class="w-px h-6 bg-gray-300 mx-1"></div>
                  <button type="button" class="toolbar-btn" data-action="insertUnorderedList">
                    <i class="fas fa-list-ul text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="insertOrderedList">
                    <i class="fas fa-list-ol text-sm"></i>
                  </button>
                  <div class="w-px h-6 bg-gray-300 mx-1"></div>
                  <button type="button" class="toolbar-btn" data-action="justifyLeft">
                    <i class="fas fa-align-left text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="justifyCenter">
                    <i class="fas fa-align-center text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="justifyRight">
                    <i class="fas fa-align-right text-sm"></i>
                  </button>
                  <div class="w-px h-6 bg-gray-300 mx-1"></div>
                  <button type="button" class="toolbar-btn" data-action="insertImage">
                    <i class="fas fa-image text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="createLink">
                    <i class="fas fa-link text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn" data-action="insertHorizontalRule">
                    <i class="fas fa-minus text-sm"></i>
                  </button>
                </div>
                <div id="commentEditor" class="min-h-[120px] p-3 focus:outline-none text-gray-900" contenteditable="true" onfocus="handleFocus()" onblur="handleBlur()">
                  <p id="placeholder" class="text-gray-500">Start writing your text here.</p>
                </div>
              </div>
              <div id="fileUploadArea" class="file-upload-area mt-3 p-3 border border-dashed border-gray-300 rounded-md text-center text-sm text-gray-500 bg-gray-50 hover:bg-gray-100 transition-colors cursor-pointer">
                <i class="fas fa-paperclip mr-2"></i> Drop files here or <span class="text-blue-600 choose-files-link hover:underline" id="chooseFilesLink">choose files</span>
                <input type="file" multiple="multiple" id="fileInput" class="hidden-input" style="display: none; width: 0px; height: 0px;" accept="">
              </div>
              <div class="mb-6 text-sm mt-4">
                <label for="ticketStatusNote" class="block text-gray-700 font-medium mb-1">Ticket Status: <span class="text-red-500">*</span></label>
                <select id="ticketStatusNote" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <option>Resolution Given (current)</option>
                </select>
              </div>
              <div class="flex justify-end space-x-2">
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-yellow-400 text-gray-900 h-9 px-4 py-2 hover:bg-yellow-500">
                  Post Note
                </button>
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2">
                  <i class="fas fa-undo mr-2"></i>Reset
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <div class="px-4 py-2 text-center text-xs text-gray-500 border-t">
          Copyright © 2025 SlashRTC All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
  <script>
    function showTab(tabName) {
      const tabs = ['ticketThread', 'tasks'];
      tabs.forEach(tab => {
        const button = document.getElementById(tab + 'Tab');
        const content = document.getElementById(tab + 'Content');
        if (tab === tabName) {
          button.classList.add('active');
          button.classList.remove('inactive');
          content.classList.remove('hidden');
        } else {
          button.classList.remove('active');
          button.classList.add('inactive');
          content.classList.add('hidden');
        }
      });
    }

    function showSubTab(tabName) {
      const subTabs = ['postReply', 'postInternalNote'];
      subTabs.forEach(tab => {
        const button = document.getElementById(tab + 'Tab');
        const content = document.getElementById(tab + 'Content');
        if (tab === tabName) {
          button.classList.add('active');
          button.classList.remove('inactive');
          content.classList.remove('hidden');
        } else {
          button.classList.remove('active');
          button.classList.add('inactive');
          content.classList.add('hidden');
        }
      });
    }

    // Handle rich text editor placeholder
    function handleFocus() {
      const placeholder = document.getElementById('placeholder');
      if (placeholder) {
        placeholder.style.display = 'none';
      }
    }

    function handleBlur() {
      const editor = document.getElementById('commentEditor');
      const placeholder = document.getElementById('placeholder');
      if (editor && placeholder && editor.innerText.trim() === '') {
        placeholder.style.display = 'block';
      }
    }

    // Initialize with default active tabs
    document.addEventListener('DOMContentLoaded', () => {
      showTab('ticketThread');
      showSubTab('postReply');

        // Apply initial placeholder state for rich text editor
        const editor = document.getElementById('commentEditor');
        const placeholder = document.getElementById('placeholder');
        if (editor && placeholder && editor.innerText.trim() === '') {
          placeholder.style.display = 'block';
        }
      });
    </script>
  </body>
  </html>