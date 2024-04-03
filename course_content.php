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

    // Fetch chapters from the database
    $sql = "SELECT chapter_id, chapter_number, chapter_title FROM chapters WHERE course_id = ? ORDER BY chapter_number";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $courseId);
    $stmt->execute();
    $result = $stmt->get_result();
    $chapters = [];
    while ($row = $result->fetch_assoc()) {
        $chapter = $row;
        $materials_sql = "SELECT material_id, material_name FROM uploaded_files WHERE chapter_number = ? AND course_id = ? ORDER BY upload_date";
        $materials_stmt = $conn->prepare($materials_sql);
        $materials_stmt->bind_param("ss", $chapter['chapter_number'], $courseId);
        $materials_stmt->execute();
        $materials_result = $materials_stmt->get_result();
        $materials = [];
        while ($material_row = $materials_result->fetch_assoc()) {
            $materials[] = $material_row;
        }
        $chapter['materials'] = $materials;
        $chapters[] = $chapter;
        $materials_stmt->close();
    }
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
            <div class="chapter-dropdown">
                <?php foreach($chapters as $chapter): ?>
                        <button class="btn chapter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $chapter['chapter_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $chapter['chapter_id']; ?>">
                            <span class="chapter-details-dd">  
                                <span class="dd-chapter-no">Chapter <?php echo $chapter['chapter_number']; ?> </span><br>
                                <span class="dd-chapter-title"><?php echo $chapter['chapter_title']; ?> </span>
                            </span>
                        </button>
                        <div class="collapse" id="collapse<?php echo $chapter['chapter_id']; ?>">
                            <ul class="materials-container">
                                <?php if (!empty($chapter['materials'])): ?>
                                    <?php foreach ($chapter['materials'] as $material): ?>
                                            <li class="material">
                                                <a class="dropdown-item" href="display-material.php?material_id=<?php echo urlencode($material['material_id']); ?>">
                                                    <?php echo $material['material_name']; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                <?php else: ?>
                                    <li class="material">Materials are yet to be uploaded</li>
                                <?php endif; ?>
                            </ul>
                   </div>
                    <?php endforeach; ?>

            </div>
        </div>
        <div class="main-section">
            <div class="course-content-section">
                <div class="course-desc">
                    <div><p class="ms-course-id"><?php echo $courseId; ?></p></div>
                    <div><p class="ms-course-title"><?php echo $courseTitle; ?></p></div>
                </div>
            </div>
<div class="material-content-container">
             </div>        
            </div>
    </div>
</body>
</html>
