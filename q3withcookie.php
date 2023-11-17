<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (other head elements) ... -->
</head>
<body>
    <form action="process.php" method="post">
        <!-- ... (form inputs) ... -->
        <button type="submit">Submit</button>
    </form>

    <script>
        // Set cookie with first name when the form is submitted
        document.querySelector('form').addEventListener('submit', function(event) {
            const firstName = document.getElementById('firstName').value;
            document.cookie = `firstName=${firstName}; expires=${getCookieExpirationDate(30)}`;
        });

        // Function to calculate the expiration date for the cookie
        function getCookieExpirationDate(days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            return date.toUTCString();
        }
    </script>
</body>
</html>


<?php
session_start();

// Store form data in session variables
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['userDetails'] = [
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'dob' => $_POST['dob'],
        'phone' => $_POST['phone'],
        'designation' => $_POST['designation']
    ];

    // Set a cookie with the user's first name
    if (!empty($_POST['firstName'])) {
        setcookie('firstName', $_POST['firstName'], time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
    }

    // Redirect back to the form page after storing the data
    header('Location: index.html');
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

// Display date of last access from the cookie
if (isset($_COOKIE['firstName'])) {
    echo "<p>Date of last access: " . date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']) . "</p>";
}
?>
