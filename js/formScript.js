// Function to handle the signup form submission
function signUp() {
  // Fetch user input
  const firstName = document.getElementById("firstName").value;
  const lastName = document.getElementById("lastName").value;
  const age = document.getElementById("age").value;
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Create a data object to send to the server
  const data = {
    firstName: firstName,
    lastName: lastName,
    age: age,
    username: username,
    password: password,
  };

  // Perform AJAX request to save data in the database
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "save_user.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Handle the response from the server (e.g., show an alert)
      alert(xhr.responseText);
    }
  };

  // Convert data object to JSON string
  const jsonData = JSON.stringify(data);

  // Send the request
  xhr.send(jsonData);
}

// Function to handle the login form submission
function login() {
  // Fetch user input
  const loginUsername = document.getElementById("loginUsername").value;
  const loginPassword = document.getElementById("loginPassword").value;

  // Perform AJAX request to check login credentials
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "login.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Handle the response from the server
      const response = JSON.parse(xhr.responseText);
      if (response.success) {
        alert("Login successful! Welcome, " + response.username);
        // Update the navbar or redirect to the user's dashboard
      } else {
        alert("Login failed. Please check your credentials.");
      }
    }
  };

  // Create a data object to send to the server
  const loginData = {
    username: loginUsername,
    password: loginPassword,
  };

  // Convert data object to JSON string
  const jsonData = JSON.stringify(loginData);

  // Send the request
  xhr.send(jsonData);
}
