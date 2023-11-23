// dropp down -------------------------------------------------------
const toggleDropdown = () => {
  const dropdownOptions = document.getElementById("statusOptions");
  dropdownOptions.classList.toggle("show-dropdown");
};

const setStatus = (status) => {
  const dropdownSelect = document.querySelector(".dropdown-select");
  dropdownSelect.textContent = status;
  toggleDropdown(); // Close the dropdown after selecting an option
};

// Close the dropdown if the user clicks outside of it
window.onclick = (event) => {
  const dropdownOptions = document.getElementById("statusOptions");
  const dropdownSelect = document.querySelector(".dropdown-select");

  // Check if the clicked element is not the dropdown-select or its descendants
  if (!dropdownSelect.contains(event.target)) {
    // Check if the dropdown is currently open
    if (dropdownOptions.classList.contains("show-dropdown")) {
      // Close the dropdown
      dropdownOptions.classList.remove("show-dropdown");
    }
  }
};

// ----------------------------------------------------------
const updateAction = async (id, status, qty, event) => {
  event.preventDefault();

  const formData = new FormData();

  if (status === "canceled") {
    formData.append("status", status);
    formData.append("qty", qty);
  } else if (status === "pending") {
    formData.append("status", status);
    formData.append("qty", qty);
  } else if (status === "booked") {
    formData.append("status", status);
    formData.append("qty", qty);
  }
  formData.append("id", id);

  const res = await fetch("./db_conn/updateReserves.php", {
    method: "POST",
    body: formData,
  });
  const output = await res.json();
  if (output.success) {
    alert(output.message);
    console.log(output.message);
    window.location.href = output.redirect;
  } else {
    alert(output.message);
  }
};

const getReservations = async () => {
  try {
    const tbody = document.querySelector("#content-container");
    let tr = "";
    const res = await fetch("./db_conn/getReserves.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });

    const output = await res.json();
    if (output.empty === "empty") {
      tr = "<tr>Record Not Found</td>";
    } else {
      console.log(output);

      for (let i in output) {
        tr += `
        <tr>
          <td>${parseInt(i) + 1}</td>
          <td>${output[i].guest}</td>
          <td>${output[i].trans_date}</td>
          <td>${output[i].check_in}</td>
          <td>${output[i].check_out}</td>
          <td>${output[i].room_type}</td>
          <td>${output[i].room_qty}</td>
          <td>${output[i].assigned_room}</td>
          <td>
            <div class="dropdown">
              <div class="dropdown-select" onclick="toggleDropdown(${
                output[i].id
              })">${output[i].status}</div>
              <ul class="dropdown-options" id="statusOptions">
                <li onclick="updateAction('${output[i].id}', 'canceled', ${
          output[i].room_qty
        }, event)">canceled</li>
                <li onclick="updateAction('${output[i].id}', 'pending', ${
          output[i].room_qty
        }, event)">pending</li>
                <li onclick="updateAction('${output[i].id}', 'booked', ${
          output[i].room_qty
        }, event)">booked</li>
              </ul>
            </div>
          </td>
        </tr>`;
      }
    }

    tbody.innerHTML = tr;
    renderPage();
  } catch (error) {
    console.log("error " + error);
  }
};

// pagination ----------------------------------------------------------------
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

getReservations();
