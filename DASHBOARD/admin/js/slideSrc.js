const spans = document.querySelector('.spans');
const headerCont = document.querySelector('.headerCont');
const slider = document.querySelector('.slider');



// swipe the nav to the left-----------------------------
spans.addEventListener('click', ()=>{
  headerCont.classList.toggle('swipe');
  slider.classList.toggle('hide');
})







