const getUsers = async () => {
  try {
    const tbody = document.querySelector("#content-container");
    let tr = "";
    const res = await fetch("./db_conn/getUser.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });

    const output = await res.json();
    if (output.empty === "empty") {
      tr = "<tr><td colspan='4'>Record Not Found</td></tr>";
    } else {
      for (let i in output) {
        tr += `
            <tr>
              <td>${parseInt(i) + 1}</td>
              <td>${output[i].firstname} ${output[i].lastname}</td>
              <td>${output[i].username}</td>
              <td>${output[i].number}</td>
            </tr>`;
      }
    }
    tbody.innerHTML = tr;
    renderPage();
  } catch (error) {
    console.log("error " + error);
  }
};

// pagination ---------------------------------------------------------------
const itemsPerPage = 10;
let currentPage = 1;

const renderPage = () => {
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const rows = document.querySelectorAll("#content-container tr");

  rows.forEach((row, i) => {
    if (i >= startIndex && i < endIndex) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });

  document.querySelector(".page-count").textContent = currentPage;
};

const updatePage = (offset) => {
  const rows = document.querySelectorAll("#content-container tr");
  const totalPages = Math.ceil(rows.length / itemsPerPage);

  if (currentPage + offset >= 1 && currentPage + offset <= totalPages) {
    currentPage += offset;
    renderPage();
  }
};

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".page-btn.prev").addEventListener("click", (e) => {
    e.preventDefault();
    updatePage(-1);
  });

  document.querySelector(".page-btn.nxt").addEventListener("click", (e) => {
    e.preventDefault();
    updatePage(1);
  });
});

getUsers();
