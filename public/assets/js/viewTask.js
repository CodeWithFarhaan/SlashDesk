let currentActiveTab = "update"
// Function to show/hide comment section based on tab selection
function showCommentSection(type) {
    const commentSection = document.getElementById("addCommentSection")
    const collaboratorsSection = document.getElementById("collaboratorsSection")
    const postUpdateTab = document.getElementById("postUpdateTab")
    const postInternalNoteTab = document.getElementById("postInternalNoteTab")
    const submitButton = document.getElementById("submitButton")
    // If clicking on the same tab that's already active, hide the section
    if (currentActiveTab === type) {
        commentSection.style.display = "none"
        // Reset both tabs to inactive state
        postUpdateTab.classList.remove("tab-active")
        postUpdateTab.classList.add("tab-inactive")
        postInternalNoteTab.classList.remove("tab-active")
        postInternalNoteTab.classList.add("tab-inactive")
        currentActiveTab = null
        return
    }
    // Show the comment section
    commentSection.style.display = "block"
    currentActiveTab = type
    // Update tab styling and button text
    if (type === "update") {
        postUpdateTab.classList.remove("tab-inactive")
        postUpdateTab.classList.add("tab-active")
        postInternalNoteTab.classList.remove("tab-active")
        postInternalNoteTab.classList.add("tab-inactive")
        submitButton.textContent = "Post Update"
        // Show collaborators section for Post Update
        collaboratorsSection.style.display = "block"
    } else if (type === "internal") {
        postInternalNoteTab.classList.remove("tab-inactive")
        postInternalNoteTab.classList.add("tab-active")
        postUpdateTab.classList.remove("tab-active")
        postUpdateTab.classList.add("tab-inactive")
        submitButton.textContent = "Post Internal Note"
        // Hide collaborators section for Post Internal Note
        collaboratorsSection.style.display = "none"
    }
}
// Function to reset comment section
function resetCommentSection() {
    const commentEditor = document.getElementById("commentEditor")
    const placeholder = document.getElementById("placeholder")
    // Clear the editor content
    commentEditor.innerHTML = '<p id="placeholder" class="text-gray-500">Start writing your text here.</p>'
    // Reset any form fields if needed
    const statusSelect = document.querySelector("select")
    if (statusSelect) {
        statusSelect.value = "open"
    }
}
// Function to handle editor focus
function handleFocus() {
    const placeholder = document.getElementById("placeholder")
    if (placeholder && placeholder.textContent === "Start writing your text here.") {
        placeholder.style.display = "none"
    }
}
// Function to handle editor blur
function handleBlur() {
    const editor = document.getElementById("commentEditor")
    const placeholder = document.getElementById("placeholder")
    if (editor.textContent.trim() === "" || editor.textContent.trim() === "Start writing your text here.") {
        if (placeholder) {
            placeholder.style.display = "block"
            placeholder.textContent = "Start writing your text here."
        }
    }
}
// Existing dropdown toggle function
function toggleDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId)
    dropdown.classList.toggle("hidden")
}
// Toolbar functionality for rich text editor
document.addEventListener("DOMContentLoaded", () => {
    const toolbarButtons = document.querySelectorAll(".toolbar-btn")
    toolbarButtons.forEach((button) => {
        button.addEventListener("click", function(e) {
            e.preventDefault()
            const action = this.getAttribute("data-action")
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
            // Focus back to editor
            document.getElementById("commentEditor").focus()
        })
    })
})


// Get references to the elements
const fileInput = document.getElementById('fileInput');
const chooseFilesLink = document.getElementById('chooseFilesLink');
const fileUploadArea = document.getElementById('fileUploadArea');
// Handle click on "choose files" link
chooseFilesLink.addEventListener('click', function(e) {
    e.preventDefault();
    fileInput.click();
});
// Handle file selection
fileInput.addEventListener('change', function(e) {
    const files = e.target.files;
    if (files.length > 0) {
        console.log('Selected files:', files);
        // You can add your file handling logic here
        handleFiles(files);
    }
});
// Handle drag and drop
fileUploadArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    fileUploadArea.classList.add('drag-over');
});
fileUploadArea.addEventListener('dragleave', function(e) {
    e.preventDefault();
    fileUploadArea.classList.remove('drag-over');
});
fileUploadArea.addEventListener('drop', function(e) {
    e.preventDefault();
    fileUploadArea.classList.remove('drag-over');
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        console.log('Dropped files:', files);
        // You can add your file handling logic here
        handleFiles(files);
    }
});
// Function to handle selected/dropped files
function handleFiles(files) {
    // Convert FileList to Array for easier handling
    const fileArray = Array.from(files);
    // Log file information
    fileArray.forEach((file, index) => {
        console.log(`File ${index + 1}:`, {
            name: file.name,
            size: file.size,
            type: file.type,
            lastModified: new Date(file.lastModified)
        });
    });
    // You can add more file processing logic here
    // For example: upload files, validate file types, show preview, etc.
}