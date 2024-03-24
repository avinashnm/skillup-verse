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
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="learnings.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="left-sidebar">
    <div class="back-icon-container">
      <a href="../learning-page.php"><img class="back-icon" src="../assets/icons/back-icon.png"></a>
    </div>
        <div class="logo-container">
            <img class="logo" src="../assets/icons/skillup_logo.png" />
            <div class="logo-desc">
                <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
            </div>
        </div>
        <div class="nav-profile-container">
        <div class="nav-container">
            <a href="../student-home-page.php">
                <div class="full-nav home-nav" id="home-nav">
                    <div class="icon-container">
                        <img class="icon home-icon" src="../assets/icons/home-icon-dark.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc home-desc">Home</p>
                    </div>
                </div>
            </a>
            <a href=#>
                <div class="full-nav dashboard-nav">
                    <div class="icon-container">
                        <img class="icon dashboard-icon" src="../assets/icons/dashboard-icon.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc dashboard-desc">Dashboard</p>
                    </div>
                </div>
            </a>
            <a href=#>
                <div class="full-nav courses-nav">
                    <div class="icon-container">
                        <img class="icon courses-icon" src="../assets/icons/book-icon-white.png" />
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
                        <img class="icon profile-icon" src="../assets/icons/profile-icon.png" />
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
</div>
    </body>
</html>