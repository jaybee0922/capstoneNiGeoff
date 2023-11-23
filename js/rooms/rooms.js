const body = document.querySelector("body");
const nav = document.querySelector("nav");
const modeToggle = document.querySelector(".dark-light");
const searchToggle = document.querySelector(".searchToggle");
const sidebarOpen = document.querySelector(".sidebarOpen");
const siderbarClose = document.querySelector(".siderbarClose");


// Footer
const subFooter = document.querySelector("#main-footer");
const firstClassParagraph = document.querySelector("#first-class-paragraph");
const status1 = document.querySelector("#status1");
const status2 = document.querySelector("#status2");
const status3 = document.querySelector("#status3");
const status4 = document.querySelector("#status4");
const status5 = document.querySelector("#status5");
const thirdClassParagraph = document.querySelector("#third-class-paragraph");
// Footer end

let getMode = localStorage.getItem("mode");

const menu = document.querySelector("#menu");
const slides = document.querySelectorAll(".slideshow .slide-image");
let currentSlide = 0;

if (getMode && getMode === "dark-mode") {
    body.classList.add("dark");
    subFooter.style.backgroundColor = "#333";
    subFooter.style.color = "white";
    firstClassParagraph.style.color = "white";
    status1.style.color = "white";
    status2.style.color = "white";
    status3.style.color = "white";
    status4.style.color = "white";
    status5.style.color = "white";
    thirdClassParagraph.style.color = "white";
    //   allWord1.style.color = "black";
    //   allWord2.style.color = "black";
} else {
    subFooter.style.backgroundColor = "#fff";
    subFooter.style.color = "black";
    firstClassParagraph.style.color = "black";
    status1.style.color = "black";
    status2.style.color = "black";
    status3.style.color = "black";
    status4.style.color = "black";
    status5.style.color = "black";
    thirdClassParagraph.style.color = "black";
}

modeToggle.addEventListener("click", () => {
    // const language = document.querySelector("#language");
    modeToggle.classList.toggle("active");
    body.classList.toggle("dark");

    // language.classList.add("language");

    if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
        subFooter.style.backgroundColor = "#fff";
        subFooter.style.color = "black";
        firstClassParagraph.style.color = "black";
        status1.style.color = "black";
        status2.style.color = "black";
        status3.style.color = "black";
        status4.style.color = "black";
        status5.style.color = "black";
        thirdClassParagraph.style.color = "black";

    } else {
        localStorage.setItem("mode", "dark-mode");
        subFooter.style.backgroundColor = "#333";
        subFooter.style.color = "white";
        firstClassParagraph.style.color = "white";
        status1.style.color = "white";
        status2.style.color = "white";
        status3.style.color = "white";
        status4.style.color = "white";
        status5.style.color = "white";
        thirdClassParagraph.style.color = "white";

    }
});



// Function to handle the signup form submission
async function signUp() {
    const firstName = document.querySelector('#firstName').value;
    const lastName = document.querySelector('#lastName').value;
    const age = document.querySelector('#age').value;
    const number = document.querySelector('#number').value;
    const username = document.querySelector('#username').value;
    const password = document.querySelector('#password').value;
    const data = {
        firstName: firstName,
        lastName: lastName,
        age: age,
        number: number,
        username: username,
        password: password
    };

    try {

        const response = await fetch('save_user.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        if (response.ok) {
            alert(await response.text());
        } else {

            console.error('Error:', response.status, response.statusText);
        }
    } catch (error) {

        console.error('Fetch error:', error.message);
    }
}





async function login() {
    // Fetch user input
    const loginUsername = document.querySelector('#loginUsername').value;
    const loginPassword = document.querySelector('#loginPassword').value;
    const loginData = {
        username: loginUsername,
        password: loginPassword
    };

    try {
        const response = await fetch('login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(loginData)
        });
        if (response.ok) {
            const responseData = await response.json();
            if (responseData.success) {
                alert('Login successful! Welcome, ' + responseData.username);
                localStorage.setItem('username', responseData.username);
                updateNavbar();
            } else {
                alert('Login failed. Please check your credentials.');
            }
        } else {
            console.error('Error:', response.status, response.statusText);
        }
    } catch (error) {
        console.error('Fetch error:', error.message);
    }
}

// Function to update the navbar based on the login status
async function updateNavbar() {
    const loginLink = document.querySelector('#loginLink');
    const logoutLink = document.querySelector('#logoutLink');
    const storedUsername = localStorage.getItem('username');

    if (storedUsername) {
        loginLink.style.display = 'none';
        logoutLink.style.display = 'block';
        logoutLink.innerHTML = ` (${storedUsername}) Logout`;
        logoutLink.onclick = logout;
    } else {
        loginLink.style.display = 'block';
        logoutLink.style.display = 'none';
    }
}

// Call updateNavbar when the page loads to initialize the navbar state
document.addEventListener('DOMContentLoaded', updateNavbar);




function logout() {
    localStorage.removeItem('username');
    updateNavbar();
    alert('Logout successful!');
}

// Updated function to update the navbar based on the login status
async function updateNavbar() {
    const loginLink = document.querySelector('#loginLink');
    const logoutLink = document.querySelector('#logoutLink');
    const storedUsername = localStorage.getItem('username');

    if (storedUsername) {
        loginLink.style.display = 'none';
        logoutLink.style.display = 'block';
        logoutLink.innerHTML = `Logout (${storedUsername})`;
        logoutLink.onclick = logout;
    } else {
        loginLink.style.display = 'block';
        logoutLink.style.display = 'none';
        logoutLink.innerHTML = ''; 
    }
}

// Call updateNavbar when the page loads to initialize the navbar state
document.addEventListener('DOMContentLoaded', updateNavbar);

