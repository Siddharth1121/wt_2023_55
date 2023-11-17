<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['designation'] = $_POST['designation'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>

    <h2>User Details</h2>
    <ul>
        <li><strong>First Name:</strong>
            <?php echo $_SESSION['firstName']; ?>
        </li>
        <li><strong>Last Name:</strong>
            <?php echo $_SESSION['lastName']; ?>
        </li>
        <li><strong>Email ID:</strong>
            <?php echo $_SESSION['email']; ?>
        </li>
        <li><strong>DOB:</strong>
            <?php echo $_SESSION['dob']; ?>
        </li>
        <li><strong>Phone No.:</strong>
            <?php echo $_SESSION['phone']; ?>
        </li>
        <li><strong>Designation:</strong>
            <?php echo $_SESSION['designation']; ?>
        </li>
    </ul>

</body>

</html>