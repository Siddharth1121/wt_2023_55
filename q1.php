<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registration</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <form id="registrationForm" action="register.php" method="post">
      <h2>User Registration</h2>
      <div class="form-group">
        <label for="name">Name (at least 10 characters):</label>
        <input type="text" id="name" name="name" minlength="10" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="password">Password (2 uppercase, 1 digit, 1 special char, min length 6):</label>
        <input type="password" id="password" name="password" pattern="(?=.*[A-Z].*[A-Z])(?=.*\d)(?=.*[_@$])(?!.*\s).{6,}" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f0f0f0;
}

.container {
  width: 400px;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  font-size: 16px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

button {
  padding: 10px;
  font-size: 16px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
document.getElementById('registrationForm').addEventListener('submit', function(e) {
  e.preventDefault();

  // Validate passwords match
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;
  if (password !== confirmPassword) {
    alert('Passwords do not match');
    return;
  }

  // Send the form data to the server using AJAX or fetch API if needed
  var formData = new FormData(this);
  fetch('register.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    // Handle response from the server if needed
    console.log(data);
  })
  .catch(error => {
    // Handle error if fetch fails
    console.error('Error:', error);
  });
});
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = $_POST['password'];

  // Store values in an associative array
  $userData = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'address' => $address,
    'password' => $password
  );

  // Perform further operations like database insertion, validation, etc.

  // Return a response (e.g., JSON) to the client-side if needed
  echo json_encode($userData);
}
?>
