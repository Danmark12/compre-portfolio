<?php /* assets/about.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dan | About</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-dark: #0a1a33;
      --primary-blue: #1f3c88;
      --accent: #e8f0ff;
      --text-main: #e6e9f0;
      --text-muted: #b9c7ff;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--primary-dark), var(--primary-blue));
      color: var(--text-main);
    }

    .navbar {
      background-color: var(--primary-dark);
    }

    .about-container {
      padding: 100px 20px;
      text-align: center;
    }

    .about-container h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .about-container p {
      max-width: 600px;
      margin: 0 auto 20px auto;
      line-height: 1.7;
      color: #b9c7ff;
    }

    .skills-canvas {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 20px;
    }

    .skill-badge {
      background: rgba(255, 255, 255, 0.15);
      color: #fff;
      padding: 10px 20px;
      border-radius: 30px;
      margin: 5px;
      display: inline-block;
      font-size: 0.95rem;
    }

    footer {
      background-color: var(--primary-dark);
      color: #aaa;
      padding: 15px 0;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="../index.php">Dan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- About Section -->
<section class="about-container">
  <h1>About Me</h1>
  <p>Hello! I'm <strong>Dan Mark Javier</strong>, a BSIT student and aspiring web developer UI/UX Designer. I enjoy creating clean, user-centered digital experiences and designing intuitive web interfaces.</p>
  <p>I focus on web development, responsive design, and user experience improvements. I also explore modern tools and techniques to enhance my designs and skills.</p>

  <h3>Skills</h3>
  <div class="skills-canvas">
    <span class="skill-badge">HTML</span>
    <span class="skill-badge">CSS</span>
    <span class="skill-badge">JavaScript</span>
    <span class="skill-badge">Bootstrap</span>
    <span class="skill-badge">UI/UX Design</span>
    <span class="skill-badge">Figma</span>
    <span class="skill-badge">canva</span>

  </div>
</section>

<!-- Footer -->
<footer>
  &copy; 2026 Dan Portfolio
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
