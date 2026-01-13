<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dan | Projects</title>

  <!-- Bootstrap CSS -->
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

    .navbar { background-color: var(--primary-dark); }

    .projects-header { text-align: center; padding: 100px 20px 50px; }
    .projects-header h1 { font-size: 3rem; margin-bottom: 15px; }
    .projects-header p { color: var(--text-muted); font-size: 1.1rem; }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
      padding: 20px 50px 80px;
    }

    .project-card {
      background: rgba(255,255,255,0.05);
      border-radius: 25px;
      overflow: hidden;
      position: relative;
      transition: transform 0.4s, box-shadow 0.4s;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 30px 60px rgba(0,0,0,0.6);
    }

    .project-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.4s;
    }

    .project-card:hover img { transform: scale(1.05); }

    .project-info {
      padding: 20px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .project-info h5 { color: var(--accent); margin-bottom: 10px; font-size: 1.2rem; }
    .project-info p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 15px; flex-grow: 1; }

    .btn-project {
      background-color: var(--accent);
      color: var(--primary-dark);
      font-weight: 500;
      border-radius: 25px;
      padding: 8px 20px;
      text-decoration: none;
      transition: background 0.3s;
      text-align: center;
    }

    .btn-project:hover { background-color: #fff; color: var(--primary-dark); }

    footer { background-color: var(--primary-dark); color: #aaa; padding: 15px 0; text-align: center; }

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
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Projects Header -->
<section class="projects-header">
  <h1>My Projects</h1>
  <p>Here are some of my featured projects in web development and UI/UX design.</p>
</section>

<!-- Projects Grid -->
<section class="projects-grid">
  <!-- Carecentral -->
  <div class="project-card">
    <img src="../img/carecentral.png" alt="Carecentral Project">
    <div class="project-info">
      <h5>Carecentral</h5>
      <p>An integrated practice management system for small clinics to manage patients, appointments, billing, and records efficiently.</p>
      <a href="#" class="btn-project">View Project</a>
    </div>
  </div>

  <!-- NutriMap -->
  <div class="project-card">
    <img src="../img/nutrimap.png" alt="NutriMap Project">
    <div class="project-info">
      <h5>NutriMap</h5>
      <p>A web-based health and nutrition data management system with GIS integration for city nutrition offices to track reports and barangay data.</p>
      <a href="https://nutrimap.42web.io" target="_blank" class="btn-project">View Project</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  &copy; 2026 Dan Portfolio
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
