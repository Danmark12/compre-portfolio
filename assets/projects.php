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
      margin: 0;
    }

    .navbar { background-color: var(--primary-dark); }

    .projects-header { text-align: center; padding: 80px 20px 40px; }
    .projects-header h1 { font-size: 2.5rem; margin-bottom: 10px; }
    .projects-header p { color: var(--text-muted); font-size: 1rem; }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      padding: 20px 50px 60px;
    }

    .project-card {
      background: rgba(255,255,255,0.05);
      border-radius: 20px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 320px; /* smaller height */
    }

    .project-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.5);
    }

    .project-card img {
      width: 100%;
      height: 150px; /* smaller image height */
      object-fit: cover;
      transition: transform 0.3s;
    }

    .project-card:hover img { transform: scale(1.05); }

    .project-info {
      padding: 15px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex-grow: 1;
    }

    .project-info h5 { color: var(--accent); margin-bottom: 6px; font-size: 1rem; }
    .project-info p { color: var(--text-muted); font-size: 0.85rem; margin-bottom: 10px; flex-grow: 1; }

    .btn-project {
      background-color: var(--accent);
      color: var(--primary-dark);
      font-weight: 500;
      border-radius: 20px;
      padding: 6px 15px;
      text-decoration: none;
      text-align: center;
      font-size: 0.85rem;
      transition: background 0.3s;
    }

    .btn-project:hover { background-color: #fff; color: var(--primary-dark); }

    footer { background-color: var(--primary-dark); color: #aaa; padding: 15px 0; text-align: center; }

    @media(max-width: 576px) {
      .projects-grid { grid-template-columns: 1fr; padding: 20px; }
      .project-card { height: auto; }
      .project-card img { height: 180px; }
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
