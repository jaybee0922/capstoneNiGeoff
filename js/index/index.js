document.addEventListener("DOMContentLoaded", function () {
  const loginNavbar = document.querySelector(".loginNavbar");
  const modal = document.querySelector("#modal-form-index");
  const closeBtn2 = document.querySelector(".close-form");
  const loginForm = document.querySelector("#login-form");

  loginNavbar.addEventListener("click", function (event) {
    event.preventDefault();
    modal.style.display = "block";
  });

  closeBtn2.addEventListener("click", function () {
    modal.style.display = "none";
  });
});

const swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});

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

  // Create a data object to send to the server
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

    // Ensure the request was successful (status code 200)
    if (response.ok) {
      // Handle the response from the server
      const responseData = await response.json();
      if (responseData.success) {
        alert("Login successful! Welcome, " + responseData.username);

        // Store username in localStorage
        localStorage.setItem("username", responseData.username);

        // Update the navbar
        updateNavbar();
      } else {
        alert("Login failed. Please check your credentials.");
      }
    } else {
      // Handle the case where the server returns an error status
      console.error("Error:", response.status, response.statusText);
    }
  } catch (error) {
    // Handle network or other errors
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
    // logoutLink.innerHTML = `Logout (${storedUsername})`;
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

// Updated function to update the navbar based on the login status
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
