// Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get modal elements
    const modal = document.getElementById('update-due-date-modal');
    const backdrop = document.getElementById('modal-backdrop');
    
    // Open modal function
    function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        backdrop.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    // Close modal function
    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        backdrop.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
    
    // Event listeners for opening modal
    document.querySelectorAll('[data-modal-toggle="update-due-date-modal"]').forEach(button => {
        button.addEventListener('click', openModal);
    });
    
    // Event listeners for closing modal
    document.querySelectorAll('[data-modal-hide="update-due-date-modal"]').forEach(button => {
        button.addEventListener('click', closeModal);
    });
    
    // Close modal when clicking backdrop
    backdrop.addEventListener('click', closeModal);
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
    
    // Handle form submission
    document.getElementById('update-due-date-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                closeModal();
                // Show success message or reload page
                location.reload();
            } else {
                // Handle error
                alert(data.message || 'An error occurred');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while updating the due date');
        });
    });
});