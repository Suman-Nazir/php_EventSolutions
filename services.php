<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="assests/css/fontawesome.css" rel="stylesheet">
    <script src="assests/js/bootstrap.min.js"></script>
    <link href="assests/css/style.css" rel="stylesheet">

    
</head>
<style>
    body {
        background-image: url(assests/images/sumi.webp);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        color: #fff;
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
    <header class="bg-black py-3 mt-5 pt-5 pb-5 text-warning text-center">
        <div class="container">
            <h1 class="display-5 pt-3 text-warning mb-3">Our Services</h1>
            <p class="lead mb-0 text-light">
                <strong>We offer a range of professional event management services to make your special occasions unforgettable.</strong>
            </p>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center pt-5">
                            <h3 class="card-title">Event Planning</h3>
                            <p class="card-text">We offer comprehensive event planning services, ensuring your event runs smoothly from start to finish, with personalized attention to every detail.</p>
                            <a href="event_planning.php" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center pt-5">
                            <h3 class="card-title">On-Site Management</h3>
                            <p class="card-text">Our experienced team provides seamless on-site management, ensuring everything is executed according to plan, with no stress for you.</p>
                            <a href="on-site-management.php" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center pt-5">
                            <h3 class="card-title">Design & Décor</h3>
                            <p class="card-text">Transform your venue with our creative design & décor services, providing customized themes that reflect style and make event unforgettable.</p>
                            <a href="design-decor.php" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <footer 
    style="background-color: #f5b959 ; color: black; text-align: center; padding: 1rem;">
    <p> <b>@2024 Event Management. All Rights Reserved.</b></p>
</footer>
</body>
</html>
