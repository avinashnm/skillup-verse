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

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "skillup_verse";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if course ID is provided in the URL parameters
if(isset($_GET['courseId'])) {
    // Sanitize the received courseId
    $courseId = filter_var($_GET['courseId'], FILTER_SANITIZE_STRING);

    // Fetch course title from the database based on the course ID
    $sql = "SELECT course_title FROM course_details WHERE course_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $courseId);
    $stmt->execute();
    $stmt->bind_result($courseTitle);
    $stmt->fetch();
    $stmt->close();
} else {
    // If course ID is not provided in URL parameters, redirect to learning page
    header("Location: learning_page.php");
    exit();
}
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="course_content.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="nav-bar-container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="logo-container">
                    <img class="logo" src="assets/icons/skillup_logo.png" />
                    <div class="logo-desc">
                        <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-underline navigation-bar">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="student-home-page.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">My Learning</a>
                        </li>
                        <li class="nav-item">
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
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="content-container">
        <div class="left-sidebar">
            <div class="back-icon-container">
                <a href="learning-page.php"><img class="back-icon" src="assets/icons/back-icon.png"></a>
                <span class="content-hdn">CONTENTS</span>
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

            </div>
            
        </div>
        <div class="course-content-section">
                <h2>Course Content</h2>
                <p>Course ID: <?php echo $courseId; ?></p>
                <p>Course Title: <?php echo $courseTitle; ?></p>
            </div>
</body>
</html>