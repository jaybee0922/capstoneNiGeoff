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

const body = document.querySelector("body");
const nav = document.querySelector("nav");
const modeToggle = document.querySelector(".dark-light");
const searchToggle = document.querySelector(".searchToggle");
const sidebarOpen = document.querySelector(".sidebarOpen");
const siderbarClose = document.querySelector(".siderbarClose");

// const firstTitle = document.querySelector("#first-title");
// const allWord1 = document.querySelector(".whites");
// const allWord2 = document.querySelector(".whites2");

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
    // allWord1.style.color = "black";
    // allWord2.style.color = "black";
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
    // allWord1.style.color = "white";
    // allWord2.style.color = "white";
  }
});

const loginNavbar = document.querySelector(".login-navbar");
const modal = document.querySelector("#modal-form-events");
const closeBtn2 = document.querySelector(".close-form");
const loginForm = document.querySelector("#login-form");
const moreInfo = document.querySelector(".more-info");

loginNavbar.addEventListener("click", () => {
  modal.style.display = "block";
  console.log(modal);
  // console.log(loginNavbar);
});

moreInfo.addEventListener("click", () => {
  modal.style.display = "block";
  // console.log(loginNavbar);
});

closeBtn2.addEventListener("click", () => {
  modal.style.display = "none";
});
