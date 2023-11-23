/*------------------------show---------------*/
function getRandom(min, max) {
  return Math.random() * (max - min) + min;
}

function createSnowflake() {
  const snowflake = document.createElement("span");
  snowflake.classList.add("snowflake");
  snowflake.innerHTML = "&#10052;";
  snowflake.style.left = `${getRandom(0, window.innerWidth)}px`;
  snowflake.style.animationDuration = `${getRandom(5, 10)}s`;
  snowflake.style.animationDelay = `${getRandom(0, 2)}s`;
  return snowflake;
}

function addSnowflakes() {
  const body = document.querySelector("body");
  const numSnowflakes = Math.floor(getRandom(3, 10));

  for (let i = 0; i < numSnowflakes; i++) {
    body.appendChild(createSnowflake());
  }
}

window.addEventListener("load", addSnowflakes);

/*----------------change background by automatic----------------*/
const images = [
  "images/home1.jpg",
  "images/home2.jpg",
  "images/home3.jpg",
  "images/home4.jpg",
];

let currentImage = 0;
const slide = document.querySelector(".slide");

const automaticBackground = (change) => {
  const line = document.querySelector(".image");
  line.style.background = change;
  slide.classList.add("slide");
};

setInterval(() => {
  currentImage = (currentImage + 1) % images.length;
  slide.style.opacity = "0";
  slide.style.transition = "opacity 0.8s ease-in-out";

  setTimeout(() => {
    slide.src = images[currentImage];
    slide.style.opacity = "1";
  }, 500);
}, 5000);

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
  const loginUsername = document.querySelector("#loginUsername").value;
  const loginPassword = document.querySelector("#loginPassword").value;

  const loginData = {
    username: loginUsername,
    password: loginPassword,
  };

  try {
    // Perform AJAX request to check login credentials using Fetch
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
    logoutLink.innerHTML = `Logout (${storedUsername})`;
    logoutLink.onclick = logout;
  } else {
    loginLink.style.display = "block";
    logoutLink.style.display = "none";
  }
}

document.addEventListener("DOMContentLoaded", updateNavbar);

const logout = () => {
  localStorage.removeItem("username");
  updateNavbar();
  alert("Logout successful!");
};

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

document.addEventListener("DOMContentLoaded", updateNavbar);

// let selectedRoomType = '';
// let selectedRoomPrice = 0;
// let statusUpdate = "Pending";

// const selectRoom = (roomType) => {
//     selectedRoomType = roomType;
//     selectedRoomPrice = document.querySelector(`.box[data-type="${roomType.toLowerCase()}"]`).dataset.price;
//     alert(`Room type selected: ${roomType}`);
// }

// const bookNow = () => {
//     const checkInDate = document.querySelector('#check-in').value;
//     const checkOutDate = document.querySelector('#check-out').value;
//     const qtyRooms = document.querySelector('#qtyRooms').value;

//     if (!checkInDate || !checkOutDate || !qtyRooms || !selectedRoomType || !selectedRoomPrice) {
//         alert('Please fill in all details and select a room type.');
//         return;
//     }

//     const totalAmount = selectedRoomPrice * qtyRooms;
//     const receiptMessage = `Booking Summary:\n\nCheck-In Date: ${checkInDate}\nCheck-Out Date: ${checkOutDate}\nRoom Type: ${selectedRoomType}\nQuantity: ${qtyRooms}\nTotal Amount: ${totalAmount} \n Status: ${statusUpdate} `;
//     displayReceipt(receiptMessage);

// }

// const displayReceipt = (message) => {
//     document.querySelector('#receipt-message').innerText = message;
//     document.querySelector('#receipt-modal').style.display = 'block';
// }

// const closeModal = () => {
//     document.querySelector('#receipt-modal').style.display = 'none';
// }
