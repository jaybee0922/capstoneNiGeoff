const passwordInput = document.querySelector('#password');
const showPasswordCheckbox = document.querySelector('#show-password');
const label = document.querySelector('.show-password-icon');
const login = document.querySelector('.btn-lg');

showPasswordCheckbox.addEventListener('change', function () {
  if (showPasswordCheckbox.checked) {
    passwordInput.type = 'text';
    label.classList.toggle('change')
  } else {
    passwordInput.type = 'password';
    label.classList.remove('change')
  }
});


// login.addEventListener('click', (e)=>{
//   e.preventDefault();
//   window.location.href = "./admin/home.php";
// })


//log in script ---------------------------------------------------
const loginForm = document.querySelector('#login-modal form');
loginForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const formData = new FormData(loginForm);
  
  const response = await fetch('./admin/db_conn/loginScript.php', {
    method: 'POST',
    body: formData
  });
  const result = await response.json();
  
  if (result.status === 'success') {
    alert("Login successful!");
    window.location.href = result.redirect;
    // Clear the input fields
    loginForm.reset();
    loginForm.querySelector('#username').focus();
  } else {
    // Display an error message to the user
    alert(result.message);
  }
});