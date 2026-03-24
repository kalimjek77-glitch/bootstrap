<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Memories 💖</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffe6f0, #fff5f9);
        }

        .navbar {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(10px);
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-weight: 700;
            color: #ff4d88;
        }

        .hero p {
            color: #555;
        }

        .album-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: 0.3s;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .album-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .album-card img {
            height: 250px;
            object-fit: cover;
        }

        .caption {
            padding: 15px;
            text-align: center;
        }

        .caption h5 {
            color: #ff4d88;
            margin-bottom: 5px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #888;
        }

        .heart {
            color: #ff4d88;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-heart-fill heart"></i> Our Album
        </a>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <h1>For You 💕</h1>
    <p>Every moment with you is my favorite memory.</p>
</div>

<!-- Album Section -->
<div class="container pb-5">
    <div class="row g-4">

        <!-- Photo 1 -->
        <div class="col-md-4">
            <div class="card album-card">
                <img src="https://via.placeholder.com/400x300" class="card-img-top">
                <div class="caption">
                    <h5>Our First Date</h5>
                    <p>Best day ever 💖</p>
                </div>
            </div>
        </div>

        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card album-card">
                <img src="https://via.placeholder.com/400x300" class="card-img-top">
                <div class="caption">
                    <h5>Random Moments</h5>
                    <p>You make everything fun ✨</p>
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card album-card">
                <img src="https://via.placeholder.com/400x300" class="card-img-top">
                <div class="caption">
                    <h5>My Favorite Smile</h5>
                    <p>I love you 💕</p>
                </div>
            </div>
        </div>

        <!-- Add more photos here -->
        
    </div>
</div>

<!-- Footer -->
<div class="footer">
    Made with <i class="bi bi-heart-fill heart"></i> just for you
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
