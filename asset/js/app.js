$(document).foundation()

// Open the full screen search box
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
  document.getElementById("kolom_pencarian").focus();
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
