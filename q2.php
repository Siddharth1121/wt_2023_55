<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form id="registrationForm" onsubmit="saveUser(event)">
        <label for="name">Name (characters only):</label>
        <input type="text" id="name" name="name" pattern="[A-Za-z]+" required><br><br>

        <label for="email">Email (ending with .com, .net, .org, .edu, .gov, .int):</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone (10 digits starting with 0, 6, or 9):</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>

        <label for="class">Class (Silver, Gold, Platinum):</label>
        <input type="text" id="class" name="class" pattern="silver|gold|platinum" required><br><br>

        <button type="submit">Register</button>
    </form>

    <script>
        async function saveUser(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const userClass = document.getElementById('class').value;

            // Check if the user already exists (simulated asynchronous operation)
            const userExists = await checkUserExists(name);

            if (userExists) {
                alert('User with the same name already exists!');
                // You can perform any actions if the user exists (e.g., display details, etc.)
                return;
            }

            // If user doesn't exist, proceed to save the user details (simulated saving)
            const userDetails = {
                name: name,
                email: email,
                phone: phone,
                class: userClass
            };

            // Simulated saving (replace this with actual saving logic)
            // Here, we'll just log the details to console
            console.log('User details saved:', userDetails);
        }

        async function checkUserExists(name) {
            // Simulated asynchronous function to check if user exists
            // You can replace this with actual server-side logic (e.g., querying a database)
            // For demonstration, let's consider a sample list of existing users
            const existingUsers = ['Alice', 'Bob', 'Charlie', 'David']; // Sample existing users

            return new Promise((resolve) => {
                // Simulating asynchronous behavior with setTimeout
                setTimeout(() => {
                    const userExists = existingUsers.includes(name);
                    resolve(userExists);
                }, 1000); // Simulated delay of 1 second
            });
        }
    </script>
</body>
</html>
