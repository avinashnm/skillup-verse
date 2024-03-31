<?php
session_start(); // Ensure session is started

$errors = [];

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    // If not logged in, redirect to the login page
    header("Location: landing_page.php");
    exit(); // Stop script execution after redirection
}

// Get the name from the session
$name = $_SESSION['name'];
$username = $_SESSION['username']; // Add a semicolon here

if (isset($_POST['add-btn'])) {
    $ServerName = "localhost";
    $db_Username = "root";
    $db_Password = "";
    $Dbname = "skillup_verse";

    // Create a database connection
    $conn = mysqli_connect($ServerName, $db_Username, $db_Password, $Dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $course_id = $_POST["course"];
        $chapter_no = $_POST["chapter-no"];
        $chapter_name = $_POST["chapter-name"];

        // Check if the chapter already exists
       $check_query1 = "SELECT * FROM chapters WHERE chapter_title = ?";
        $stmt = mysqli_prepare($conn, $check_query1);
        mysqli_stmt_bind_param($stmt, "s", $chapter_name);
        mysqli_stmt_execute($stmt);
        $result1 = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result1) > 0) {
            // Chapter already exists
            $errors[] = "The Chapter already exists!";
        }
            else {
            // Insert new chapter details
            $insert_query = "INSERT INTO chapters (course_id, chapter_number, chapter_title)
                             VALUES ('$course_id', '$chapter_no', '$chapter_name')";

            if (mysqli_query($conn, $insert_query)) {
                $errors[] = "Chapter Added Successfully!";
            } else {
                echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<html>
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="add_chapters_page.css">
</head>
<body>
    <div class="left-sidebar">
        <div class="back-icon-container">
            <a href="prof-login-page.php"><img class="back-icon" src="assets/icons/back-icon.png" /></a>
        </div>
        <div class="logo-container">
            <img class="logo" src="assets/icons/skillup_logo.png" />
            <div class="logo-desc">
                <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
            </div>
        </div>
        <div class="nav-profile-container">
            <div class="nav-container">
                <a href="prof-home-page.php">
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
                            <img class="icon courses-icon" src="assets/icons/book-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc course-desc">Course Oversight</p>
                        </div>
                    </div>
                </a>
                <a href=#>
                    <div class="full-nav chapters-nav">
                        <div class="icon-container">
                            <img class="icon chapters-icon" src="assets/icons/book-icon.png" />
                        </div>
                        <div class="desc-container">
                            <p class="nav-desc chapters-desc">Add Chapters</p>
                        </div>
                    </div>
                </a>
                <a href='upload_materials.php'>
                    <div class="full-nav upload-materials-nav" id="home-nav">
                        <div class="icon-container">
                            <img class="icon home-icon" src="assets/icons/file-icon.png" />
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
        <div class="entire-signup-section">
            <div class="signup-cards-container">
                <div class="signup-section">

                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signup-form" onsubmit="return validateForm();" enctype="multipart/form-data">
                        <div class="hdn-section">
                            <div class="error-message "></div>
                            <h1 class="create-course-hdn">Add Chapters</h1>
                        </div>
                        <div class="course-id-container">
                            <div class="form-floating">
                                <select name="course" class="form-select" id="course" aria-label="Floating label select example" required>
                                    <option selected>Select the course</option>
                                    <?php
                                    // Check if the user is logged in as an instructor
                                    if (!isset($_SESSION['username'])) {
                                    // Redirect to the login page or display an error message
                                    header("Location: prof-login-page.php");
                                    exit();
                                    }

                                    // Database connection parameters
                                    $ServerName = "localhost";
                                    $db_Username = "root";
                                    $db_Password = "";
                                    $Dbname = "skillup_verse";
                                    $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);
                                    if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Retrieve instructor's username from session
                                    $instructor_username = $_SESSION['username'];

                                    // Prepare SQL statement to fetch courses assigned to the instructor
                                    $sql = "SELECT course_id, course_title FROM course_details WHERE instructor_username = ?";
                                    $stmt = $conn->prepare($sql);

                                    // Bind parameters and execute the statement
                                    $stmt->bind_param("s", $instructor_username);
                                    $stmt->execute();

                                    // Store the result
                                    $result = $stmt->get_result();

                                    if ($result->num_rows > 0) {
                                    // Output dropdown options
                                    while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <option value="' . $row['course_id'] . '">' . $row['course_id'] . ' - ' . $row['course_title'] . '</option>';
                                    }
                                    } else {
                                    echo '
                                    <option value="" disabled>No courses assigned</option>';
                                    }

                                    // Close the connection
                                    $stmt->close();
                                    $conn->close();
                                    ?>

                                </select>
                                <label for="course" id="course-label">Course</label>
                            </div>
                        </div>

                        <div class="form-group chapter-no-group">
                                <div class="form-floating">
                                    <select name="chapter-no" class="form-select" id="chapter-no" aria-label="Floating label select example" required>
                                        <option selected>Select the Chapter Number</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <label for="chapter-no" id="chapter-no">Chapter Number</label>
                                </div>
                            </div>
                        
                        <div class="chapter-name-container">
                            <div class="form-floating mb-3">
                                <input type="text" name="chapter-name" class="form-control border-0" id="chapter-name" placeholder="eg chapter 1 - HTML basics" required>
                                <label for="chapter-name">Chapter Name</label>
                            </div>

                            <div class="btn-section">
                                <div class="create-btn-container">
                                    <a href="#"><input type="submit" name="add-btn" class="create-btn" value="Add"></a>
                                </div>


                            </div>
                            <div class="error-message ">
                            <?php
                            foreach ($errors as $error) {
                            echo "<div class='err-msg-container'><span class='err-message'>$error</span></div>";
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    <div class="right-sidebar">

    </div>
    <script src="add_chapters_page.js"></script>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>


</body>
</html>
