const body = document.querySelector("body");
const nav = document.querySelector("nav");
const modeToggle = document.querySelector(".dark-light");
const searchToggle = document.querySelector(".searchToggle");
const sidebarOpen = document.querySelector(".sidebarOpen");
const siderbarClose = document.querySelector(".siderbarClose");

const allWord1 = document.querySelector(".whites");
const allWord2 = document.querySelector(".whites2");

let getMode = localStorage.getItem("mode");

const menu = document.querySelector("#menu");
const slides = document.querySelectorAll(".slideshow .slide-image");
let currentSlide = 0;

if (getMode && getMode === "dark-mode") {
  body.classList.add("dark");
  allWord1.style.color = "black";
  allWord2.style.color = "black";
}

modeToggle.addEventListener("click", () => {
  modeToggle.classList.toggle("active");
  body.classList.toggle("dark");

  if (!body.classList.contains("dark")) {
    localStorage.setItem("mode", "light-mode");
    allWord1.style.color = "black";
    allWord2.style.color = "black";
  } else {
    localStorage.setItem("mode", "dark-mode");
    allWord1.style.color = "white";
    allWord2.style.color = "white";
  }
});

const loginNavbar = document.querySelector(".login-navbar");
const modal = document.querySelector("#modal-form-myabout");
const closeBtn = document.querySelector(".close-form");
const moreInfo = document.querySelector(".more-info");


loginNavbar.addEventListener("click", () => {
  modal.style.display = "block";
});

moreInfo.addEventListener("click", () => {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});
