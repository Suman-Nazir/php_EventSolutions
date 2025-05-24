<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Annual Gala Event</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <script src="assests/js/bootstrap.bundle.min.js"></script>
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

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .review-card {
background-color: rgb(255, 255, 255); 
border-radius: 10px;
padding: 20px;
color: white;
text-align: center;
border: none;
}

.review-card .card-body {
padding: 20px;
border-radius: 10px;
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
            <h1 class="text-warning"><br>Your Corporate Gala, Celebrating Success</h1>
            <p class="lead text-white">Join us for an unforgettable evening of celebration, networking, and elegance at our Annual Gala.</p>
        </p>
        </div>
    </header>
 <section >
    <div class="container py-5 mt-3">
        <div class="row align-items-center">
            <div class="col-lg-6">
                 <img src="assests/images/gala 1.jpeg" class="img-fluid rounded" alt="Product Launch"  style="max-height: 400px; object-fit: cover; width: 100%;">
            </div>
            <div class="col-lg-6 bg-black lead text-white p-4">
                <h2 class="text-warning ">About the GalaEvent</h2><br>
                <p >Our Corporate Annual Gala brings together professionals from various industries to celebrate accomplishments, network, and foster new opportunities. The event features luxurious decor, fine dining, and entertainment tailored to create lasting memories. </p>
           <br> </div>
        </div>
    </div>
</section>
    <section class="py-5 bg-black">
        <div class="container">
            <h2 class="text-center text-warning mb-4">Our Event Management Services</h2>
            <div class="row g-4">
                <div class="col-md-4 ">
                    <div class="card">
                        <img src="assests/images/gala 2.jpg" class="card-img-top" alt="Video & Camera Service">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Full Video & Camera Service</h5>
                            <p class="text-muted">Capture every magical moment with our professional video and photo services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/gala 3.jpeg" class="card-img-top" alt="Event Decoration">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Event Decorations</h5>
                            <p class="text-muted">We provide complete venue decor to match your theme and elevate the event.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/gala 4.jpeg" class="card-img-top" alt="Venue Selection">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Venue Selection/h5>
                            <p class="text-muted">Let us help you select the perfect venue for an unforgettable event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="text-center py-5 bg-black mt-5">
        <h2 class="mb-4 text-warning">Event Highlights</h2> 
        <p class="mb-5 lead text-white">
            Explore a curated collection of unforgettable moments.
            Each <br>image captures the magic and beauty of our meticulously planned events.
        </p>
        <div class="container">
            <div class="row justify-content-center g-4"> 
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 5.jpeg" class="card-img-top" alt="Gallery Image 1">
                        <div class="card-body">
                            <p>Stunning gala setup</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 8.jpeg" class="card-img-top" alt="Gallery Image 2">
                        <div class="card-body">
                            <p >Elegantly decorated tables</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 7.jpeg" class="card-img-top" alt="Gallery Image 3">
                        <div class="card-body">
                            <p >Exquisite arrangements</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 6.jpeg" class="card-img-top" alt="Gallery Image 4">
                        <div class="card-body">
                            <p >Glamorous menu</p>
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



