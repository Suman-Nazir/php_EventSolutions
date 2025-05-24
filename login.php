<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if (empty($email) || empty($password)) {
        echo "<script>alert('Both email and password are required!');</script>";
        exit;
    }
    $query = $conn->prepare("SELECT * FROM userseventsingup WHERE email = ?");
    $query->bind_param("s", $email); 
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            echo "<script>alert('Login successful! Welcome, " . htmlspecialchars($user['name']) . "'); window.location.href='index.php';</script>";
            exit;
        } else {
            echo "<script>alert('Invalid password! Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Email not registered! Please sign up first.'); window.location.href='signup.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <script src="assests/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: url(assests/images/sumi.webp) no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 8px;
        }     
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light custom-navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assests/images/logo.png" alt="Event Solutions Logo" class="navbar-logo">
            </a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php"><b>HOME</b></a></li>
                <li class="nav-item"><a class="nav-link" href="about.php"><b>ABOUT</b></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><b>Services</b></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="services.php">Our Services</a></li>
                        <li><a class="dropdown-item" href="event_planning.php">Event Planning</a></li>
                        <li><a class="dropdown-item" href="on-site-management.php">Onsite Management</a></li>
                        <li><a class="dropdown-item" href="design-decor.php">Design & Decor</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><b>Portfolio</b></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio.php">Our Portfolio</a></li>
                        <li><a class="dropdown-item" href="elegant_garden_wedding.php">Elegant Garden Wedding</a></li>
                        <li><a class="dropdown-item" href="annual_sports_gala.php">Corporate Annual Gala</a></li>
                        <li><a class="dropdown-item" href="product_launch.php">Product Launch Events</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="team.php"><b>TEAM</b></a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php"><b>CONTACT</b></a></li>
                <li class="nav-item"><a class="btn btn-outline-warning text-dark btn-sm me-2" href="signup.php"><b>SIGNUP</b></a></li>
                <li class="nav-item"><a class="btn btn-outline-warning text-dark btn-sm me-2" href="login.php"><b>LOGIN</b></a></li>
            </ul>
        </div>
    </nav> 
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Login</h2>

        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Login</button>
            <div class="mt-3 text-center">
                <p>Don't have an account? <a href="signup.php">Signup here</a></p>
            </div>
            <div id="message" class="text-center mt-3"></div>
        </form>
    </div>
</div>
 <footer 
    style="background-color: #f5b959 ; color: black; text-align: center; padding: 1rem;">
    <p> <b>@2024 Event Management. All Rights Reserved.</b></p>
</footer>
</body>
</html>