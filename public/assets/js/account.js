// Modal animation handling
function openPasswordModal() {
  const modal = document.getElementById('passwordModal');
  const content = document.getElementById('modalContent');
  
  modal.classList.remove('hidden');
  setTimeout(() => {
    modal.classList.add('opacity-100');
    content.classList.remove('scale-95', 'opacity-0');
    content.classList.add('scale-100', 'opacity-100');
  }, 10);
}

function closePasswordModal() {
  const modal = document.getElementById('passwordModal');
  const content = document.getElementById('modalContent');
  
  content.classList.remove('scale-100', 'opacity-100');
  content.classList.add('scale-95', 'opacity-0');
  setTimeout(() => {
    modal.classList.add('hidden');
    modal.classList.remove('opacity-100');
  }, 300);
}

// Toggle password visibility
function togglePassword(id) {
  const input = document.getElementById(id);
  if (input.type === 'password') {
    input.type = 'text';
  } else {
    input.type = 'password';
  }
}

// Event listeners
document.getElementById('closeModalBtn').addEventListener('click', closePasswordModal);
document.getElementById('PasswordcancelBtn').addEventListener('click', closePasswordModal);

// Close modal when clicking outside
document.getElementById('passwordModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closePasswordModal();
  }
});
