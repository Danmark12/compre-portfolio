<?php /* index.php - Home Page */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dan | Home</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-dark: #0a1a33;
      --primary-blue: #1f3c88;
      --light-bg: #ffffff;
      --accent: #e8f0ff;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
      color: #333;
    }

    .navbar {
      background-color: var(--primary-dark);
    }

    .hero {
      min-height: 90vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, var(--primary-dark), var(--primary-blue));
      color: white;
    }

    .hero h1 span {
      color: #c7d2fe;
    }

    .btn-main {
      background-color: white;
      color: var(--primary-dark);
      border-radius: 30px;
      padding: 10px 30px;
      font-weight: 500;
    }

    .btn-main:hover {
      background-color: var(--accent);
    }

    footer {
      background-color: var(--primary-dark);
      color: white;
      padding: 15px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Dan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container text-center">
    <h1 class="display-4">Hi, I'm <span>Dan</span></h1>
    <p class="lead">BSIT Student | Web Developer</p>
    <a href="projects.php" class="btn btn-main mt-4">View Projects</a>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <p class="mb-0">&copy; 2026 Dan Portfolio</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
