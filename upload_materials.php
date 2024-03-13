<?php
session_start(); // Ensure session is started

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    // If not logged in, redirect to the login page
    header("Location: landing_page.php");
    exit(); // Stop script execution after redirection
}

// Get the name from the session
$name = $_SESSION['name'];
?>
<html>
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="upload_materials.css">
</head>
<body>
    <div class="left-sidebar">
        <div class="logo-container">
            <img class="logo" src="assets/icons/skillup_logo.png" />
            <div class="logo-desc">
                <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
            </div>
        </div>
        <div class="nav-profile-container">
            <div class="nav-container">
                <a href=#>
                    <div class="full-nav home-nav" id="home-nav">
                        <div class="icon-container">
                            <img class="icon home-icon" src="assets/icons/home-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc home-desc">Home</p>
                        </div>
                    </div>
                </a>
                <a href=#>
                    <div class="full-nav dashboard-nav">
                        <div class="icon-container">
                            <img class="icon dashboard-icon" src="assets/icons/dashboard-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc dashboard-desc">Dashboard</p>
                        </div>
                    </div>
                </a>
                <a href="course-oversight-page.html">
                    <div class="full-nav courses-nav">
                        <div class="icon-container">
                            <img class="icon courses-icon" src="assets/icons/book-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc course-desc">Course Oversight</p>
                        </div>
                    </div>
                </a>
                <a href=#>
                    <div class="full-nav upload-materials-nav" id="home-nav">
                        <div class="icon-container">
                            <img class="icon home-icon" src="assets/icons/home-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc upload-materials-desc">Upload Materials</p>
                        </div>
                    </div>
                </a>
                <a href=#>
            </div>
            <div class="profile-container">
                <a href=#>
                    <div class="full-nav profile-nav">
                        <div class="icon-container">
                            <img class="icon profile-icon" src="assets/icons/profile-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc profile-desc">Prof. <?php echo $name; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="main-section">
        
    </div>
    <div class="right-sidebar">
        

    </div>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 4, // Change as needed
      loop: true, // Enable loop
      center: true,
      dots: true,
      autoplay: true, // Enable autoplay
      autoplayTimeout: 3000, // Set autoplay timeout
      margin: 20, // Adjust margins between items
      responsiveClass: true,
      responsive: {
        0:{
          items:1,
          dots: true,
          loop:true
        },
        600:{
          items:3,
          dots: true,
          loop:true
        },
        1000:{
          items:1,
          dots: true,
          loop:true
        }
      }
    });
  });
    </script>
</body>
</html>
