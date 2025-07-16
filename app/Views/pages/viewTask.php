<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<?= $this->include('modals/newTaskModal') ?>
<?= $this->include('modals/statusModal') ?>
<?= $this->include('modals/dueDateModal') ?>
<?= $this->include('modals/departmentModal') ?>
<?= $this->include('modals/assignedToModal') ?>
<?= $this->include('modals/collaboratorModal') ?>
<?= $this->include('modals/complexityModal') ?>
<?= $this->include('modals/testedOnModal') ?>
<?= $this->include('modals/testingStatusModal') ?>
<?= $this->include('modals/taskTypeModal') ?>
<?= $this->include('modals/fromDeptModal') ?>
<?= $this->include('modals/misroutedModal') ?>
<?= $this->include('modals/infoMissingModal') ?>


<div class="overflow-y-auto">
  <div class="fixed inset-0 -z-10">
    <img class="h-full w-full object-fill" src="/assets/images/backgroundImage.jpg" alt="bg-img">
  </div>
  <div class="container mx-auto px-4 py-6 overflow-hidden">
    <!-- Header -->
    <div class="">
      <div class="flex bg-gray-200 p-1">
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/taskOpen"><i class="fas fa-folder-open text-sm"></i> Open</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/myTask"><i class="fas fa-user-check text-sm"></i> My Tasks</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/taskCompleted"><i class="fas fa-check-double text-sm"></i> Completed</a>
        </button>
        <button class="flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <a href="/taskUpdates"><i class="fas fa-sync-alt text-sm"></i> Task Updates</a>
        </button>
        <button class="navModal flex-1 py-2 px-4 text-center text-gray-600 hover:text-gray-900 transition-colors">
          <i class="fas fa-plus-circle text-sm"></i> New Task
        </button>
      </div>
    </div>

    <!-- main div -->
    <div class="bg-white rounded-lg shadow-lg">
      <div class="bg-gradient-to-r from-purple-600 to-blue-700 text-white px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-3">
          <i class="fas fa-tasks text-white">
          </i>
          <span class="font-semibold text-white-600 text-2xl">
            Task #35773
            / Ticket #046314
          </span>
        </div>

        <div class="flex space-x-3">
            <!-- Flag Dropdown -->
            <div class="relative">
              <button onclick="toggleDropdown('dropdown1')" class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm flex items-center space-x-2 transition-all duration-200">
                <i class="fas fa-flag"></i>
                <i class="fas fa-caret-down"></i>
              </button>
              <div id="dropdown1" class="hidden absolute right-0 mt-2 bg-white shadow-xl rounded-lg border border-gray-200 text-sm z-20 min-w-[120px]">
                <div class="relative">
                  <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                    <i class="fas fa-check-circle"></i>
                    <span>Close</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- User Dropdown -->
            <div class="relative">
              <button onclick="toggleDropdown('dropdown2')" class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm flex items-center space-x-2 transition-all duration-200">
                <i class="fas fa-user"></i>
                <i class="fas fa-caret-down"></i>
              </button>
              <div id="dropdown2" class="hidden absolute right-0 mt-2 bg-white shadow-xl rounded-lg border border-gray-200 text-sm z-20 min-w-[140px]">
                <div class="relative">
                  <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors duration-200">
                    <i class="fas fa-hand-paper group-hover:scale-110 transition-transform duration-200"></i>
                    <span>Claim</span>
                  </a>
                </div>
                <div class="relative">
                  <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200">
                    <i class="fas fa-user"></i>
                    <span>Agent</span>
                  </a>
                </div>
                <div class="relative">
                  <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-colors duration-200">
                    <i class="fas fa-users"></i>
                    <span>Team</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <button class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm transition-all duration-200">
              <i class="fas fa-external-link-alt"></i>
            </button>
            <button class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm transition-all duration-200">
              <i class="fas fa-print"></i>
            </button>
            <button class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-4 py-2 rounded-lg text-sm transition-all duration-200">
              <i class="fas fa-edit"></i>
            </button>
        </div>
      </div>

      <!-- Task Title -->
      <div class="px-4 py-2 border-b">
        <h2 class="mt-3 text-lg font-semibold text-gray-800">
          BFL Automated Leadset Removal Issue
        </h2>
      </div>
      <!-- Task Information Grid -->
      <div class="p-4">
        <div class="bg-white rounded-md p-4 shadow-lg grid grid-cols-2 gap-8 mb-6">
          <!-- Left Column -->
          <div class="space-y-2">
            <div class="flex">
              <span class="w-20 text-sm font-medium text-gray-800">
                Status:
              </span>
              <span class="text-sm text-blue-600">
                <a onclick="openStatusModal()" class="cursor-pointer">Open</a>
              </span>
            </div>
            <div class="flex">
              <span class="w-20 text-sm font-medium text-gray-800">
                Created:
              </span>
              <span class="text-sm text-gray-800">
                6/13/25 7:34 PM
              </span>
            </div>
            <div class="flex">
              <span class="w-20 text-sm font-medium text-gray-800">
                Due Date:
              </span>
              <span class="text-sm text-blue-600">
                <a data-modal-toggle="update-due-date-modal" class="cursor-pointer">--None--</a>
              </span>
            </div>
          </div>
          <!-- Right Column -->
          <div class="space-y-2">
            <div class="flex">
              <span class="w-24 text-sm font-medium text-gray-800">
                Department:
              </span>
              <span class="text-sm text-blue-600">
                <a onclick="openTransferModal(35773); return false;" class="cursor-pointer">Customer Deliveries</a>
              </span>
            </div>
            <div class="flex">
              <span class="w-24 text-sm font-medium text-gray-800">
                Assigned To:
              </span>
              <span class="text-sm text-blue-600">
                <a class="open-reassign-modal cursor-pointer">hamza shaikh</a>
              </span>
            </div>
            <div class="flex">
              <span class="w-24 text-sm font-medium text-gray-800">
                Collaborators:
              </span>
              <span class="text-sm text-blue-600">
                <a class="opencollaboratormodal cursor-pointer">Collaborators</a>
              </span>
            </div>
          </div>
        </div>
        <!-- Task Details Table -->
        <div class="mb-6 bg-gray-50 rounded-xl p-6 shadow-sm">
          <h3 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
            <i class="fas fa-info-circle text-blue-600 mr-3"></i> Task Details
          </h3>
          <div class="bg-white border rounded-lg overflow-hidden">
            <table class="w-full text-sm">
              <tbody>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600 w-32">
                    <i class="fas fa-layer-group text-gray-500 mr-2"></i> Complexity:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openComplexityModal()" class="cursor-pointer hover:underline">Low</a>
                  </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600">
                    <i class="fas fa-vial text-gray-500 mr-2"></i> Tested On:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openTestedModal()" class="cursor-pointer hover:underline">NA</a>
                  </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600">
                    <i class="fas fa-clipboard-check text-gray-500 mr-2"></i> Testing Status:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openTestingStatusModal()" class="cursor-pointer hover:underline">NA</a>
                  </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600">
                    <i class="fas fa-code text-gray-500 mr-2"></i> Task Type:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openTaskTypeModal()" class="cursor-pointer hover:underline">Code Update</a>
                  </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600 whitespace-nowrap">
                    <i class="fas fa-arrow-right text-gray-500 mr-2"></i> From Department:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openFromDepartmentModal()" class="cursor-pointer hover:underline">DevOps - Code Update</a>
                  </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600">
                    <i class="fas fa-route text-gray-500 mr-2"></i> Misrouted:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openMisroutedModal()" class="cursor-pointer hover:underline">NA</a>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3 font-medium text-gray-600 whitespace-nowrap">
                    <i class="fas fa-exclamation-triangle text-gray-500 mr-2"></i> Information Missing:
                  </td>
                  <td class="px-4 py-3 text-blue-600 font-medium">
                    <a onclick="openInfoMissingModal()" class="cursor-pointer hover:underline">NO</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <!-- created comment section -->
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <div class="bg-blue-100 border-b px-4 py-3 flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-sm"></i>
                    </div>
                    <div>
                        <span class="text-sm font-medium text-gray-800">sanjana p</span>
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
        <!-- Activity items -->
        <div class="mt-3 space-y-4 mb-6 ml-6 pl-6 border-l-2 border-gray-200">
            <!-- Created by activity -->
            <div class="flex items-center space-x-3 text-sm text-gray-600">
                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500">
                    <i class="fas fa-edit text-sm"></i>
                </div>
                <span>Created by</span>
                <div class="w-6 h-6 bg-gray-300 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white text-xs"></i>
                </div>
                <span class="font-medium text-gray-800">sanjana p</span>
                <span class="text-xs text-gray-500">7/8/25 9:39 AM</span>
            </div>

            <!-- Assignment activity -->
            <div class="flex items-center space-x-3 text-sm text-gray-600">
                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500">
                    <i class="fas fa-user-check text-sm"></i>
                </div>
                <div class="w-6 h-6 bg-gray-300 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white text-xs"></i>
                </div>
                <span class="font-medium text-gray-800">Kanishk Magare</span>
                <span>assigned this to</span>
                <span class="font-medium text-gray-800">hamza shaikh</span>
                <span class="text-xs text-gray-500">7/8/25 11:11 AM</span>
            </div>
        </div>

        <!-- new comment section -->
        <div class="mt-6 bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <div class="bg-orange-100 border-b px-4 py-3 flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white text-sm"></i>
                    </div>
                    <div>
                        <span class="text-sm font-medium text-gray-800">hamza shaikh</span>
                        <span class="text-sm text-gray-600 ml-1">posted</span>
                        <span class="text-sm text-gray-600 ml-1">7/8/25 12:40 AM</span>
                    </div>
                </div>
                <i class="fas fa-chevron-down text-gray-500 text-sm"></i>
            </div>
            <div class="p-4">
                <p class="text-sm text-gray-700 mb-4 overflow-x-auto">
                Hi team,<br><br>
                Kindly find below Branch Details:<br><br>
                ServiceName :: WebApp<br>
                BranchName :: feature-35570<br>
                Commit Id :: 0e7044f43b280e08eb24e355f59c949fd923c391<br><br>
                ====================================================<br><br>
                For QA::<br><br>
                Check whether the Required text i.e. (popup message for Restriction on Manual Churn) are now displaying on the UI or not for campaign and process level also<br><br>
                1) Current Text: Churn is restricted for this campaign level<br>
                Required Text: Churn is restricted for selected connected disposition
              </p>
            </div>
        </div>
        <!-- Tab Navigation for Post Update/Internal Note -->
        <div class="border-t pt-4">
          <div class="max-w-4xl mb-4">
            <div class="flex bg-gray-200 rounded-lg p-1">
              <button id="postUpdateTab" class="flex-1 py-2 px-4 text-center rounded-md transition-colors tab-active" onclick="showCommentSection('update')">
                <i class="fas fa-paper-plane"></i> Post Update
              </button>
              <button id="postInternalNoteTab" class="flex-1 py-2 px-4 text-center rounded-md transition-colors tab-inactive" onclick="showCommentSection('internal')">
                <i class="fas fa-sticky-note"></i> Post Internal Note
              </button>
            </div>
          </div>

          <!-- Add Comment Section (Visible by default for Post Update) -->
          <div id="addCommentSection" class="block">
            <!-- Collaborators section - add ID here -->
            <div id="collaboratorsSection" class="mb-3">
              <span class="text-sm font-medium text-blue-600">
                <a class="opencollaboratormodal cursor-pointer"><i class="fas fa-users mr-2"></i>Collaborators</a>
              </span>
            </div>
            <!-- Rich Text Editor Toolbar -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <div class="flex items-center gap-1 p-2 bg-slate-50 border-b border-slate-200 flex-wrap">
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="code">
                    <i class="fas fa-code text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="bold">
                    <i class="fas fa-bold text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="italic">
                    <i class="fas fa-italic text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="underline">
                    <i class="fas fa-underline text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="strikethrough">
                    <i class="fas fa-strikethrough text-sm"></i>
                  </button>

                  <div class="w-px h-6 bg-slate-300 mx-1"></div>

                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="insertUnorderedList">
                    <i class="fas fa-list-ul text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="insertOrderedList">
                    <i class="fas fa-list-ol text-sm"></i>
                  </button>

                  <div class="w-px h-6 bg-slate-300 mx-1"></div>

                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="justifyLeft">
                    <i class="fas fa-align-left text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="justifyCenter">
                    <i class="fas fa-align-center text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="justifyRight">
                    <i class="fas fa-align-right text-sm"></i>
                  </button>

                  <div class="w-px h-6 bg-slate-300 mx-1"></div>

                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="insertImage">
                    <i class="fas fa-image text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="createLink">
                    <i class="fas fa-link text-sm"></i>
                  </button>
                  <button type="button" class="toolbar-btn p-2 hover:bg-slate-200 rounded" data-action="insertHorizontalRule">
                    <i class="fas fa-minus text-sm"></i>
                  </button>
                </div>

                <div id="commentEditor" class="min-h-[120px] p-3 focus:outline-none text-gray-900" contenteditable="true" onfocus="handleFocus()" onblur="handleBlur()">
                  <p id="placeholder" class="text-gray-500">Start writing your text here.</p>
                </div>
            </div>
            <div id="fileUploadArea" class="file-upload-area mt-3 text-xs text-gray-500">
              <i class="fas fa-paperclip"></i> Drop files here or <span class="text-blue-600 choose-files-link" id="chooseFilesLink">
                <a href="#">choose files</a></span> 
                <input type="file" multiple="multiple" id="fileInput" class="hidden-input" style="display: none; width: 0px; height: 0px;" accept="">
            </div>
              

            <!-- Bottom Actions -->
            <div class="flex justify-between items-center mt-4">
              <div class="flex items-center space-x-2">
                <label class="text-sm font-medium text-gray-600">
                  <i class="fas fa-flag text-slate-600"></i> Status:
                </label>
                <select class="border border-gray-300 rounded px-3 py-1 text-sm">
                  <option value="open">
                    Open
                  </option>
                  <option value="closed">
                    Closed
                  </option>
                </select>
              </div>
              <div class="space-x-2 mx-auto">
                <button id="submitButton" class="px-4 py-2 bg-yellow-300 border-2 border-yellow-600 text-gray-600 rounded text-sm hover:text-black hover:bg-yellow-400">
                  Post Update
                </button>
                <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded text-sm hover:bg-gray-400" onclick="resetCommentSection()">
                  <i class="fas fa-undo"></i> Reset
                </button>
              </div>
            </div>
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

<script src="<?= base_url('assets/js/viewTask.js') ?>"></script>