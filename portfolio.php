<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Page</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
</head>
<style> 
body {
    background-image: url('assests/images/sumi.webp');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
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
    <header class="bg-black text-center pt-5 pb-5 mt-5">
        <div class="container text-warning">
            <h1>Our Portfolio</h1>
            <p class="lead text-white">
                Event Solution crafts unforgettable experiences with creativity, precision, and personalized touches, bringing each vision to life. Every detail is thoughtfully designed to make each moment memorable.</strong>
            </p>
        </div>
    </header>
    <section class="mt-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-dark text-center bg-light pb-2">
                        <div class="card-body">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="assests/images/img1.avif"></div>
                            <h3 class="card-title text-warning">Elegant Garden Wedding</h3>
                            <p class="lead">We transformed an outdoor garden into a magical wedding venue, complete with stunning floral décor and live music. Our planning covered everything to vendor management.</p>
                            <a href="elegant_garden_wedding.php" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Learn More</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-dark text-center bg-light pb-2">
                        <div class="card-body">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="assests/images/img2.jpeg"></div>
                            <h3 class="card-title text-warning">Corporate Annual Gala</h3>
                            <p class="lead">For this high-profile gala, we handled everything from venue selection to event entertainment. We helped the company impress its stakeholders and celebrate its accomplishments.</p>
                            <a href="annual_sports_gala.php" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Learn More</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-dark text-center bg-light pb-2">
                        <div class="card-body">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="assests/images/img3.webp"></div>
                            <h3 class="card-title text-warning">Product Launch Event</h3>
                            <p class="lead">We executed high-impact product launch for tech company,experience that showcased new product.Our team coordinated venue selection and multimedia presentations.</p>
                            <a href="product_launch.php" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Learn More</b></a>
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
