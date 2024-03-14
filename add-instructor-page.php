<html>
<head>
    <link rel="stylesheet" href="all-font.css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="add-instructor-page.css">
</head>
<body>
    <div class="left-sidebar">
    <div class="back-icon-container">
      <a href="prof-login-page.html"><img class="back-icon"src="assets/icons/back-icon.png" /></a>
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
            <a href=#>
            <div class="full-nav add-instructor-nav">
                <div class="icon-container">
                    <img class="icon courses-icon" src="assets/icons/add-instructor-icon-white.png" />
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
                            <h1 class="create-course-hdn">Add a new Instructor</h1>
                        </div>
                       <div class="full-name-container">
                            <div class="form-floating mb-3">
                                <input type="text" name="full-name" class="form-control border-0" id="full-name" placeholder="Enter professor's full name'" required>
                                <label for="full-name">Full Name</label>
                            </div>
                        </div>
                        <div class="user-name-container">
                            <div class="form-floating mb-3">
                                <input type="text" name="user-name" class="form-control border-0" id="user-name" placeholder="" required>
                                <label for="user-name">Username</label>
                            </div>
                        </div>
                        <div class="shift_department">
                            <div class="form-group shift-group">
                                <div class="form-floating">
                                    <select name="shift" class="form-select" id="shift" aria-label="Floating label select example">
                                        <option selected>Select the Shift</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                    </select>
                                    <label for="shift" id="shift">Shift</label>
                                </div>
                            </div>
                            <div class="form-group department-group">
                                <div class="form-floating mb-3">
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
                            </div>
                        </div>
                        <div class="pw_section">
                            <div class="form-floating mb-3">
                              <input name="password" type="password" class="form-control" id="password" placeholder="Enter your Password" minlength="8" required>
                              <label for="password">Password</label>
                          </div>
                      </div>


                        <div class="btn-section">
                            <div class="add-btn-container">
                                <a href="#"><input type="submit" name="add-btn" class="add-btn" value="Add"></a>
                            </div>
                            </form>
                            <?php
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
                                            $fullname = $_POST["full-name"];
                                            $username = $_POST["user-name"];
                                            $shift = $_POST["shift"];
                                            $department = $_POST["department"];
                                            $password = $_POST["password"];

                                            // Hash the password
                                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                                            // Check if the username already exists
                                            $check_query1 = "SELECT * FROM instructor_details WHERE username = '$username'";
                                            $result1 = mysqli_query($conn, $check_query1);

                                            $check_query2 = "SELECT * FROM instructor_details WHERE full_name = '$fullname'";
                                            $result2 = mysqli_query($conn, $check_query2);

                                            if (mysqli_num_rows($result2) > 0) {
                                                // professor already exists
                                                echo "<div class='err-msg-container'><span class='err-message'>The Instructor with the given name already exists!</span></div>";
                                            }
                                            else if (mysqli_num_rows($result1) > 0) {
                                                // Username already exists
                                                echo "<div class='err-msg-container'><span class='err-message'>The username already exists! Please choose a different one.</span></div>";
                                            } else {
                                                // Insert new instructor details
                                                $insert_query = "INSERT INTO instructor_details (full_name, username, shift, department, password)
                                                                 VALUES ('$fullname', '$username', '$shift', '$department', '$hashed_password')";

                                                if (mysqli_query($conn, $insert_query)) {
                                                    echo "<div class='err-msg-container'><span class='err-message'>Instructor added successfully!</span></div>";
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

    <script src="add-instructor-page.js"></script>

</body>
</html>

