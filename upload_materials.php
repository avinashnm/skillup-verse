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
$username = $_SESSION['username']
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
    <div class="back-icon-container">
      <a href="prof-login-page.php"><img class="back-icon"src="assets/icons/back-icon.png" /></a>
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
            <a href="add_chapters_page.php">
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
                            <h1 class="create-course-hdn">Upload Material</h1>
                        </div>
                        <div class="course-id-container">
                            <div class="form-floating">
                                    <select name="course" class="form-select" id="course" aria-label="Floating label select example">
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
                                            echo '<option value="' . $row['course_id'] . '">' . $row['course_id'] . ' - ' . $row['course_title'] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="" disabled>No courses available</option>';
                                    }

                                    // Close the connection
                                    $stmt->close();
                                    $conn->close();
                                    ?>

                                    </select>
                                    <label for="course" id="course">Course</label>
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
                            <div class="form-floating material-upload">

                                <div class="input-group mb-3">
                              <input type="file" class="form-control" id="material" name="files[]">
  
                            </div>
                            </div>
                            <div class="file-name-container">
                            <div class="form-floating mb-3">
                                <input type="text" name="file-name" class="form-control border-0" id="file-name" placeholder="eg chapter 1 - HTML basics" required>
                                <label for="file-name">Material Name</label>
                            </div>

                        <div class="btn-section">
                            <div class="create-btn-container">
                                <a href="#"><input type="submit" name="upload-btn" class="create-btn" value="Upload"></a>
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
           <?php
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["upload-btn"])) {
                // Define the directory where uploaded files will be stored
                $uploadDir = "materials/";

                // Get the course ID and instructor username from the form
                $courseID = $_POST["course"];
                $instructorUsername = $username;
                $chapterNo = $_POST["chapter-no"];

                // Create the directory if it doesn't exist
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Flag to check if any file upload failed
                $uploadSuccess = true;

                // Loop through each uploaded file
                foreach ($_FILES["files"]["name"] as $key => $filename) {
                    // Get the custom file name entered by the instructor
                    $customFilename = $_POST["file-name"];
                    
                    // Generate a unique filename for each file
                    $uniqueFilename = $courseID . '_' . $chapterNo. '_' .$customFilename;

                    // Set the destination path for the file
                    $targetPath = $uploadDir . $uniqueFilename;

                    // Move the uploaded file to the destination directory
                    if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetPath)) {
                        // File uploaded successfully, insert the record into the database
                        $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Prepare SQL statement to insert the record into the database
                        $sql = "INSERT INTO uploaded_files (material_id, file_name, instructor_username, chapter_number, course_id) VALUES (?, ?, ?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sssss", $uniqueFilename, $filename, $instructorUsername, $chapterNo, $courseID);

                        // Execute the SQL statement
                        if ($stmt->execute()) {
                            // File uploaded successfully
                        } else {
                            // Error occurred during database insertion
                            $uploadSuccess = false;
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        // Close the database connection
                        $conn->close();
                    } else {
                        // Error occurred during file upload
                        $uploadSuccess = false;
                        $errors[] = "Error uploading file!";
                    }
                }

                // Check if all file uploads were successful
                if ($uploadSuccess) {
                   $errors[] = "All files uploaded successfully!";
                }
            }
            ?>

        </div>
    </div>
    <div class="right-sidebar">
        
    </div>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    
</body>
</html>
