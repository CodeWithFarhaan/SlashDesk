//onClick all menu dropdown start
function toggleMenu(menuId) {
  const menu = document.getElementById(menuId + '-menu');
  const arrow = document.getElementById(menuId + '-arrow');

  if (menu.classList.contains('hidden')) {
    menu.classList.remove('hidden');
    arrow.classList.add('rotate-180');
  } else {
    menu.classList.add('hidden');
    arrow.classList.remove('rotate-180');
  }
}

function toggleDropdown() {
  const dropdown = document.getElementById('profileDropdown');
  dropdown.classList.toggle('hidden');
}

// Optional: close when clicking outside
window.addEventListener('click', function (e) {
  const dropdown = document.getElementById('profileDropdown');
  const trigger = document.querySelector('.fa-ellipsis-v');
  if (!dropdown.contains(e.target) && !trigger.contains(e.target)) {
    dropdown.classList.add('hidden');
  }
});
//onClick all menu dropdown end

//onclick preview panel/hamburger start
document.addEventListener('DOMContentLoaded', function() {
  const sidebarToggle = document.getElementById('sidebar-toggle');
  const sidebar = document.getElementById('sidebar');
  
  // Check localStorage for saved state
  const sidebarState = localStorage.getItem('sidebarCollapsed');
  
  // Initialize sidebar state
  if (sidebarState === 'true') {
    sidebar.classList.add('hidden', 'w-0');
    sidebar.classList.remove('w-[17rem]');
  } else {
    sidebar.classList.remove('hidden', 'w-0');
    sidebar.classList.add('w-[17rem]');
  }

  // Toggle sidebar and save state
  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener('click', function() {
      const isCollapsed = sidebar.classList.contains('hidden');
      
      // Toggle classes
      sidebar.classList.toggle('hidden');
      sidebar.classList.toggle('w-[17rem]');
      sidebar.classList.toggle('w-0');
      
      // Save state to localStorage
      localStorage.setItem('sidebarCollapsed', !isCollapsed);
    });
  }
});
//onclick preview panel end