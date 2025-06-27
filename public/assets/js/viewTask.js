function toggleDropdown(id) {
    document.querySelectorAll('.absolute').forEach(d => {
        if (d.id !== id) d.classList.add('hidden')
    });
    document.getElementById(id).classList.toggle('hidden');
}

// editor code
const editor = document.getElementById('editor');
const placeholder = document.getElementById('placeholder');

function handleFocus() {
    if (placeholder) {
        placeholder.style.display = 'none';
    }
}

function handleBlur() {
    if (editor.textContent.trim() === '') {
        placeholder.style.display = 'block';
    }
}