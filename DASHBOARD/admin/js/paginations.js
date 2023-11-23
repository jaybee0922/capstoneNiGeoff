import "./get/getUsers.js";

const itemsPerPage = 10;
let currentPage = 1;

const renderPage = () => {
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const rows = document.querySelectorAll("#content-container tr");

  // Hide all rows-------------------------
  rows.forEach((row, i) => {
    if (i >= startIndex && i < endIndex) {
      // Show the rows for the current page
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });

  document.querySelector(".page-count").textContent = currentPage;
};

// pagination ---------------------------------------------------------------
const updatePage = (offset) => {
  const rows = document.querySelectorAll("#content-container tr");
  const totalPages = Math.ceil(rows.length / itemsPerPage);

  // Update currentPage only if it's within a valid range
  if (currentPage + offset >= 1 && currentPage + offset <= totalPages) {
    currentPage += offset;
  }
  getUsers();
  renderPage();
};

document.addEventListener("DOMContentLoaded", () => {
  renderPage();

  document.querySelector(".page-btn.prev").addEventListener("click", (e) => {
    e.preventDefault();
    updatePage(-1);
  });
  document.querySelector(".page-btn.nxt").addEventListener("click", (e) => {
    e.preventDefault();
    updatePage(1);
  });
});
