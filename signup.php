<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <style>
        body {
            background-color: #1c003f;
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #32004c;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px #6a0dad;
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #8000ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #a64dff;
        }

        .login-link {
            margin-top: 20px;
            text-align: center;
        }

        .login-link a {
            color: #d1b3ff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="signupProcess.php" method="POST">
            <input type="text" name="username" placeholder="New Username" required>
            <input type="email" name="email" placeholder="New Email" required>
            <input type="password" name="password" placeholder="New Password" required>
            <input type="submit" value="Signup">
        </form>

        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>