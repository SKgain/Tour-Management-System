<?php
session_start();
// Example: $_SESSION['username'] = "John Doe"; // Set this during login
$username = isset( $_SESSION['user_name'] ) ? htmlspecialchars( $_SESSION['user_name'] ) : 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Panel | Dynamic Tour Group</title>
     <!-- Favicon -->
      <link rel="icon" type="image/png" href="../tour_packages/assets/favicon.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('./images/userBG.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            padding: 20px;
            transition: all 0.3s ease;
            height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .glass-card:hover {
            transform: scale(1.05);
            background-color: rgba(255, 193, 7, 0.8);
            color: black;
        }

        .glass-card i {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .glass-card p {
            font-weight: 600;
            margin: 0;
        }

        .user-header {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2rem;
            border-radius: 1rem;
        }

        .user-header h1 {
            font-size: 2.8rem;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            color: inherit;
        }

        .profile-icon {
            font-size: 40px;
            color: #ffc107;
            margin-right: 10px;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Dynamic Tour Group</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item btn btn-outline-warning mx-2 my-2">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow-1 container py-5">
    <div class="user-header text-center text-white mb-5">
        <i class="fas fa-user-circle profile-icon"></i>
        <h1 class="d-inline text-warning">Welcome, <?php echo $username; ?></h1>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- Shop Item -->
        <div class="col-md-3 col-sm-6">
            <a href="shop.html">
                <div class="glass-card">
                    <i class="fas fa-store"></i>
                    <p>Shop Item</p>
                </div>
            </a>
        </div>

        <!-- Tour Packages -->
        <div class="col-md-3 col-sm-6">
            <a href="tour.html">
                <div class="glass-card">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Tour Packages</p>
                </div>
            </a>
        </div>

        <!-- Personal Info -->
        <div class="col-md-3 col-sm-6">
            <a href="account.html">
                <div class="glass-card">
                    <i class="fas fa-users"></i>
                    <p>Personal Info</p>
                </div>
            </a>
        </div>

        <!-- Booked Tour -->
        <div class="col-md-3 col-sm-6">
            <a href="payments.html">
                <div class="glass-card">
                    <i class="fas fa-credit-card"></i>
                    <p>Booked Tour</p>
                </div>
            </a>
        </div>

        <!-- Cart -->
        <div class="col-md-3 col-sm-6">
            <a href="cart.html">
                <div class="glass-card">
                    <i class="fas fa-shopping-cart"></i>
                    <p>Cart</p>
                </div>
            </a>
        </div>

    </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-white pt-4">
    <div class="text-center py-3 bg-secondary mt-3">
        © 2025 Dynamic Tour Group. All rights reserved.
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
