<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TODO RPG</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="main">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 style="font-size: 80px;">TODO RPG</h1>
        <h3 class="mt-5">Log In</h3>
        <form id="loginForm" class="text-center mt-3">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" id="Username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" id="Password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-light mt-3">Log In</button>
            <div id="errorMessage" class="mt-3 text-danger"></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
