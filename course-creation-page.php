<html>
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="course-creation-page1.css">
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
                        <img class="icon home-icon" src="assets/icons/home-icon-dark.png" />
                    </div>
                    <div class="desc-container">
                        <p class="nav-desc home-desc">Home</p>
                    </div>
                </div>
            </a>
            <a href="student-details.php">
                <div class="full-nav dashboard-nav">
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
            <img class="icon courses-icon" src="assets/icons/course-details-icon.png"/>
          </div>
          <div class="desc-container">
            <p class="nav-desc course-details-desc">Course Details</p>
          </div>
        </div>
      </a>
            <a href=#>
                <div class="full-nav create-course-nav" id="create-course-nav">
                    <div class="icon-container">
                        <img class="icon courses-icon" src="assets/icons/course-creation-icon-white.png" />
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
        <div class="entire-signup-section">
            <div class="signup-cards-container">
                <div class="signup-section">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signup-form" onsubmit="return validateForm();">
                        <div class="hdn-section">
                            <div class="error-message "></div>
                            <h1 class="create-course-hdn">Create a new course</h1>
                        </div>
                        <div class="course-id-container">
                            <div class="form-floating mb-3">
                                <input type="text" name="course-id" class="form-control border-0" id="course-id" placeholder="eg UCS 1502" required>
                                <label for="course-id">Course ID</label>
                            </div>
                        </div>
                        <div class="course-title-container">
                            <div class="form-floating mb-3">
                                <input type="text" name="course-title" class="form-control border-0" id="course-title" placeholder="" required>
                                <label for="course-title">Course Title</label>
                            </div>
                        </div>
                        <div class="form-floating">
                                    <select name="department" class="form-select" id="department" aria-label="Floating label select example">
                                        <option selected>Select the Department</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Commerce">Commerce</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                    </select>
                                    <label for="department" id="department">Department</label>
                                </div>
                        <div class="category_semester">
                            <div class="form-group category-group">
                                <div class="form-floating mb-3">
                                    <select name="category" class="form-select" id="category" aria-label="Floating label select example">
                                        <option selected>Select the course category</option>
                                        <option value="Allied Optional (AO)">Allied Optional (AO)</option>
                                        <option value="Allied Required (AR)">Allied Required (AR)</option>
                                        <option value="Non-Major Elective (NME)">Non-Major Electives (NME)</option>
                                        <option value="Major Core (MC)">Major Core (MC)</option>
                                        <option value="Major Elective (ME)">Major Electives (ME)</option>
                                        <option value="Self Study Paper (SS)">Self Study Paper (SS)</option>
                                    </select>
                                    <label for="category" id="category">Category</label>
                                </div>
                            </div>
                            <div class="form-group semester-group">
                                <div class="form-floating">
                                    <select name="semester" class="form-select" id="semester" aria-label="Floating label select example">
                                        <option selected>Select the Semester</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <label for="semester" id="semester">Semester</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating">
                                    <select name="instructor" class="form-select" id="instructor" aria-label="Floating label select example">
                                        <option selected>Assign the Instructor</option>
                                        <?php
                                            // Connect to the database
                                            $ServerName = "localhost";
                                            $db_Username = "root";
                                            $db_Password = "";
                                            $Dbname = "skillup_verse";
                                            $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            // Retrieve selected department from the form
                                            $department = $_POST["department"];

                                            // Fetch instructors whose department matches the selected department
                                            $sql = "SELECT username, full_name FROM instructor_details";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // Output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row["username"] . "'>Prof. " . $row["full_name"] . "</option>";

                                                }
                                            } else {
                                                echo "<option value=''>No instructors found</option>";
                                            }

                                            // Close the database connection
                                            $conn->close();
                                        ?>
                                    </select>
                                    <label for="intructor" id="instructor">Instructor</label>
                                </div>
                        <div class="form-floating">
                            <textarea name="course-description" class="form-control" placeholder="Enter the description of the course" id="course-description" style="height: 100px" required></textarea>
                            <label for="course-description">Course Description</label>
                        </div>


                        <div class="btn-section">
                            <div class="create-btn-container">
                                <a href="#"><input type="submit" name="create-btn" class="create-btn" value="Create"></a>
                            </div>
                            <?php
                            if (isset($_POST['create-btn'])) {
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
                            $course_id = $_POST["course-id"];
                            $course_title = $_POST["course-title"];
                            $category = $_POST["category"];
                            $semester = $_POST["semester"];
                            $description = $_POST["course-description"];
                            $dept = $_POST["department"];
                            $instructor = $_POST["instructor"];

                            // Check if the course ID or course title already exists
                            $check_query = "SELECT * FROM course_details WHERE course_id = '$course_id' OR course_title = '$course_title'";
                            $result = mysqli_query($conn, $check_query);

                            if (mysqli_num_rows($result) > 0) {
                            // Course already exists
                            echo "<div class='err-msg-container'><span class='err-message'>The Course you are trying to create already exists!</span></div>";
                            } else {
                            // Insert new course details
                            $insert_query = "INSERT INTO course_details (course_id, course_title, category, semester, course_description, department, instructor_username)
                            VALUES ('$course_id', '$course_title', '$category', '$semester', '$description', '$department', '$instructor')";

                            if (mysqli_query($conn, $insert_query)) {
                            echo "<div class='err-msg-container'><span class='err-message'>Course Created Successfully!</span></div>";
                            } else {
                            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
                            }
                            }
                            }

                            // Close the database connection
                            mysqli_close($conn);
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

    </div>

    <script src="course-creation-page.js"></script>

</body>
</html>

