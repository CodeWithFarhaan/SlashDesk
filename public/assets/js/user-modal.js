// Modal functionality
const modal = document.getElementById('userModal');
const addUserBtn = document.getElementById('addUserBtn');
const closeModal = document.getElementById('closeModal');
const cancelModal = document.getElementById('cancelModal');
const resetForm = document.getElementById('resetForm');
const createUserForm = document.getElementById('createUserForm');

// Open modal
addUserBtn.addEventListener('click', function () {
  modal.classList.remove('hidden');
  document.body.style.overflow = 'hidden';
});

// Close modal functions
function closeModalFunction() {
  modal.classList.add('hidden');
  document.body.style.overflow = 'auto';
  createUserForm.reset();
}

closeModal.addEventListener('click', closeModalFunction);
cancelModal.addEventListener('click', closeModalFunction);

// Close modal when clicking outside
modal.addEventListener('click', function (e) {
  if (e.target === modal) {
    closeModalFunction();
  }
});

// Reset form
resetForm.addEventListener('click', function () {
  createUserForm.reset();
});

// Close modal on Escape key
document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
    closeModalFunction();
  }
});