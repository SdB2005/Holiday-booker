// Sample data for demonstration (replace with your own data)
const places = [
  "London, United Kingdom",
  "Paris, France",
  "New York City, United States",
  "Tokyo, Japan",
  "Crete, Greece",
  // Add more places as needed
];

// Function to filter places based on user input
function filterPlaces(input) {
  return places.filter(place => place.toLowerCase().includes(input.toLowerCase()));
}

// Function to display suggestions
function displaySuggestions(input) {
  const suggestionList = document.getElementById("suggestionList");
  suggestionList.innerHTML = ""; // Clear previous suggestions
  const filteredPlaces = filterPlaces(input);
  filteredPlaces.forEach(place => {
    const listItem = document.createElement("li");
    listItem.textContent = place;
    listItem.className = "list-group-item";
    suggestionList.appendChild(listItem);
  });
}

// Event listener for input in the search box
document.getElementById("searchInput").addEventListener("input", function () {
  const input = this.value.trim();
  if (input.length > 0) {
    displaySuggestions(input);
  } else {
    document.getElementById("suggestionList").innerHTML = ""; // Clear suggestion list if input is empty
  }
});

// Event listener for clicking on a suggestion
document.getElementById("suggestionList").addEventListener("click", function (event) {
  if (event.target.tagName === "LI") {
    document.getElementById("searchInput").value = event.target.textContent;
    document.getElementById("suggestionList").innerHTML = ""; // Clear suggestion list after selecting a suggestion
  }
});
