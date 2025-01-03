<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<main>
    <div class="container">
        <img src="images/logo.jpg" alt="">
        <h2>Halaman Login</h2>
        <form action="<?= base_url('/login/auth') ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
        <p class="line"></p>
        <a href="/register" class="insert">Sign Up</a>
    </div>
</main>

<!-- <footer>
    <p>&copy; 2024 - My CodeIgniter App</p>
</footer> -->
</body>
</html>
