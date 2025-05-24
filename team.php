<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
    <link href="assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="assests/css/fontawesome.css" rel="stylesheet">
    <script src="assests/js/bootstrap.min.js"></script>
    <link href="assests/css/style.css" rel="stylesheet">
    
</head>
<style> 
    body {
        background-image: url(assests/images/sumi.webp);
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
    <header class="bg-black text-center pt-5 pb-5  mt-5">
        <div class="container text-warning">
            <h1>Our Team</h1>
            <p class="lead text-white">
                Our team combines creativity, precision, and passion to deliver unforgettable experiences. Each member contributes unique skills, collaborating to bring clients' visions to life.
            </p>
        </div>
    </header>
    <section class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <img src="assests/images/ramsha.jpg" alt="Anum Fatima" class="img-fluid rounded-circle mb-3" width="150" height="150">
                        <h3 class="card-title">Anum Fatima</h3>
                        <p class="text-warning">Client Relations Manager</p>
                        <p>Anum focuses on building strong relationships with our clients, ensuring their needs are met and their visions are realized.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <img src="assests/images/suman.jpg" alt="Suman Nazir" class="img-fluid rounded-circle mb-3" width="150" height="150">
                        <h3 class="card-title">Suman Nazir</h3>
                        <p class="text-warning">Event Planning Leader</p>
                        <p>Suman is the creative force behind our events, ensuring seamless execution and attention to detail from start to end.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <img src="assests/images/SAMAVIA (2).jpg" alt="Samavia Naeem" class="img-fluid rounded-circle mb-3" width="120" height="120">
                        <h3 class="card-title">Samavia Naeem</h3>
                        <p class="text-warning">Creative Director</p>
                        <p>Samavia leads the design, turning creative ideas into captivating visuals. Her work makes every event an unforgettable experience.</p>
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
