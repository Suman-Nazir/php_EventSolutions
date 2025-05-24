<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Launch Event</title>
    <link href="assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="assests/css/style.css" rel="stylesheet">
    <link href="assests/css/bootstrap.js" rel="stylesheet">
    <link href="assests/css/fontawesome.css" rel="stylesheet">
    <script src="assests/js/bootstrap.min.js"></script>
   </head>
   <style> 
       
    body {
        background-image: url('assests/images/sumi.webp');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family:   'Montserrat', cursive;
        font-family: 'Patua One';
    }
       .btn-buy {
        background-color: #ffffff;
        color: #0a0707;
        border: 1px solid #ffc107;
        border-radius: 20px;
        padding: 0.5rem 2rem;
        transition: background-color 0.3s ease, color 0.3s ease;
}

    .btn-buy:hover {
        background-color: #ffc107;
        color: rgb(18, 18, 18);
}

    header {
        background-color: black; 
        color: #ffc107; 
        height: 40vh; 
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
}
    header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }
    header p {
        color: #fff;
        font-size: 1.25rem;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .review-card {
        background-color: rgb(233, 229, 229); 
        border-radius: 10px;
        padding: 20px;
        color: white;
        text-align: center;
        border: none;
}
    .review-card p {
        margin-bottom: 10px;
        font-size: 1rem;
        color: rgba(0, 0, 0, 0.7)
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
    <header class="row-lg-6 align-items-center text-center mt-5 pt-5 pb-5">
        <div>
            <h1 class="text-warning"><br>Welcome to Our Exclusive Product Launch</h1>
            <p class="lead text-white">Discover the unveiling of innovation and brilliance.</p>
        </div>
    </header>
    <section >
        <div class="container py-5 mt-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                     <img src="assests/images/product 1.jpg" class="img-fluid rounded" alt="Product Launch" width="600" height="500">
                </div>
                <div class="col-lg-6 bg-black lead text-white p-4">
                    <h2 class="text-warning ">About the Launch Event</h2>
                    <p >Our product launch event is a celebration of innovation and creativity. Join us for an exclusive first look at our latest offering, where we’ll showcase its unique features and the vision behind its design. Be part of this exciting moment as we unveil a product that promises to shape the future.
                        This event brings together industry leaders, influencers, and forward-thinkers for an unforgettable experience. Expect engaging presentations, live demonstrations, and exclusive insights that will set the stage for what’s to come. We invite you to witness the future, today.Our product launch event marks an exciting milestone in innovation and creativity.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-black">
        <div class="container">
            <h2 class="text-center text-warning mb-4">Our Event Management Services</h2>
            <div class="row g-4">
                <div class="col-md-4 ">
                    <div class="card">
                        <img src="assests/images/product 3.jpg" class="card-img-top" alt="Video & Camera Service">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Event Planning</h5>
                            <p class="text-muted">Capture every magical moment with our professional video and photo services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/product 4.jpeg" class="card-img-top" alt="Event Decoration">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Full-Service Product Launch</h5>
                            <p class="text-muted">We provide complete venue decor to match your theme and elevate the event.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/product 5.jpg" class="card-img-top" alt="Venue Selection">
                        <div class="card-body text-center">
                            <h5 class="text-warning">VIP & Influencer Product Launch</h5>
                            <p class="text-muted">Let us help you select the perfect venue for an unforgettable event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section >
    <div class="container py-5 bg-black mt-5">
        <h2 class="text-center text-warning mb-4">Event Gallery</h2>
        <p class="text-center text-white lead mb-5">
            Explore a curated collection of unforgettable moments. <br>Each
            image captures the magic and beauty of our meticulously planned events.</p>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assests/images/product6.png" alt="Garden Setup">
                    <div class="card-body text-center">
                        <p class="card-text fw-bold text-black">Stunning  setup</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assests/images/product 7.jpg" alt="Decorated Tables" class="card-img-top">
                    <div class="card-body text-center">
                        <p class="card-text fw-bold text-black">Elegant decorations</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assests/images/product 8.jpg" alt="Floral Arrangements" class="card-img-top">
                    <div class="card-body text-center">
                        <p class="card-text fw-bold text-black">Exquisite  arrangements</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <img src="assests/images/product 9.jpg" alt="Wedding Cake" class="card-img-top">
                    <div class="card-body text-center">
                        <p class="card-text fw-bold text-black">Glamorous Celebration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container bg-black py-5 mt-5">
        <h2 class="text-center mb-4 text-warning">Customer Reviews</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="review-card">
                    <p class="text-warning"><strong>John Doe</strong></p>
                    <p>"The event was beautifully organized and exceeded my expectations!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card">
                    <p class="text-warning"><strong>Jane Smith</strong></p>
                    <p>"Amazing service! My wedding was a dream come true."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card">
                    <p class="text-warning"><strong>Michael Brown</strong></p>
                    <p>"The team was professional and made everything stress-free."</p>
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

