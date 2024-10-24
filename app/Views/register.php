<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/login.css">
   </head>

<body>
    <main>
        <div class="container">
            <img src="../../public/images/logo.jpg" alt="">
            <h2>Register</h2>
            <form action="/login/auth" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <button type="submit">Sign Up</button>
            </form>
            <p class="line"></p>
            <a href="login.php" class="insert">Sign In</a>
        </div>
    </main>

    <!-- <footer>
        <p>&copy; 2024 - My CodeIgniter App</p>
    </footer> -->
</body>
</html>
