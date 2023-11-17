<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
    <style>
        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
        }

        @media screen and (min-width: 992px) {
            form {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            input[type="date"],
            select {
                width: 75%;
            }
        }

        /* Styles for lower-range devices */
        @media screen and (max-width: 767px) {
            /* No specific styling needed for 100% width as it's the default */
        }
    </style>
</head>
<body>
    <form action="q3_php.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="phone">Phone No.:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="designation">Designation:</label>
        <select id="designation" name="designation" required>
            <option value="">Select Designation</option>
            <option value="Manager">Manager</option>
            <option value="Developer">Developer</option>
            <option value="Designer">Designer</option>
            <option value="Analyst">Analyst</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

