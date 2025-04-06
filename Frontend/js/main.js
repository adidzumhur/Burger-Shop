const contentDiv = document.getElementById('content');

// Function to load content dynamically
function navigateTo(page) {
  fetch(`fragments/${page}.html`)
    .then(response => response.text())
    .then(html => {
      contentDiv.innerHTML = html;
    })
    .catch(err => console.error('Error loading page:', err));
}

// Load the home page by default
navigateTo('home');

function handleSearch(event) {
  event.preventDefault(); // Prevent form submission
  const query = document.getElementById('searchInput').value.trim().toLowerCase();

  if (!query) {
    alert('Please enter a search term.');
    return;
  }

  // Example logic: Display an alert with the search term
  alert(`Searching for: ${query}`);

  // TODO: Implement actual search logic here
  // Example: Filter menu items or navigate to a search results page
}
