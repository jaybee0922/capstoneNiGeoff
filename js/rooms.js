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

/*------------------rooms slider---------------*/
const swiper = new Swiper(".slider-container-rooms", {
  slidesPerView: 4,
  spaceBetween: 20,
  sliderPerGroup: 4,
  loop: true,
  centerSlide: true,
  fade: true,
  grabCursor: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    clickable: true,
    dynamicBullets: true,
  },
});

/*------------------travellers, standard, vip rooms modal--------------------*/

const openModal = (modalId) => {
  const modal = document.querySelector(modalId);
  modal.style.display = "block";
};

const closeModal = () => {
  const modal = document.querySelector("#myModalTravellers");
  modal.style.display = "none";
  const modalStandard = document.querySelector(".myModalStandard");
  modalStandard.style.display = "none";
  const myModalVip = document.querySelector("#myModalVip");
  myModalVip.style.display = "none";
};

const openModalStandard = (modalId) => {
  const modal2 = document.querySelector(modalId);
  modal2.style.display = "block";
};

const openModalVip = (modalId) => {
  const modal3 = document.querySelector(modalId);
  modal3.style.display = "block";
};

/*-----------------Sign In && Sign Up form------------------*/
const bookNowButtonVip1 = document.querySelector(".cart-btn-popular-vip1");
const bookNowButtonVip2 = document.querySelector(".cart-btn-popular-vip2");
const bookNowButtonVip3 = document.querySelector(".cart-btn-popular-vip3");

const bookNowStandard1 = document.querySelector(".cart-btn-popular-standard1");
const bookNowStandard2 = document.querySelector(".cart-btn-popular-standard2");
const bookNowStandard3 = document.querySelector(".cart-btn-popular-standard3");

const bookNowTravellers1 = document.querySelector(".cart-btn-popular-trav1");
const bookNowTravellers2 = document.querySelector(".cart-btn-popular-trav2");
const bookNowTravellers3 = document.querySelector(".cart-btn-popular-trav3");

const modal = document.querySelector("#modal-form");
const closeBtn = document.querySelector(".close-form");
const loginForm = document.querySelector("#login-form");
const loginNavbar = document.querySelector(".login-navbar");

bookNowButtonVip1.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowButtonVip2.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowButtonVip3.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowStandard1.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowStandard2.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowStandard3.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowTravellers1.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowTravellers2.addEventListener("click", () => {
  modal.style.display = "block";
});

bookNowTravellers3.addEventListener("click", () => {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

loginNavbar.addEventListener("click", () => {
  modal.style.display = "block";
});
