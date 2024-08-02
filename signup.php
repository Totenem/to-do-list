<?php
session_start();
require_once 'dbconnection.php';
$errors = [];

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $class = $_POST['class'];

    if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        $errors[] = "Username should only contain letters, numbers, and underscores.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO users (username, password, class) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $class);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | TODO RPG</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="main">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 style="font-size: 80px;">TODO RPG</h1>
        <h3 class="mt-5">Sign Up</h3>
        <form id="signupForm" class="text-center mt-3" method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <select id="class" name="class" class="form-control" required>
                    <option value="Warrior">Warrior</option>
                    <option value="Wizard">Wizard</option>
                    <option value="Sharpshooter">Sharpshooter</option>
                </select>
            </div>
            <button type="submit" name="signup" class="btn btn-light mt-3 mb-3">Sign Up</button>
            <p style="font-size: 10px;">Already have an account? <a href="login.php" style="text-decoration:none">Login here</a></p>
            <div id="errorMessage" class="mt-3 text-danger">
                <?php if (!empty($errors)) foreach ($errors as $error) echo "<p>$error</p>"; ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
