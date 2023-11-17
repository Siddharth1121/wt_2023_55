<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive HTML Form</title>
    <style>
        body {
            background-color: darkslategray;
            justify-content: center;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
            color: #000;

        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: azure;
        }

        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #df1e1e;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .form-group {
                width: 75%;
            }
        }

        @media (min-width: 992px) {
            .form-group {
                width: 50%;
                float: left;
                box-sizing: border-box;
            }
        }
    </style>
</head>

<body>
    <form action="userdetails.php" method="post">
        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" required>
        </div>
        <input type="submit" value="submit">
    </form>
</body>

</html>