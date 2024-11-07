<?php
include('config.php');  // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the registration form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hash the password

    // SQL query to insert the data into the users table
    $sql = "INSERT INTO users (fullname, username, email, password) VALUES ('$full_name', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New user registered successfully!";
        header("Location: login.php");  // Redirect to login page after successful registration
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <style>
        /* Reset some default styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            height: 100%;
        }

        /* Centering the form */
        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #5c9ded;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #5c9ded;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4b8cc7;
        }

        .message {
            text-align: center;
            font-size: 14px;
            color: #777;
        }

        .message a {
            color: #5c9ded;
            text-decoration: none;
        }

        .message a:hover {
            text-decoration: underline;
        }

        /* Hide login form and show registration form initially */
        .login-form {
            display: none;
        }

        .register-form.active {
            display: block;
        }

        .login-form.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <!-- Registration Form -->
            <form class="register-form active" method="POST" action="register.php">
                <h2>Register</h2>
                <input type="text" name="full_name" placeholder="Full Name *" required />
                <input type="text" name="username" placeholder="Username *" required />
                <input type="email" name="email" placeholder="Email *" required />
                <input type="password" name="password" placeholder="Password *" required />
                <button type="submit">Create Account</button>
                <p class="message">Already registered? <a href="#" onclick="toggleForms()">Sign In</a></p>
            </form>

            <!-- Login Form -->
            <form class="login-form" method="POST" action="login.php">
                <h2>Login</h2>
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Sign In</button>
                <p class="message">Not registered? <a href="#" onclick="toggleForms()">Create an account</a></p>
            </form>
        </div>
    </div>

    <script>
        function toggleForms() {
            const registerForm = document.querySelector('.register-form');
            const loginForm = document.querySelector('.login-form');
            registerForm.classList.toggle('active');
            loginForm.classList.toggle('active');
        }
    </script>
</body>
</html>
