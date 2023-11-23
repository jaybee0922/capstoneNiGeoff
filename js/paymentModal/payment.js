// Function to handle the signup form submission
async function signUp() {
  const firstName = document.querySelector("#firstName").value;
  const lastName = document.querySelector("#lastName").value;
  const age = document.querySelector("#age").value;
  const number = document.querySelector("#number").value;
  const username = document.querySelector("#username").value;
  const password = document.querySelector("#password").value;

  const data = {
    firstName: firstName,
    lastName: lastName,
    age: age,
    number: number,
    username: username,
    password: password,
  };

  try {
    const response = await fetch("save_user.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    if (response.ok) {
      alert(await response.text());
    } else {
      console.error("Error:", response.status, response.statusText);
    }
  } catch (error) {
    console.error("Fetch error:", error.message);
  }
}

async function login() {
  // Fetch user input
  const loginUsername = document.querySelector("#loginUsername").value;
  const loginPassword = document.querySelector("#loginPassword").value;

  const loginData = {
    username: loginUsername,
    password: loginPassword,
  };

  try {
    const response = await fetch("login.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(loginData),
    });
    if (response.ok) {
      const responseData = await response.json();
      if (responseData.success) {
        alert("Login successful! Welcome, " + responseData.username);
        localStorage.setItem("username", responseData.username);
        updateNavbar();
      } else {
        alert("Login failed. Please check your credentials.");
      }
    } else {
      console.error("Error:", response.status, response.statusText);
    }
  } catch (error) {
    console.error("Fetch error:", error.message);
  }
}

// Function to update the navbar based on the login status
async function updateNavbar() {
  const loginLink = document.querySelector("#loginLink");
  const logoutLink = document.querySelector("#logoutLink");
  const storedUsername = localStorage.getItem("username");

  if (storedUsername) {
    loginLink.style.display = "none";
    logoutLink.style.display = "block";
    logoutLink.innerHTML = ` (${storedUsername}) Logout`;
    logoutLink.onclick = logout;
  } else {
    loginLink.style.display = "block";
    logoutLink.style.display = "none";
  }
}

// Call updateNavbar when the page loads to initialize the navbar state
document.addEventListener("DOMContentLoaded", updateNavbar);

function logout() {
  localStorage.removeItem("username");
  updateNavbar();
  alert("Logout successful!");
}

async function updateNavbar() {
  const loginLink = document.querySelector("#loginLink");
  const logoutLink = document.querySelector("#logoutLink");
  const storedUsername = localStorage.getItem("username");

  if (storedUsername) {
    loginLink.style.display = "none";
    logoutLink.style.display = "block";
    logoutLink.innerHTML = `Logout (${storedUsername})`;
    logoutLink.onclick = logout;
  } else {
    loginLink.style.display = "block";
    logoutLink.style.display = "none";
    logoutLink.innerHTML = "";
  }
}

// Call updateNavbar when the page loads to initialize the navbar state
document.addEventListener("DOMContentLoaded", updateNavbar);

let selectedRoomType = "";
let selectedRoomPrice = 0;
let statusUpdate = "Pending";

const selectRoom = (roomType) => {
  selectedRoomType = roomType;
  selectedRoomPrice = document.querySelector(
    `.box[data-type="${roomType.toLowerCase()}"]`
  ).dataset.price;
  alert(`Room type selected: ${roomType}`);
};

const totalAmount = selectedRoomPrice * qtyRooms;

const initiatePayment = async (totalAmount) => {
  try {
    const response = await fetch("paypal.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ totalAmount }),
    });

    if (response.ok) {
      const result = await response.json();
      window.location.href = result.redirectUrl;
    } else {
      console.error("Error:", response.status, response.statusText);
    }
  } catch (error) {
    console.error("Fetch error:", error.message);
  }
};

const bookNow = async () => {
  const checkInDate = document.querySelector("#check-in").value;
  const checkOutDate = document.querySelector("#check-out").value;
  const qtyRooms = document.querySelector("#qtyRooms").value;

  if (
    !checkInDate ||
    !checkOutDate ||
    !qtyRooms ||
    !selectedRoomType ||
    !selectedRoomPrice
  ) {
    alert("Please fill in all details and select a room type.");
    return;
  }

  const data = {
    checkInDate,
    checkOutDate,
    qtyRooms,
    selectedRoomType,
    selectedRoomPrice,
  };

  try {
    const response = await fetch("booking.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    if (response.ok) {
      const result = await response.text();
      displayReceipt(result);
    } else {
      console.error("Error:", response.status, response.statusText);
    }
  } catch (error) {
    console.error("Fetch error:", error.message);
  }
};

const displayReceipt = (message) => {
  document.querySelector("#receipt-message").innerText = message;
  document.querySelector("#receipt-modal").style.display = "block";
};

const closeModal = () => {
  document.querySelector("#receipt-modal").style.display = "none";
};
