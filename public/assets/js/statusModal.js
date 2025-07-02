function openModal() {
    document.getElementById('closeTaskModal').classList.remove('hidden');
    document.getElementById('closeTaskModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('closeTaskModal').classList.add('hidden');
    document.getElementById('closeTaskModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
    resetForm();
}

function resetForm() {
    document.getElementById('closeTaskForm').reset();
}

// Close modal when clicking outside
document.getElementById('closeTaskModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Bind modal to anchor tags
document.addEventListener('DOMContentLoaded', function() {
    // Method 1: If your anchor has a specific class
    const modalTriggers = document.querySelectorAll('.open-close-modal');
    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            openModal();
        });
    });
});