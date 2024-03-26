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

    $deptNumber = $_POST["dept-num"];
    $password = $_POST["password"];

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch the hashed password for the provided username
    $sql = "SELECT * FROM student_details WHERE deptno = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $deptNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Username exists, now check the password
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        if (password_verify($password, $hashed_password)) {
            // Password matches, user is authenticated
            $full_name = $row["full_name"];

            // Extract first two names
            $names = explode(" ", $full_name); // Split full name into an array of names
            $first_two_names = implode(" ", array_slice($names, 0, 2)); // Take the first two names and join them back into a string

            // Save the first two names in the session
            $_SESSION["name"] = $first_two_names;
            $_SESSION["deptno"] = $deptNumber; // Store username in session
            header("Location: student-home-page.php"); // Redirect to the dashboard or another authenticated page
            exit(); // Stop script execution after redirection
        } else {
            // Password is incorrect
             $errors[] = "Incorrect password. Please try again.";
        }
    } else {
        // Username not found
        $errors[] = "Department Number not found. Please check it or sign up.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="all-font.css"/>
<link rel="stylesheet" type="text/css" href="student-login-page.css">
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
  <button class="features f2"><img src="assets/icons/resource-library-icon.png" class="icons"/>Rich Resource Library</buttton>
  <button class="features f3"><img src="assets/icons/learning-icon.png" class="icons"/>Personalized Learning</buttton>
</div>
<div class="featues-right">
  <button class="features f4"><img src="assets/icons/performance-analytics-icon.png" class="icons"/>Performance Analytics</buttton>
  <button class="features f5"><img src="assets/icons/supportive-community-icon.png" class="icons"/>Supportive Community</buttton>
  <button class="features f6"><img src="assets/icons/course-specific-icon.png" class="icons"/>Course-Specific Tools</buttton>
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
          <div class="error-message "></div>
        <h1 class="login-hdn">Login</h1>
      </div>
      <div class="choose-section">
        <div class="student-section">
        <img src="assets/icons/student-icon.png" class="login-choose-icon"/>
        <p class="login-icon-desc">STUDENT</p>
        <img class="approve-icon" src="assets/icons/approve-icon.png"/>
      </div>
      <div class="professor-section">
        <a class="prof-icon-desc"href="prof-login-page.php">
        <img src="assets/icons/professor-icon.png" class="login-choose-icon"/>
        <p class="login-icon-desc">PROFESSOR</p>
      </a>
      </div>
      </div>
      <div class="message-container">
        <p class="message">Welcome back, Eager learner ! </br>Let's continue the Journey together</p>
      </div>
        <div class="dept-num-container">
          <div class="form-floating mb-3">
            <input type="text" name="dept-num" class="form-control border-0" id="dept-num" placeholder="eg: 21-ucs-008">
            <label for="dept-num">Department Number</label>
        </div>
          </div>
          <div class="pw_section">
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control" id="password" placeholder="Enter your Password" minlength="8" required>
              <label for="password">Password</label>
          </div>
          </div>
        <div class="btn-section">
          <div class="login-btn-container">
            <a href="student-home-page.html"><input type="submit" name="login-btn" class="login-btn" value="Login"></a>
          </div>
          <div class="signup-link-container">
            <p class="signup-link-message">Not a member ? Let's get started - <a class="signup-link"href="signup_page.php">Sign Up</a> !</p>
          </div>
      </div>
      <div class="error-message">
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
<script src="student-login-page.js"></script>
</body>
</html>
