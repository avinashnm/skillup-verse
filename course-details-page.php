<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="course-details-page.css">
</head>
<body>
    <div class="left-sidebar">
    <div class="back-icon-container">
      <a href="prof-login-page.php"><img class="back-icon"src="assets/icons/back-icon.png" /></a>
    </div>
        <div class="logo-container">
            <img class="logo" src="assets/icons/skillup_logo.png" />
            <div class="logo-desc">
                <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
            </div>
        </div>
        <div class="nav-container">
            <a href="admin-home-page.html">
                <div class="full-nav home-nav" id="home-nav">
                    <div class="icon-container">
                        <img class="icon home-icon" src="assets\icons\home-icon-dark.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc home-desc">Home</p>
                    </div>
                </div>
            </a>
            <a href="student-details.php">
                <div class="full-nav student-details-nav" id="student-details-nav">
                    <div class="icon-container">
                        <img class="icon dashboard-icon" src="assets/icons/student-details-icon.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc student-details-desc">Student Details</p>
                    </div>
                </div>
            </a>
            <a href="instructor-details-page.php">
            <div class="full-nav instructor-details-nav">
                <div class="icon-container">
                    <img class="icon courses-icon" src="assets/icons/prof-details-icon.png" />
                </div>
                <div class="desc-container">
                    <p class="nav-desc instructor-details-desc">Instructor Details</p>
                </div>
            </div>
        </a>
            <a href="course-details-page.php">
                <div class="full-nav course-details-nav">
                    <div class="icon-container">
                        <img class="icon courses-icon" src="assets/icons/course-details-icon-white.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc course-details-desc">Course Details</p>
                    </div>
                </div>
            </a>
            <a href="course-creation-page.php">
            <div class="full-nav create-course-nav" id="create-course-nav">
                <div class="icon-container">
                    <img class="icon courses-icon" src="assets/icons/course-creation-icon.png" />
                </div>
                <div class="desc-container">
                    <p class="nav-desc create-course-desc">Create course</p>
                </div>
            </div>
        </a>
        <a href="add-instructor-page.php">
            <div class="full-nav add-instructor-nav">
                <div class="icon-container">
                    <img class="icon courses-icon" src="assets/icons/add-instructor-icon.png" />
                </div>
                <div class="desc-container">
                    <p class="nav-desc add-instructor-desc">Add Instructor</p>
                </div>
            </div>
        </a>
        </div>
    </div>

    <div class="main-section">
        <h2 class="search-std-hdn">Search Courses</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="search-form">
            <div class="search-container">
                <div class="form-floating mb-3 search-input">
                    <input type="text" name="search-query" class="form-control border-0" id="search" placeholder="eg: 21-ucs-008">
                    <label for="search-query">Enter Course Details</label>
                </div>
                <div class="search-btn-container">
                    <button type="submit" name="search-btn" class="search-btn">Search</button>
                </div>
            </div>
        </form>

        <?php
if (isset($_POST['search-btn'])) {
    if (!empty($_POST['search-query'])) {
        $search_query = $_POST['search-query'];
        // Connect to database and retrieve search results
        $ServerName = "localhost";
        $db_Username = "root";
        $db_Password = "";
        $Dbname = "skillup_verse";
        $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT course_details.course_id, course_details.course_title, course_details.department, course_details.category, course_details.semester, instructor_details.full_name 
                FROM course_details 
                INNER JOIN instructor_details ON course_details.instructor_username = instructor_details.username
                WHERE course_details.course_id LIKE '%$search_query%' 
                OR course_details.course_title LIKE '%$search_query%'
                OR course_details.department LIKE '%$search_query%' 
                OR course_details.category LIKE '%$search_query%' 
                OR course_details.semester LIKE '%$search_query%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<div class='students-table'>";
            echo "<table class='table-bordered table-striped'>";
            echo "<tr><th class='header'>Course ID</th><th class='header'>Course title</th><th class='header'>department</th><th class='header'>Category</th><th class='header'>Semester</th><th class='header'>Assigned Instructor</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["course_id"] . "</td>";
                echo "<td class='course-title-column'>" . $row["course_title"] . "</td>";
                echo "<td>" . $row["department"] . "</td>";
                echo "<td class='category-column'>" . $row["category"] . "</td>";
                echo "<td>" . $row["semester"] . "</td>";
                echo "<td>Prof. " . $row["full_name"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "<div class='err-msg-container'><span class='err-message'>No Courses found.</span></div>";
        }
        $conn->close();
    } else {
        echo "<div class='err-msg-container'><span class='err-message'>Please enter the Course Details</span></div>";
    }
}
?>

    </div>


</body>
</html>
