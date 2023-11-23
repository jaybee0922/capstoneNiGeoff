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

/*------------home page variables--------------*/
const firstTitle = document.querySelector("#first-title");
const firstParagraph = document.querySelector("#first-paragraph");
const secondTitle = document.querySelector("#second-title");
const secondFirstParagraph = document.querySelector("#second-first-paragraph");

const menuParagraph = document.querySelector("#menu-paragraph");
const fifthTitle = document.querySelector("#fifth-title");
const fifthParagraph = document.querySelector("#fifth-paragraph");

let getMode = localStorage.getItem("mode");

const menu = document.querySelector("#menu");
const slides = document.querySelectorAll(".slideshow .slide-image");
let currentSlide = 0;

if (getMode && getMode === "dark-mode") {
  body.classList.add("dark");
  firstTitle.style.color = "white";
  firstParagraph.style.color = "white";
  secondTitle.style.color = "white";
  secondFirstParagraph.style.color = "white";

  // sectionTestimonial.style.backgroundColor = "#333";

  fifthTitle.style.color = "white";
  fifthParagraph.style.color = "white";
} else {
  firstTitle.style.color = "black";
  firstParagraph.style.color = "black";
  secondTitle.style.color = "black";
  secondFirstParagraph.style.color = "black";

  // sectionTestimonial.style.backgroundColor = "#fff";

  fifthTitle.style.color = "black";
  fifthParagraph.style.color = "black";
}

modeToggle.addEventListener("click", () => {
  // const language = document.querySelector("#language");
  modeToggle.classList.toggle("active");
  body.classList.toggle("dark");
  // language.classList.add("language");

  if (!body.classList.contains("dark")) {
    localStorage.setItem("mode", "light-mode");
    firstTitle.style.color = "black";
    firstParagraph.style.color = "black";
    secondTitle.style.color = "black";
    secondFirstParagraph.style.color = "black";

    // sectionTestimonial.style.backgroundColor = "#333";

    fifthTitle.style.color = "black";
    fifthParagraph.style.color = "black";
  } else {
    localStorage.setItem("mode", "dark-mode");
    firstTitle.style.color = "white";
    firstParagraph.style.color = "white";
    secondTitle.style.color = "white";
    secondFirstParagraph.style.color = "white";

    // sectionTestimonial.style.backgroundColor = "#fff";

    fifthTitle.style.color = "white";
    fifthParagraph.style.color = "white";
  }
});

searchToggle.addEventListener("click", () => {
  searchToggle.classList.toggle("active");
});

//   js code to toggle sidebar
sidebarOpen.addEventListener("click", () => {
  nav.classList.add("active");
});
body.addEventListener("click", (e) => {
  let clickedElm = e.target;
  if (
    !clickedElm.classList.contains("sidebarOpen") &&
    !clickedElm.classList.contains("menu")
  ) {
    nav.classList.remove("active");
  }
});

/*----------------image slide show--------------*/

const slideShow = () => {
  let len = slides.length;
  slides.forEach((slide, i) => {
    slide.classList.toggle("active", i === currentSlide);
  });
  currentSlide = (currentSlide + 1) % len;
};

setInterval(slideShow, 3000);

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

/*-------------modal show every 15seconds-----------*/
const showModal = () => {
  const modal = document.querySelector("#myModal");
  modal.style.display = "block";
  modal.getElementsByClassName("modal-content")[0].classList.add("show");
  modal.getElementsByClassName("close")[0].classList.add("show");
};

const closeModal = () => {
  const modal = document.querySelector("#myModal");
  modal.getElementsByClassName("modal-content")[0].classList.remove("show");
  modal.getElementsByClassName("close")[0].classList.remove("show");
  setTimeout(function () {
    modal.style.display = "none";
    setTimeout(showModal, 10000);
  }, 300);
};

const showOrHideModal = () => {
  const modal = document.querySelector("#myModal");
  if (modal.style.display === "block") {
    closeModal();
  } else {
    showModal();
    setTimeout(closeModal, 55000); // Close modal after 55 seconds
  }
};

setInterval(showOrHideModal, 55000);

const closeBtn = document.querySelector(".close");
closeBtn.addEventListener("click", closeModal);
