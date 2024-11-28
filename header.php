<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style>
    /* Basic styling */
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 16px;
    }
    .blog-item {
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
    }
    .blog-item img {
      max-width: 100%;
      border-radius: 8px;
    }
    .blog-item h3 {
      margin: 10px 0;
    }
  </style>
</head>
<body>
<header>
  <div class="header-container">
    <!-- Logo and Navigation Links -->
    <div class="logo-nav">
      <div class="logo">
        <a href="index.html"><img src="./images/logo.png" alt="Site Logo"></a>
      </div>
      <nav>
        <ul class="nav-links">
          <li><a href="login.html" class="nav-login">Login</a></li>
          <li><a href="contact.html" class="nav-contact">Contact</a></li>
          <li><a href="about.html" class="nav-about">About</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>