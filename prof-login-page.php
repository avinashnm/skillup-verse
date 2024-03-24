<?php
session_start(); // Ensure session is started

$errors = [];

if (isset($_POST['login-btn'])) {

    $ServerName = "localhost";
    $db_Username = "root";
    $db_Password = "";
    $Dbname = "skillup_verse";

    // Create a database connection
    $conn = new mysqli($ServerName, $db_Username, $db_Password, $Dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Get the department number and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the input values match the hard-coded admin credentials
    if ($username === "admin" && $password === "09112003") {
        // Admin credentials are correct, redirect to admin home page
        header("Location: admin-home-page.html");
        exit();
    } else {
        $sql = "SELECT * FROM instructor_details WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Username exists, now check the password
            $row = $result->fetch_assoc();
            $hashed_password = $row["password"];

            if (password_verify($password, $hashed_password)) {
                // Password matches, user is authenticated
                // Retrieve full name from the database
                $full_name = $row["full_name"];

                // Extract first two names
                $names = explode(" ", $full_name); // Split full name into an array of names
                $first_two_names = implode(" ", array_slice($names, 0, 2)); // Take the first two names and join them back into a string

                // Save the first two names in the session
                $_SESSION["name"] = $first_two_names;

                $_SESSION["username"] = $username; // Store username in session
                header("Location: prof-home-page.php"); // Redirect to the prof login page
                exit(); // Make sure to exit after redirecting
            } else {
                // Password is incorrect
                $errors[] = "Incorrect Password, please try again.";
            }
        } else {
            // Username not found
            $errors[] = "Username not found. Please check your username or sign up.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="all-font.css"/>
<link rel="stylesheet" type="text/css" href="prof-login-page.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
</head>
<body class="entire-bg">
<div class="signup-fullsection">
  <div class="intro-section">
    <div class="back-icon-container">
      <a href="landing_page.php"><img class="back-icon"src="assets/icons/back-icon.png" /></a>
    </div>
    <div class="logo-container">
      <img class="logo" src="assets/icons/skillup_logo.png"/>
      <div class="logo-desc">
      <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
    </div>
    </div>
    <div class="intro-desc">
    <h1 class="welcome">Back in the <div class="break">Learning Zone !</div> </h1>
</div>
<div class="features-section">
  <div class="features-left">
  <button class="features f1"><img src="assets/icons/teacher-integration-icon.png" class="icons"/>Faculty Integration</button>
  <button class="features f2"><img src="assets/icons/resource-library-icon.png" class="icons"/>Rich Resource Library</button>
  <button class="features f3"><img src="assets/icons/learning-icon.png" class="icons"/>Personalized Learning</button>
</div>
<div class="featues-right">
  <button class="features f4"><img src="assets/icons/performance-analytics-icon.png" class="icons"/>Performance Analytics</button>
  <button class="features f5"><img src="assets/icons/supportive-community-icon.png" class="icons"/>Supportive Community</button>
  <button class="features f6"><img src="assets/icons/course-specific-icon.png" class="icons"/>Course-Specific Tools</button>
</div>
</div>
<img src="assets/images/students.png" class="students-img">
  </div>
  <div class="entire-signup-section">
    <div class="signup-cards-container">
  <div class="signup-section">
    <div class="signup-card"></div>
    <div class="signup-card"></div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="signup-form" onsubmit="return validateForm();">
        <div class="hdn-section">
        <h1 class="login-hdn">Login</h1>
      </div>
      <div class="choose-section">
        <div class="student-section">
          <a class="student-icon-desc" href="student-login-page.php">
        <img src="assets/icons/student-icon.png" class="login-choose-icon"/>
        <p class="login-icon-desc">STUDENT</p>
      </a>
      </div>
      <div class="professor-section">
        <img src="assets/icons/professor-icon.png" class="login-choose-icon"/>
        <p class="login-icon-desc">PROFESSOR</p>
        <img class="approve-icon" src="assets/icons/approve-icon.png"/>
      </div>
      </div>
      <div class="message-container">
        <p class="message">Greetings, Professor ! </br>Ready to Empower the Next Generation ?</p>
      </div>
        <div class="dept-num-container">
          <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control border-0" id="username" placeholder="eg: 21-ucs-008" required>
            <label for="username">Username</label>
        </div>
          </div>
          <div class="pw_section">
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control" id="password" placeholder="Enter your Password" required>
              <label for="password">Password</label>
          </div>
          </div>
        <div class="btn-section">
          <div class="login-btn-container">
            <input type="submit" name="login-btn" class="login-btn" value="Login">
          </div>
  <div class="signup-link-container">
    <p class="signup-link-message">Not a member ? Let's get started - <a class="signup-link"href="signup_page.html">Sign Up</a> !</p>
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
<script src="prof-login-page.js"></script>
</body>
</html>
