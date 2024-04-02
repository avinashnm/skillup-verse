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
<html>
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="learning-page.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="left-sidebar">
    <div class="back-icon-container">
      <a href="student-login-page.php"><img class="back-icon"src="assets/icons/back-icon.png" /></a>
    </div>
        <div class="logo-container">
            <img class="logo" src="assets/icons/skillup_logo.png" />
            <div class="logo-desc">
                <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
            </div>
        </div>
        <div class="nav-profile-container">
        <div class="nav-container">
            <a href="student-home-page.php">
                <div class="full-nav home-nav" id="home-nav">
                    <div class="icon-container">
                        <img class="icon home-icon" src="assets/icons/home-icon-dark.png" />
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
                        <img class="icon courses-icon" src="assets/icons/book-icon-white.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc courses-desc">My Learning</p>
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
    </div>
    <div class="main-section">
    <div class="featured-courses-section">
        <h4 class="featured-courses-title">My Learning</h4>
        <div class="fc-tagline-container">
        </div>
        <div class="featured-courses-container">
        <div class="course-row">
              
                <div class="card h-100 course-card" data-course-id="UCS-5501">
                    <img src="assets/images/course-1.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title">PHP and MYSQL</h5>
                        <p class="card-text course-desc">Explore the Backbone of Dynamic Websites:</br> Dive into PHP and MySQL for Robust Web Development. Learn to Build Interactive Web Applications and Dynamic Content Management Systems with this Comprehensive Course.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                        </div>
                </div>
              

                <div class="card h-100 course-card" data-course-id="UCS-5503">
                    <img src="assets/images/course-2.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title double-line-title">Web Programming with ASP.NET</h5>
                        <p class="card-text course-desc">Master ASP.NET for Dynamic Web Development: Dive into Web Programming with ASP.NET to Learn the Foundations of Building Scalable, Secure, and Interactive Web Applications.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

                <div class="card h-100 course-card" data-course-id="UCS-5604">
                    <img src="assets/images/course-3.png" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title double-line-title">Data Communication and Networks</h5>
                        <p class="card-text course-desc">Explore Data Communication and Networks: Delve into the Intricacies of Data Transmission and Networking Protocols, Empowering Your Understanding of Modern Communication Technologies.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

                <div class="card h-100 course-card" data-course-id="UCS-5601">
                    <img src="assets/images/course-4.jpeg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title">Cyber Security</h5>
                        <p class="card-text course-desc">Embark on a Journey into Cybersecurity: Uncover Threats, Defenses, and Strategies in Safeguarding Digital Assets. Equip Yourself with the Tools to Protect, Detect, and Respond to Cyber Threats.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>
        </div>
        <div class="course-row"> 
                <div class="card h-100 course-card" data-course-id="UCS-3503">
                    <img src="assets/images/course-5.jpeg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title">Data Structures</h5>
                        <p class="card-text course-desc">Unlock the World of Data Structures: Delve into Fundamental Concepts and Algorithms, Mastering the Art of Organizing, Storing, and Accessing Data Efficiently for Optimal Problem-Solving.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

                 <div class="card h-100 course-card" data-course-id="UCS-1501">
                    <img src="assets/images/course-6.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title">Web Programming Lab</h5>
                        <p class="card-text course-desc">Empower Your Web Development Journey: Learn the Core Principles, Languages, and Technologies Behind Web Programming, Crafting Dynamic and Interactive Websites and Applications.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

                <div class="card h-100 course-card" data-course-id="UCS-1502">
                    <img src="assets/images/course-7.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title double-line-title">Computer Organization and Architecture</h5>
                        <p class="card-text course-desc">Dive into Computer Organization and Architecture: Explore the Inner Workings of Computing Systems, Understanding Hardware, Memory, and Processing Structures that Shape Modern Computing.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

                <div class="card h-100 course-card" data-course-id="UCA-1301">
                    <img src="assets/images/course-8.png" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title double-line-title">Mathematics for Computer Science</h5>
                        <p class="card-text course-desc">Unlock the Power of Mathematics in Computer Science: Dive into Mathematical Foundations, Algorithms, and Logic, Equipping Yourself with Essential Tools for Solving Complex Computational Challenges.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>
        </div>
            <div class="course-row">
                <div class="card h-100 course-card" data-course-id="UCS-2501">
                    <img src="assets/images/course-9.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title vdouble-line-title">Object Oriented Programming using C++</h5>
                        <p class="card-text course-desc">Master Object-Oriented Programming with C++: Explore Classes, Inheritance, Polymorphism, and Data Abstraction, Unleashing the Power of OOP Concepts in Crafting Efficient and Scalable Solutions.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

                <div class="card h-100 course-card" data-course-id="UCS-2503">
                    <img src="assets/images/course-10.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body course-body">
                        <h5 class="card-title course-title">Operating Systems</h5>
                        <p class="card-text course-desc">Journey into Operating Systems: Explore the Core Concepts, Processes, Memory Management, and File Systems that Power Computer Operations and Facilitate Seamless User Experiences.</p>
                        <img src="assets/icons/play-button.png" class="play-icon" alt="Play Icon">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
   <script>
 // Get all course cards
const courseCards = document.querySelectorAll('.course-card');

// Add click event listener to each course card
courseCards.forEach(card => {
    card.addEventListener('click', () => {
        // Get the ID of the clicked card
        let courseId = card.getAttribute('data-course-id');

        // Replace hyphen with space in the course ID
        courseId = courseId.replace(/-/g, ' ');

        // Encode the modified course ID to ensure it's URL safe
        const encodedCourseId = encodeURIComponent(courseId);

        // Send the selected course ID to the course_content.php page
        window.location.href = `course_content.php?courseId=${encodedCourseId}`;
    });
});


</script>
</body>
</html>
