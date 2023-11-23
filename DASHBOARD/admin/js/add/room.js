const addRoomButton = document.querySelector(".add");

addRoomButton.addEventListener('click', function(e) {
  e.preventDefault();
  window.location.href = "./ext-page/aRooms.php";
});

