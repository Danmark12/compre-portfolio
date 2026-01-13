<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dan | Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .left {
      min-height: 90vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, var(--primary-dark), var(--primary-blue));
      color: white;
    }

    .left h1 span {
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

<!-- left Section -->
<section class="left">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 text-md-start text-center mb-4 mb-md-0">
        <p class="text-uppercase small">Hi There! I'm</p>
        <h1 class="display-4 fw-bold">Dan Mark Javier</h1>
        <h4 class="mb-3">UI/UX Designer</h4>
        <p class="lead">
          Welcome to my Portfolio website, enjoy visiting my works<br>
          related to web development and UI/UX design.
        </p>
        <a href="projects.php" class="btn btn-main mt-3">View My Work</a>
      </div>


    </div>
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
