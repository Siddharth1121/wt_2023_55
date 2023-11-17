<?php
// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store form data in session variables
    $_SESSION['userDetails'] = [
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'dob' => $_POST['dob'],
        'phone' => $_POST['phone'],
        'designation' => $_POST['designation']
    ];

    // Redirect back to the form page after storing the data
    header('Location: q3.php');
    exit();
}

// Display user details retrieved from the session
if (isset($_SESSION['userDetails'])) {
    echo "<h2>User Details:</h2>";
    foreach ($_SESSION['userDetails'] as $key => $value) {
        echo "<p>$key: $value</p>";
    }
} else {
    echo "No user details found in the session.";
}
?>
