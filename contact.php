<?php
include('db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact_messagesevent (name, email, message) 
              VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Message sent successfully!');
        </script>";
    } else {
        echo "<script>
        alert('Something Wrong With Query...');
        </script>";

    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assests/css/contact.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/style.css">

</head>
<style>
    #alert-success, #alert-error {
    position: fixed; 
    top: 100px; 
    left: 50%;
    transform: translateX(-50%); 
    z-index: 1050; 
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    display: none; 
}

#alert-success {
    background-color: #28a745;
    color: white;
}

#alert-error {
    background-color: #dc3545; 
    color: white;
}

body {
            background-image: url(assests/images/sumi.webp);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
            color: white; 
        }

</style>
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
    <div id="alert-success" class="alert-success" style="display: none;">
        <span>Successfully submitted form!</span>
    </div>
    <div id="alert-error" class="alert-error" style="display: none;">
        <span>Something went wrong! Please try again later.</span>
    </div>
    <div class="contact-section mt-5">
        <div class="contact-info">
            <div> Address, City, Country</div>
            <div>eventsolution@gmail.com</div>
            <div> +92 0004447891</div>
            <div> Mon - Sat 8:00 AM to 6:00 PM</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form id="contactForm" action="contact.php" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
             <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
             <input type="submit" name="submit" class="send-btn" value="Send">
              </form>
        </div>
    </div>
</body>
</html>