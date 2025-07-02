// Modal elements
        const modalBackdrop = document.querySelector('.modal-backdrop');
        const mainModal = document.querySelector('.main-modal');
        const collaboratorsModal = document.querySelector('.collaborators-modal');
        const addCollaboratorModal = document.querySelector('.add-collaborator-modal');
        
        // Buttons
        const openModalBtn = document.querySelector('.open-modal-btn');
        const closeModal = document.querySelector('.close-modal');
        const addCollaboratorBtn = document.querySelector('.add-collaborator-btn');
        const closeAddModal = document.querySelector('.close-add-modal');
        const cancelAdd = document.querySelector('.cancel-add-btn');
        const doneBtn = document.querySelector('.done-btn');
        const resetFormBtn = document.querySelector('.reset-form-btn');
        const addUserBtn = document.querySelector('.add-user-btn');

        // Form
        const collaboratorForm = document.querySelector('.collaborator-form');

        // Open main modal (Collaborators)
        openModalBtn.addEventListener('click', function(e) {
            e.preventDefault();
            showModal();
            showCollaboratorsModal();
        });

        // Close modal completely
        closeModal.addEventListener('click', function() {
            hideModal();
        });

        doneBtn.addEventListener('click', function() {
            hideModal();
        });

        // Open Add Collaborator modal
        addCollaboratorBtn.addEventListener('click', function() {
            showAddCollaboratorModal();
        });

        // Close Add Collaborator modal (back to Collaborators)
        closeAddModal.addEventListener('click', function() {
            showCollaboratorsModal();
        });

        cancelAdd.addEventListener('click', function() {
            showCollaboratorsModal();
        });

        // Reset form
        resetFormBtn.addEventListener('click', function() {
            collaboratorForm.reset();
        });

        // Add user functionality
        addUserBtn.addEventListener('click', function() {
            // Here you would typically submit the form data to your CodeIgniter controller
            const formData = new FormData(collaboratorForm);
            
            // Example of how you might send data to CodeIgniter
            // fetch('<?php echo base_url("collaborators/add"); ?>', {
            //     method: 'POST',
            //     body: formData
            // })
            // .then(response => response.json())
            // .then(data => {
            //     if(data.success) {
            //         showCollaboratorsModal();
            //         collaboratorForm.reset();
            //     }
            // });

            // For demo purposes, just show success and go back
            alert('User added successfully!');
            showCollaboratorsModal();
            collaboratorForm.reset();
        });

        // Close modal when clicking backdrop
        modalBackdrop.addEventListener('click', function() {
            hideModal();
        });

        // Utility functions
        function showModal() {
            modalBackdrop.classList.remove('hidden');
            mainModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modalBackdrop.classList.add('hidden');
            mainModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            // Reset to first modal when closing
            showCollaboratorsModal();
        }

        function showCollaboratorsModal() {
            collaboratorsModal.classList.remove('hidden');
            addCollaboratorModal.classList.add('hidden');
        }

        function showAddCollaboratorModal() {
            collaboratorsModal.classList.add('hidden');
            addCollaboratorModal.classList.remove('hidden');
        }

        // Prevent modal from closing when clicking inside modal content
        collaboratorsModal.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        addCollaboratorModal.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Support for multiple trigger buttons (if you have multiple "a" tags with the same class)
        document.querySelectorAll('.open-modal-btn').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                showModal();
                showCollaboratorsModal();
            });
        });