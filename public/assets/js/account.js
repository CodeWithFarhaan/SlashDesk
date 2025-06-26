// Get modal and buttons
const passwordModal = document.getElementById("passwordModal");
const closeModalBtn = document.getElementById("CannedcloseModalBtn");
const cancelBtn = document.querySelector("button[form='PasswordcancelBtn']");
const updateBtn = document.querySelector("button#passwordForm");
const resetForm = document.getElementById('resetForm');
const passForm = document.getElementById('passForm');

// Function to open the modal
function openPasswordModal() {
  passwordModal.classList.remove("hidden");
}

// Function to close the modal
function closePasswordModal() {
  passwordModal.classList.add("hidden");
  document.getElementById("passwordForm").reset();
}

// Event listeners for closing
closeModalBtn.addEventListener("click", closePasswordModal);
cancelBtn.addEventListener("click", closePasswordModal);

// Reset form
resetForm.addEventListener('click', function () {
  passForm.reset();
});

// Handle update (you can replace this with an actual API call)
updateBtn.addEventListener("click", () => {
  const current = document.getElementById("currentpassword").value;
  const newPass = document.getElementById("newpassword").value;
  const confirm = document.getElementById("confirmpassword").value;

  if (!current || !newPass || !confirm) {
    alert("Please fill in all fields.");
    return;
  }

  if (newPass !== confirm) {
    alert("New password and confirm password do not match.");
    return;
  }

  // Submit logic here (e.g., AJAX call)
  console.log("Password updated successfully!");

  // Reset and close modal
  closePasswordModal();
});

