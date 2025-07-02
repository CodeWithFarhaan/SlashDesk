// Modal functionality
const modalOverlay = document.getElementById('modalOverlay');
const closeModalBtn = document.getElementById('closeModal');
const cancelBtn = document.getElementById('cancelBtn');
const resetBtn = document.getElementById('resetBtn');
const assignBtn = document.getElementById('assignBtn');
const assigneeSelect = document.getElementById('assignee');
const maintainAccessCheckbox = document.getElementById('maintainAccess');
const reasonTextarea = document.getElementById('reason');

// Open modal (for all elements with class 'openModal')
document.querySelectorAll('.openAssignedToModal').forEach(openModalBtn => {
  openModalBtn.addEventListener('click', () => {
    modalOverlay.classList.remove('hidden');
    modalOverlay.classList.add('flex');
    document.body.style.overflow = 'hidden';
  });
});

// Close modal function
function closeModal() {
  modalOverlay.classList.add('hidden');
  modalOverlay.classList.remove('flex');
  document.body.style.overflow = 'auto';
}

// Close modal events
closeModalBtn.addEventListener('click', closeModal);
cancelBtn.addEventListener('click', closeModal);

// Close modal when clicking overlay
modalOverlay.addEventListener('click', (e) => {
  if (e.target === modalOverlay) {
    closeModal();
  }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
    closeModal();
  }
});

// Reset form
resetBtn.addEventListener('click', () => {
  assigneeSelect.value = '';
  maintainAccessCheckbox.checked = false;
  reasonTextarea.value = '';
  updateAssignButton();
});

// Update assign button state
function updateAssignButton() {
  if (assigneeSelect.value) {
    assignBtn.disabled = false;
    assignBtn.classList.remove('opacity-50', 'cursor-not-allowed');
  } else {
    assignBtn.disabled = true;
    assignBtn.classList.add('opacity-50', 'cursor-not-allowed');
  }
}

// Listen for assignee selection changes
assigneeSelect.addEventListener('change', updateAssignButton);

// Handle form submission
assignBtn.addEventListener('click', () => {
  if (!assigneeSelect.value) {
    alert('Please select an assignee');
    return;
  }

  // Collect form data
  const formData = {
    taskId: '35920',
    assignee: assigneeSelect.value,
    maintainAccess: maintainAccessCheckbox.checked,
    reason: reasonTextarea.value.trim()
  };

  // Here you would typically send the data to your CodeIgniter controller
  console.log('Form Data:', formData);
  
  // Example AJAX call (uncomment and modify for your CodeIgniter setup)
  /*
  fetch('/tasks/reassign', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify(formData)
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert('Task reassigned successfully!');
      closeModal();
      // Optionally reload the page or update the UI
    } else {
      alert('Error: ' + data.message);
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert('An error occurred while reassigning the task');
  });
  */

  // For demo purposes, just show success message
  alert('Task reassigned successfully!');
  closeModal();
});

// Initialize button state
updateAssignButton();
