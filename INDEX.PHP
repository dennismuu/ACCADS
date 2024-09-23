<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCAD - African Centre for Capacity Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .hero {
            position: relative;
            height: 100vh;
            background-image: url('img/hero-bg2.jpg');
            background-size: cover;
            background-position: center;
        }

      .hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.89); /* Subtle fade with increased opacity */
    z-index: 1;
}


        .hero .container {
            position: relative;
            z-index: 2;
        }

        h1 {
            font-size: 1.5em; /* Smaller text */
            margin-top: -100px; /* Moved upwards */
        }

        h2 {
            font-size: 2.5em; /* Adjusting size to make it look more balanced */
            font-weight: ;
        }

        p {
            font-size: 1.2em;
        }
    
.hero-title {
    margin-top: -10rem; /* Move the text up by approx. 4 rows */
    color: rgba(255, 255, 255, 0.4); /* Fade the text */
    animation: fadeInUp 1.5s ease-in-out;
    z-index: 2;
    
}

@keyframes fadeInUp {
    0% {
        opacity: 5;
        transform: translateY(10px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

</head>
<body>

<!-- Header -->
<header class="bg-dark text-white p-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <!-- Logo and Company Name -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/logo.png" alt="" width="50" class="me-2"> <!-- Space for logo -->
                <span class="company-name h1 mb-0" style="font-size: 1.5rem;">ACCAD</span> <!-- Company Name -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact us.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Company Profile</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<!-- Hero Section -->
<section class="hero bg-primary text-white text-center d-flex align-items-center" style="height: 100vh; background-image: url('img/hero-bg2.jpg'); background-size: cover; background-position: center; position: relative;">
    <div class="container position-relative">
        <h1 class="hero-title mb-5">Elevate Your Professional Skills with ACCAD</h1>
        
        <h2 class="mb-4">Empowering Africa's</h2>
        <h2 class="mb-5">Future Leaders</h2>
       
        <p class="mb-3">At African Centre for Capacity Development (ACCAD), we provide exceptional.</p>
        <p class="mb-3">Management and Training Consultancy Services to help you achieve your career goals.</p>
        
        <!-- Buttons Section -->
        <div class="d-flex justify-content-center mt-5">
            <a href="#get-started" class="btn-custom btn-primary-custom me-3">Get Started</a>
            <a href="#learn-more" class="btn-custom btn-secondary-custom">Learn More</a>
        </div>
    </div>
</section>

<!-- Add this CSS to your existing CSS file or within a <style> tag in the HTML head -->
<style>
    .btn-custom {
        padding: 15px 30px;
        font-size: 1.2rem;
        border-radius: 50px;
        text-transform: uppercase;
        transition: all 0.3s ease-in-out;
        text-decoration: none; /* Removes underline */
    }

    .btn-primary-custom {
        background-color: #ADD8E6; /* Light blue background */
        color: #212529;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-primary-custom:hover {
        background-color: #87CEEB; /* Slightly darker blue on hover */
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        color: #000;
    }

    .btn-secondary-custom {
        background-color: transparent;
        color: #ADD8E6; /* Light blue text */
        border: 2px solid #ADD8E6; /* Light blue border */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary-custom:hover {
        background-color: #ADD8E6; /* Light blue background on hover */
        color: #000;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    }

    /* Center and align buttons */
    .d-flex {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
</style>



<!-- Training Modules Section -->
<section class="training-modules py-5">
    <div class="container">
        <h2 class="text-center">Training Module</h2>
        <div class="row">
            <div class="col-md-4 mx-auto"> <!-- Center the single module -->
                <div class="card mb-4">
                    <img src="img/14.jpg" class="card-img-top" alt="Module 1">
                    <div class="card-body">
                        <h5 class="card-title">Module Title 1</h5>
                        <p class="card-text">Brief description of the training module.</p>
                       <a href="Galler/ACCAD_TRAINING_MODULE.pdf" class="btn btn-primary" download>Download Module</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our Team Section -->
<section class="our-team py-5">
    <div class="container">
        <h2 class="text-center">Our Team</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/team1.jpg" class="card-img-top" alt="Kelvin Oliver Musibi">
                    <div class="card-body">
                        <h5 class="card-title">Kelvin Oliver Musibi</h5>
                        <p class="card-text">Management Consultant | Capacity Building Expert with over 20 years of experience in designing impactful training programs. Kelvin leverages strategic thinking and problem-solving skills to enhance leadership and operational capabilities, driving organizational growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/team2.jpg" class="card-img-top" alt="Jackline Sarah Chibai">
                    <div class="card-body">
                        <h5 class="card-title">Jackline Sarah Chibai</h5>
                        <p class="card-text">Strategic Management and International Business Professional with over 20 years of experience in Education, Agriculture, Health, Banking, and more. Holds an MBA in Strategic Management and an MA in International Business, with a proven track record in developing strategic plans and fostering collaboration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/team3.jpg" class="card-img-top" alt="Otieno Jack Okoth">
                    <div class="card-body">
                        <h5 class="card-title">Otieno Jack Okoth</h5>
                        <p class="card-text">Accomplished General Manager with over a decade of experience in strategic planning, organizational leadership, and business development across sectors like sports and technology. Jack has a strong track record of driving organizational success, including transforming the Kenya Rugby Union and revitalizing the corporate image of Kampala Coach Limited.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/team4.jpg" class="card-img-top" alt="Faith Sintamei">
                    <div class="card-body">
                        <h5 class="card-title">Faith Sintamei</h5>
                        <p class="card-text">Training Manager at ACCAD, leveraging her Bachelor's degree in Education Arts to create impactful learning experiences. Faith excels in designing training programs that enhance skills and boost team performance, known for her innovative problem-solving and commitment to continuous improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-3">
    <div class="container text-center">
        <p>&copy; 2024 African Centre for Capacity Development. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white me-2">Facebook</a> |
            <a href="#" class="text-white me-2">Twitter</a> |
            <a href="#" class="text-white">WhatsApp</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha
