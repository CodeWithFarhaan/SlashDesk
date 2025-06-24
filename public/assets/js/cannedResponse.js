document.addEventListener('DOMContentLoaded', function () {
  // Modal Elements
  const modal = document.getElementById('cannedResponseModal');
  const openModalBtn = document.getElementById('cannedbtn') // Your add button 
  const closeModalBtn = document.getElementById('CannedcloseModalBtn');
  const cancelBtn = document.getElementById('CannedcancelBtn');
  const editor = document.getElementById('editor');
  const responseTextarea = document.getElementById('response');
  const fileUpload = document.getElementById('file-upload');
  const fileList = document.getElementById('file-list');
  const form = document.getElementById('cannedResponseForm');

  // Open Modal
  if (openModalBtn) {
    openModalBtn.addEventListener('click', function (e) {
      e.preventDefault();
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });
  }

  // Close Modal
  function closeModal() {
    modal.classList.add('hidden');
    document.body.style.overflow = ''; // Re-enable scrolling
  }

  if (closeModalBtn) {
    closeModalBtn.addEventListener('click', closeModal);
  }

  if (cancelBtn) {
    cancelBtn.addEventListener('click', closeModal);
  }

  // Close modal when clicking outside
  modal.addEventListener('click', function (e) {
    if (e.target === modal) {
      closeModal();
    }
  });

  // Rich Text Editor Functions
  function formatText(command, value = null) {
    document.execCommand(command, false, value);
    editor.focus();
    updateTextarea();
  }

  function insertLink() {
    const url = prompt('Enter the URL:');
    if (url) {
      formatText('createLink', url);
    }
  }

  function updateTextarea() {
    responseTextarea.value = editor.innerHTML;
  }

  // Update textarea whenever editor content changes
  editor.addEventListener('input', updateTextarea);
  editor.addEventListener('blur', updateTextarea);

  // File Upload Handling
  if (fileUpload) {
    fileUpload.addEventListener('change', function () {
      fileList.innerHTML = ''; // Clear previous files

      if (this.files.length > 0) {
        const fileHeader = document.createElement('p');
        fileHeader.className = 'text-sm font-medium text-gray-700 mb-2';
        fileHeader.textContent = 'Selected files:';
        fileList.appendChild(fileHeader);

        for (let i = 0; i < this.files.length; i++) {
          const fileItem = document.createElement('div');
          fileItem.className = 'flex items-center justify-between p-2 border rounded mb-2';

          const fileInfo = document.createElement('div');
          fileInfo.className = 'flex items-center';

          const fileIcon = document.createElement('svg');
          fileIcon.className = 'w-4 h-4 mr-2 text-gray-500';
          fileIcon.setAttribute('fill', 'none');
          fileIcon.setAttribute('stroke', 'currentColor');
          fileIcon.setAttribute('viewBox', '0 0 24 24');
          fileIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>';

          const fileName = document.createElement('span');
          fileName.className = 'text-sm text-gray-700 truncate max-w-xs';
          fileName.textContent = this.files[i].name;

          const removeBtn = document.createElement('button');
          removeBtn.className = 'text-red-500 hover:text-red-700';
          removeBtn.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
          removeBtn.addEventListener('click', function () {
            // Create new DataTransfer object to remove file
            const newFiles = new DataTransfer();
            for (let j = 0; j < fileUpload.files.length; j++) {
              if (j !== i) {
                newFiles.items.add(fileUpload.files[j]);
              }
            }
            fileUpload.files = newFiles.files;
            fileItem.remove();

            // Remove header if no files left
            if (fileUpload.files.length === 0) {
              fileHeader.remove();
            }
          });

          fileInfo.appendChild(fileIcon);
          fileInfo.appendChild(fileName);
          fileItem.appendChild(fileInfo);
          fileItem.appendChild(removeBtn);
          fileList.appendChild(fileItem);
        }
      }
    });
  }

  // Form Submission
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Here you would typically send the form data to your server
      // For demonstration, we'll just log it and close the modal
      const formData = new FormData(form);
      formData.append('response', editor.innerHTML);

      console.log('Form data:', Object.fromEntries(formData.entries()));

      // Reset form and close modal
      form.reset();
      editor.innerHTML = '';
      responseTextarea.value = '';
      fileList.innerHTML = '';
      closeModal();

      // Show success message (you can customize this)
      alert('Canned response added successfully!');
    });
  }

  // Reset Form
  form.addEventListener('reset', function () {
    editor.innerHTML = '';
    responseTextarea.value = '';
    fileList.innerHTML = '';
  });
});