<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Details Form</title>
  <style>
    /* Style adjustments based on screen size */
    @media (min-width: 992px) {
      .form-group {
        display: flex;
        justify-content: space-between;
      }
      .form-group input {
        width: 48%; /* Two columns */
      }
    }
    @media (min-width: 768px) and (max-width: 991px) {
      .form-group input {
        width: 75%; /* Single column, 75% width */
        margin-bottom: 10px;
      }
    }
    @media (max-width: 767px) {
      .form-group input {
        width: 100%; /* Single column, full width */
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>

  <form action="process.php" method="POST">
    <div class="form-group">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
    </div>
    <div class="form-group">
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>
    <div class="form-group">
      <label for="email">Email ID:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="dob">DOB:</label>
      <input type="date" id="dob" name="dob" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone No.:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="designation">Designation:</label>
      <input type="text" id="designation" name="designation" required>
    </div>
    <button type="submit">Submit</button>
  </form>

</body>
</html>

