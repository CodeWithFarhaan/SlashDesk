<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>
<?= $this->include('modals/accessModal') ?>

<div class="container mx-auto px-4 py-6 overflow-y-auto relative">
  <div class="fixed inset-0 -z-10">
    <img class="h-full w-full object-fill" src="/assets/images/backgroundImage.jpg" alt="bg-img">
  </div>  
  <!-- Search Bar -->
  <div class="flex items-center justify-between mb-4">
    <div class="relative w-full max-w-md">
      <input type="text" placeholder="Search Department..."
        class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
    <div class="flex items-center space-x-2">
      <button class="flex items-center px-4 py-2 border border-gray-300 rounded-lg bg-white shadow-sm hover:bg-gray-50">
        Sort Icon
        <svg class="w-4 h-4 mr-2 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h10M4 14h6M4 18h2m0 0l-2 2m2-2l2 2" />
        </svg>

        <!-- Text -->
        <span class="text-gray-500 font-medium mr-2">Sort</span>

        <!-- Caret Icon -->
        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
        </svg>
      </button>
      <div class="relative cursor-pointer">
    <button id="newAceessBtn" class="accessModals space-x-2 bg-black text-white px-4 py-2 rounded text-sm font-medium hover:bg-gray-800">
    + New Access
</button>
</div>
    </div>
  </div>

  <!-- Select Buttons -->
  

  <!-- Ticket Table -->
  <div class="bg-white border rounded-lg overflow-x-auto mb-6">
    <table class="min-w-full text-sm">
      <thead class="bg-gray-100">
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <th class="p-3 text-left">User Name</th>
          <th class="p-3 text-left">Department Name</th>
          <th class="p-3 text-left">Access</th>
          <th class="p-3 text-left">is Active</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <!-- Row 1 -->
        <?php foreach ($responseBody as $key => $value) { ?>
        <tr>
          <td class="p-3"><input type="checkbox" /></td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer"><a href="/viewTask">Akash khedkar</a></td>
          <td class="p-3 text-blue-600 hover:underline cursor-pointer"><?= print_r($value['department_details']['department_name']) ?></td>
          <td class="p-3 text-gray-600"></td>
          <td class="px-6 py-4">
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" checked class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
            </label>
          </td>
        </tr>
      <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
<script>
  $(document).ready(() => {
  // Initialize date picker
  flatpickr("#due_date", {
    dateFormat: "Y-m-d",
    minDate: "today",
  })

  // Modal functionality
  const modal = $("#accessModals")
  const taskForm = $("#accessForm")
  const closeNewModalBtn = $(".closeModal")
  const cancelNewModalBtn = $(".cancelNewModalBtn")
  const resetBtn = $("#resetBtn")
  const navModal = $(".accessModals")

  // Open modal
  navModal.on("click", function (e) {
    // Prevent opening modal if clicking on the modal content
    if (e.target === this) {
      modal.removeClass("hidden")
      $("body").addClass("overflow-hidden")
    }
  })

  // Close modal function
  function closeModal() {
    modal.addClass("hidden")
    $("body").removeClass("overflow-hidden")

    // Reset form
    taskForm[0].reset()
    $("#editor").html("")
    $("#description").val("")
    $("#fileList").empty()
    $("#assignee").html('<option value="">Select assignee</option>')
    $(".error-message").addClass("hidden")

    console.log("Modal closed and form reset")
  }

  // Event handlers for closing modal
  closeNewModalBtn.on("click", (e) => {
    e.preventDefault()
    e.stopPropagation()
    closeModal()
  })

  cancelNewModalBtn.on("click", (e) => {
    e.preventDefault()
    e.stopPropagation()
    closeModal()
  })

  // Reset button handler
  resetBtn.on("click", (e) => {
    e.preventDefault()

    // Reset form
    taskForm[0].reset()
    $("#editor").html("")
    $("#description").val("")
    $("#fileList").empty()
    $("#assignee").html('<option value="">Select assignee</option>')
    $(".error-message").addClass("hidden")

    console.log("Form reset")
  })

  // Close modal when clicking outside (on backdrop)
  modal.on("click", function (e) {
    if (e.target === this) {
      closeModal()
    }
  })

  // Prevent modal from closing when clicking inside the modal content
  modal.find(".relative").on("click", (e) => {
    e.stopPropagation()
  })

  // Escape key to close modal
  $(document).on("keydown", (e) => {
    if (e.key === "Escape" && !modal.hasClass("hidden")) {
      closeModal()
    }
  })

  // Rich text editor functionality
  const editor = $("#editor")
  const descriptionField = $("#description")

  // Placeholder functionality
  editor.on("focus", function () {
    if ($(this).text() === "") {
      $(this).removeClass("text-gray-400")
    }
  })

  editor.on("blur", function () {
    if ($(this).text() === "") {
      $(this).addClass("text-gray-400")
    }
  })

  // Update hidden textarea when editor content changes
  editor.on("input", function () {
    descriptionField.val($(this).html())
  })

  // Toolbar functionality
  $(".toolbar-btn").on("click", function (e) {
    e.preventDefault()
    const action = $(this).data("action")

    editor.focus()

    if (action === "createLink") {
      const url = prompt("Enter URL:")
      if (url) {
        document.execCommand(action, false, url)
      }
    } else if (action === "insertImage") {
      const url = prompt("Enter image URL:")
      if (url) {
        document.execCommand(action, false, url)
      }
    } else {
      document.execCommand(action, false, null)
    }

    descriptionField.val(editor.html())
  })

  // File upload functionality
  const fileInput = $("#attachments")
  const uploadBtn = $("#uploadBtn")
  const fileList = $("#fileList")

  uploadBtn.on("click", () => {
    fileInput.click()
  })

  fileInput.on("change", function () {
    const files = this.files
    fileList.empty()

    for (let i = 0; i < files.length; i++) {
      const file = files[i]
      const fileItem = $(`
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
          ${file.name}
          <button type="button" class="ml-1 text-blue-600 hover:text-blue-800 remove-file" data-index="${i}">
            <i class="fas fa-times"></i>
          </button>
        </span>
      `)
      fileList.append(fileItem)
    }
  })

  // Remove file functionality
  fileList.on("click", ".remove-file", function () {
    const index = $(this).data("index")
    const dt = new DataTransfer()
    const files = fileInput[0].files

    for (let i = 0; i < files.length; i++) {
      if (i !== index) {
        dt.items.add(files[i])
      }
    }

    fileInput[0].files = dt.files
    fileInput.trigger("change")
  })

  // Department change - load assignees
  $("#department").on("change", function () {
    const departmentId = $(this).val()
    const assigneeSelect = $("#assignee")

    assigneeSelect.html('<option value="">Loading...</option>')

    if (departmentId) {
      $.post(
        '<?php echo base_url("task/get_assignees"); ?>',
        {
          department: departmentId,
        },
        (data) => {
          assigneeSelect.html('<option value="">Select assignee</option>')
          $.each(data, (index, user) => {
            assigneeSelect.append(`<option value="${user.id}">${user.name}</option>`)
          })
        },
        "json",
      ).fail(() => {
        assigneeSelect.html('<option value="">Select assignee</option>')
        console.error("Failed to load assignees")
      })
    } else {
      assigneeSelect.html('<option value="">Select assignee</option>')
    }
  })

  // Form submission
  // taskForm.on("submit", function (e) {
  //   e.preventDefault()

  //   // Update description field
  //   descriptionField.val(editor.html())

  //   const submitBtn = $("#submitBtn")
  //   const submitText = $(".submit-text")
  //   const loadingIcon = $(".loading-icon")

  //   // Show loading state
  //   submitBtn.prop("disabled", true)
  //   submitText.addClass("hidden")
  //   loadingIcon.removeClass("hidden")

  //   // Clear previous errors
  //   $(".error-message").addClass("hidden")

  //   const formData = new FormData(this)

  //   $.ajax({
  //     url: $(this).attr("action"),
  //     type: "POST",
  //     data: formData,
  //     processData: false,
  //     contentType: false,
  //     dataType: "json",
  //     success: (response) => {
  //       if (response.success) {
  //         // Show success message
  //         const successAlert = $(`
  //           <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
  //             <span class="block sm:inline">${response.message}</span>
  //           </div>
  //         `)

  //         closeModal()
  //         $(".max-w-7xl").prepend(successAlert)

  //         // Auto-hide success message
  //         setTimeout(() => {
  //           successAlert.fadeOut()
  //         }, 5000)

  //         // Reload page to show new task
  //         setTimeout(() => {
  //           location.reload()
  //         }, 1000)
  //       } else {
  //         // Show validation errors
  //         if (response.errors) {
  //           $.each(response.errors, (field, message) => {
  //             const errorDiv = $(`[name="${field}"]`).siblings(".error-message")
  //             errorDiv.text(message).removeClass("hidden")
  //           })
  //         } else {
  //           alert(response.message)
  //         }
  //       }
  //     },
  //     error: () => {
  //       alert("An error occurred. Please try again.")
  //     },
  //     complete: () => {
  //       // Hide loading state
  //       submitBtn.prop("disabled", false)
  //       submitText.removeClass("hidden")
  //       loadingIcon.addClass("hidden")
  //     },
  //   })
  // })
})

</script>