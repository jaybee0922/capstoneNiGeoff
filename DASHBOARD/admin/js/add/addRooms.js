const addRoom = document.querySelector('#add-rooms form');
addRoom.addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const formData = new FormData(addRoom);
  
  const response = await fetch('../db_conn/addRoom.php', {
    method: 'POST',
    body: formData
  });
  const result = await response.json();

  if (result.status === 'success') {
    alert("Add room successful!");
    addRoom.reset();
    window.location.href = result.redirect;
  } else {
    alert(result.message);
  }
  
});



