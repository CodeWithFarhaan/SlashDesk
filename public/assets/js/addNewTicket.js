// Rich text editor functions
function formatText(command) {
    document.execCommand(command, false, null);
    document.getElementById('description').focus();
}

function formatResponseText(command) {
    document.execCommand(command, false, null);
    document.getElementById('response').focus();
}

function formatInternalNote(command) {
    document.execCommand(command, false, null);
    document.getElementById('internal_note').focus();
}

// File upload handling
document.getElementById('fileInput').addEventListener('change', function(e) {
    const files = e.target.files;
    if (files.length > 0) {
        let fileNames = [];
        for (let i = 0; i < files.length; i++) {
            fileNames.push(files[i].name);
        }
        console.log('Selected files:', fileNames.join(', '));
    }
});

document.getElementById('responseFileInput').addEventListener('change', function(e) {
    const files = e.target.files;
    if (files.length > 0) {
        let fileNames = [];
        for (let i = 0; i < files.length; i++) {
            fileNames.push(files[i].name);
        }
        console.log('Selected response files:', fileNames.join(', '));
    }
});

// Form validation
document.getElementById('ticketForm').addEventListener('submit', function(e) {
    const requiredFields = [
        'user', 'ticket_source', 'help_topic', 'issue_summary',
        'priority_level', 'priority_changed', 'first_level', 
        'second_level', 'third_level', 'affected_users', 
        'repetitive', 'fix_type', 'next_department', 
        'server_hostname', 'solved_by', 'repetitive_ref_ticket',
        'uat_fail_count', 'production_fail_count', 'uat_pass',
        'production_pass', 'new_instance_fail_counts', 
        'qa_testing_time', 'nature_of_ticket'
    ];
    
    let isValid = true;
    let firstInvalidField = null;
    
    requiredFields.forEach(fieldName => {
        const field = document.querySelector(`[name="${fieldName}"]`);
        if (field && !field.value.trim()) {
            field.classList.add('border-red-500');
            if (!firstInvalidField) {
                firstInvalidField = field;
            }
            isValid = false;
        } else if (field) {
            field.classList.remove('border-red-500');
        }
    });
    
    if (!isValid) {
        e.preventDefault();
        alert('Please fill in all required fields marked with *');
        if (firstInvalidField) {
            firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstInvalidField.focus();
        }
    }
});

// Auto-save functionality (optional)
let autoSaveTimer;
function autoSave() {
    clearTimeout(autoSaveTimer);
    autoSaveTimer = setTimeout(() => {
        const formData = new FormData(document.getElementById('ticketForm'));
        // You can implement auto-save logic here
        console.log('Auto-saving form data...');
    }, 30000); // Auto-save every 30 seconds
}

// Add event listeners for auto-save
document.querySelectorAll('input, select, textarea').forEach(element => {
    element.addEventListener('change', autoSave);
    element.addEventListener('input', autoSave);
});

// Initialize tooltips or help text (optional)
document.addEventListener('DOMContentLoaded', function() {
    // Add any initialization code here
    console.log('Ticket form initialized');
});
