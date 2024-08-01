<?php
session_start();

// Debugging settings
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    require_once 'dbconnection.php'; 
    
    // Searching the database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    if ($stmt->error) {
        die('Error: ' . $stmt->error);
    }
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verifying login
        if ($password == $user["password"]) { 
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_id'] = $user['user_id'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "Username not found. Please try again.";
    }
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
        <form id="loginForm" class="text-center mt-3" method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-light mt-3">Log In</button>
            <div id="errorMessage" class="mt-3 text-danger">
                <?php if (isset($error)) echo $error; ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
