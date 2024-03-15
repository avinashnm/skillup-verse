<?php
session_start(); // Ensure session is started

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    // If not logged in, redirect to the login page
    header("Location: student-login-page.php");
    exit(); // Stop script execution after redirection
}

// Get the name from the session
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="student-home-page1.css">
</head>
<body>
    <div class="left-sidebar">
    <div class="back-icon-container">
      <a href="student-login-page.html"><img class="back-icon"src="assets/icons/back-icon.png" /></a>
    </div>
        <div class="logo-container">
            <img class="logo" src="assets/icons/skillup_logo.png" />
            <div class="logo-desc">
                <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
            </div>
        </div>
        <div class="nav-profile-container">
        <div class="nav-container">
            <a href=#>
                <div class="full-nav home-nav" id="hoome-nav">
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
            <a href=#>
                <div class="full-nav courses-nav">
                    <div class="icon-container">
                        <img class="icon courses-icon" src="assets/icons/book-icon.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc course-desc">Courses</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="profile-container">
            <a href=#>
                <div class="full-nav profile-nav">
                    <div class="icon-container">
                        <img class="icon profile-icon" src="assets/icons/profile-icon.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc profile-desc"><?php echo $name; ?></p>
                    </div>
                </div>
            </a>
            </div>
            </div>
        </div>
    <div class="main-section">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/carousal-4.png" class="d-block w-100" alt="...">
                    <img src="assets/images/college-students-img.png" class="carousel-students-img">
                       </div>
                <div class="carousel-item">
                    <img src="assets/images/carousel-5.png" class="d-block w-100" alt="...">
                    <button class='dashboard-btn'>Dashboard</button>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carousal-2.png" class="d-block w-100" alt="...">
                    <button class='explore-courses-btn'>Explore Courses</button>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carousal-3.png" class="d-block w-100" alt="...">
                    <button class='discover-instructors-btn'>Discover Instructors</button>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>   
            <div class="benefits-title-container"><p class="benefits-title">Why Choose Us<p class="question-mark">?</p></p></div>
            <div class="features-section">
                <div class="features-left">
                    <button class="features f1"><img src="assets/icons/teacher-integration-icon.png" class="icons" />Faculty Integration</button>
                    <button class="features f2">
                        <img src="assets/icons/resource-library-icon.png" class="icons" />Rich Resource Library</buttton>
                        <button class="features f3"><img src="assets/icons/learning-icon.png" class="icons" />Personalized Learning</buttton>
                </div>
                <div class="featues-right">
                    <button class="features f4">
                        <img src="assets/icons/performance-analytics-icon.png" class="icons" />Performance Analytics</buttton>
                        <button class="features f5">
                            <img src="assets/icons/supportive-community-icon.png" class="icons" />Supportive Community</buttton>
                            <button class="features f6"><img src="assets/icons/course-specific-icon.png" class="icons" />Course-Specific Tools</buttton>
                </div>
            </div>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="recommended-courses">
            <p class="rc-title">Recommended courses</p>
            <div class="featured-courses-container owl-carousel owl-theme">
                <div class="card h-100 course-card">
                    <img src="assets/images/course-1.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">PHP and MYSQL</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-2.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Web Programming with ASP.NET</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-3.png" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Data Communication and Networks</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-4.jpeg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Cyber Security</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-5.jpeg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Data Structures</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-6.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Web Programming</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-7.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Computer Organization and Architecture</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-8.png" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Mathematics for Computer Science</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-9.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Object Oriented Programming using C++</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>

                <div class="card h-100 course-card">
                    <img src="assets/images/course-10.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title course-title">Operating Systems</h5>
                    </div>
                    <div class="card-footer">
                        <button class="enroll-btn">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
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
                    0: {
                        items: 1,
                        dots: true,
                        loop: true
                    },
                    600: {
                        items: 3,
                        dots: true,
                        loop: true
                    },
                    1000: {
                        items: 1,
                        dots: true,
                        loop: true
                    }
                }
            });
        });
    </script>
</body>
</html>
