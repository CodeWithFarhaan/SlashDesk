$(document).ready(() => {
  // Initialize date picker
  flatpickr("#due_date", {
    dateFormat: "Y-m-d",
    minDate: "today",
  })

  // Modal functionality
  const modal = $("#taskModal")
  const taskForm = $("#taskForm")
  const closeNewModalBtn = $(".closeNewModalBtn")
  const cancelNewModalBtn = $(".cancelNewModalBtn")
  const resetBtn = $("#resetBtn")
  const navModal = $(".navModal")

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
  taskForm.on("submit", function (e) {
    e.preventDefault()

    // Update description field
    descriptionField.val(editor.html())

    const submitBtn = $("#submitBtn")
    const submitText = $(".submit-text")
    const loadingIcon = $(".loading-icon")

    // Show loading state
    submitBtn.prop("disabled", true)
    submitText.addClass("hidden")
    loadingIcon.removeClass("hidden")

    // Clear previous errors
    $(".error-message").addClass("hidden")

    const formData = new FormData(this)

    $.ajax({
      url: $(this).attr("action"),
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      success: (response) => {
        if (response.success) {
          // Show success message
          const successAlert = $(`
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
              <span class="block sm:inline">${response.message}</span>
            </div>
          `)

          closeModal()
          $(".max-w-7xl").prepend(successAlert)

          // Auto-hide success message
          setTimeout(() => {
            successAlert.fadeOut()
          }, 5000)

          // Reload page to show new task
          setTimeout(() => {
            location.reload()
          }, 1000)
        } else {
          // Show validation errors
          if (response.errors) {
            $.each(response.errors, (field, message) => {
              const errorDiv = $(`[name="${field}"]`).siblings(".error-message")
              errorDiv.text(message).removeClass("hidden")
            })
          } else {
            alert(response.message)
          }
        }
      },
      error: () => {
        alert("An error occurred. Please try again.")
      },
      complete: () => {
        // Hide loading state
        submitBtn.prop("disabled", false)
        submitText.removeClass("hidden")
        loadingIcon.addClass("hidden")
      },
    })
  })
})
