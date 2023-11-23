// Profile Edit Pop UP---------------------------------
const profileLink = document.querySelector("#profile-option-link");
const optionPopup = document.querySelector("#popup-wrapper");

profileLink.addEventListener('click', (e)=>{
  e.preventDefault();
  optionPopup.classList.add('option');
});


window.addEventListener("click", (e) => {
  if (e.target === optionPopup) {
    optionPopup.classList.remove('option');
  }
});

