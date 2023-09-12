document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");
  const operatorList = document.getElementById("operatorList");

  searchInput.addEventListener("input", function () {
    console.log("Input event triggered");
    const searchTerm = searchInput.value.toLowerCase();
    fetchSearchResults(searchTerm);
  });

  function fetchSearchResults(searchTerm) {
    const url = `php/operator-search.php?search=${encodeURIComponent(searchTerm)}`;

    fetch(url)
      .then((response) => response.text())
      .then((data) => {
        operatorList.innerHTML = data;
      })
      .catch((error) => {
        console.error("Error fetching search results:", error);
      });
  }
});
