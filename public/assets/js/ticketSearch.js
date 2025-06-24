function openSearchModal() {
  const modal = document.getElementById('searchModal');
  const modalContent = document.getElementById('modalContent');
  const searchInput = document.getElementById('modalSearchInput');

  modal.classList.remove('hidden');

  // Trigger reflow
  modal.offsetHeight;

  // Add classes for animation
  modal.classList.remove('opacity-0');
  modal.classList.add('opacity-100');
  modalContent.classList.remove('scale-95');
  modalContent.classList.add('scale-100');

  // Focus on search input
  setTimeout(() => {
    searchInput.focus();
  }, 300);

  // Prevent body scroll
  document.body.style.overflow = 'hidden';
}

function closeSearchModal() {
  const modal = document.getElementById('searchModal');
  const modalContent = document.getElementById('modalContent');

  // Remove classes for animation
  modal.classList.remove('opacity-100');
  modal.classList.add('opacity-0');
  modalContent.classList.remove('scale-100');
  modalContent.classList.add('scale-95');

  // Hide modal after animation
  setTimeout(() => {
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
  }, 300);
}

function searchTickets(query) {
  const loadingState = document.getElementById('loadingState');
  const noResults = document.getElementById('noResults');
  const resultsContainer = document.getElementById('resultsContainer');
  const resultsCount = document.getElementById('resultsCount');

  if (query.length === 0) {
    // Show default results
    loadingState.classList.add('hidden');
    noResults.classList.add('hidden');
    resultsContainer.classList.remove('hidden');
    resultsCount.textContent = '5 tickets found';
    return;
  }

  // Show loading state
  loadingState.classList.remove('hidden');
  noResults.classList.add('hidden');
  resultsContainer.classList.add('hidden');

  // Simulate API call
  setTimeout(() => {
    loadingState.classList.add('hidden');

    // Here you would make an actual AJAX call to your CodeIgniter controller
    // For now, we'll simulate results
    if (query.toLowerCase().includes('test')) {
      noResults.classList.remove('hidden');
      resultsCount.textContent = '0 tickets found';
    } else {
      resultsContainer.classList.remove('hidden');
      resultsCount.textContent = '2 tickets found';
    }
  }, 500);
}

// Close modal when clicking outside
document.getElementById('searchModal').addEventListener('click', function (e) {
  if (e.target === this) {
    closeSearchModal();
  }
});

// Close modal with Escape key
document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    closeSearchModal();
  }
});