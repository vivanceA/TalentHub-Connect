<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      overflow: hidden;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: White;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 1000;
    }

    .logo {
      width: 150px;
      height: auto;
      margin-right: 5px;
    }

    .navigation {
      display: flex;
      align-items: center;
      margin-right: 40px;
    }

    .navigation a {
      color: #07bca3; 
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
    }

    .landing-container {
      position: relative;
      height: 100vh;
      overflow: hidden;
      margin-top: 80px;
    }

    .slide {
      width: 100%;
      height: 100%;
      position: absolute;
      transition: opacity 1s ease-in-out;
      opacity: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .slide.active {
      opacity: 1;
    }

    .video-container {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 100px;
      cursor: pointer;
      color: #07bca3; 
      background: none;
      border: none;
    }

    .arrow.left {
      left: 20px;
    }

    .arrow.right {
      right: 20px;
    }

    .content {
      color: #fff;
      text-align: center;
      z-index: 1;
    }

    .button-container {
      margin-top: 20px;
    }

    .button {
      padding: 10px 20px;
      background-color: #07bca3; 
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <div class="header">
    <img class="logo" src="Images/logo.png" alt="Logo">
    <div class="navigation">
      <a href="Index.php"> Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="ourservices.php">Our Services</a>
      <a href="contactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="landing-container">
    <div class="slide active">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="Images\slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Welcome to TalentHub</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Explore the amazing support and  Services we offer.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='login.php'">Login</button>
          <button class="button" onclick="window.location.href='signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="Images\slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Are you an Employee?</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Join us to showercase your talents and be matched to amazing Employers</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='login.php'">Login</button>
          <button class="button" onclick="window.location.href='signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="Images\slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Are you looking for innovative minds and talents?</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Just us today and get matched with amazing talents people!</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='login.php'">Login</button>
          <button class="button" onclick="window.location.href='signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="Images\slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>You are on the Right platform!</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Just Register and login and Explore!</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='login.php'">Login</button>
          <button class="button" onclick="window.location.href='signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="Images\slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Unleash Your Creativity</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Join our creative community and unleash your full potential.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='login.php'">Login</button>
          <button class="button" onclick="window.location.href='signUp.php'">Register</button>
        </div>
      </div>
    </div>
  </div>

  <button class="arrow left" onclick="prevSlide">&#8249;</button>
  <button class="arrow right" onclick="nextSlide">&#8250;</button>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    function autoChangeSlide() {
      setInterval(() => {
        nextSlide();
      }, 5000); 
    }

    showSlide(currentSlide);
    autoChangeSlide();
  </script>
</body>

</html>
