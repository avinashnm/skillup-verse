<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
  <script src="Bootstrap/JS/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="student-details1.css">
</head>
<body>
  <div class="left-sidebar">
    <div class="logo-container">
      <img class="logo" src="assets/icons/skillup_logo.png"/>
      <div class="logo-desc">
      <h3 class="skillup">SKILLUP</h3> <h3 class="verse">VERSE</h3>
    </div>
  </div>
    <div class="nav-container">
      <a href="admin-home-page.html">
        <div class="full-nav home-nav" id="home-nav">
          <div class="icon-container">
            <img class="icon home-icon" src="assets/icons/home-icon.png"/>
          </div>
          <div class="desc-container">
            <p class="nav-desc home-desc">Home</p>
          </div>
        </div>
      </a>
      <a href="student-details.php">
        <div class="full-nav student-details-nav"  id="student-details-nav">
          <div class="icon-container">
            <img class="icon dashboard-icon" src="assets/icons/dashboard-icon.png"/>
          </div>
          <div class="desc-container">
            <p class="nav-desc student-details-desc">Student Details</p>
          </div>
        </div>
      </a>
      <a href="#">
        <div class="full-nav courses-nav">
          <div class="icon-container">
            <img class="icon courses-icon" src="assets/icons/book-icon.png"/>
          </div>
          <div class="desc-container">
            <p class="nav-desc course-desc">Create course</p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="main-section">
    <h2 class="search-std-hdn">Search Students</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="search-form">
      <div class="search-container">
        <div class="form-floating mb-3 search-input">
          <input type="text" name="search-query" class="form-control border-0" id="search" placeholder="eg: 21-ucs-008">
          <label for="search-query">Enter Student ID or Name</label>
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
        $sql = "SELECT * FROM student_details WHERE deptno LIKE '%$search_query%' OR full_name LIKE '%$search_query%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo"<div class='students-table'>";
          echo "<table class='table-bordered table-striped'>";
          echo "<tr><th class='header'>Department Number</th><th class='header'>Name</th><th class='header'>Email</th></tr>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["deptno"] . "</td>";
            echo "<td>" . $row["full_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
          echo"</div>";
        } else {
          echo "<div class='err-msg-container'><span class='err-message'>No results found.</span></div>";
        }
        $conn->close();
      } else {
        echo "<div class='err-msg-container'><span class='err-message'>Please enter the Student's ID or Name</span></div>";
      }
    }
    ?>
  </div>

  <div class="right-sidebar">
    <!-- Your right sidebar content -->
  </div>

  <script src="jquery/jquery-3.7.1.min.js"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script>
  <script>
    // Your JavaScript code
  </script>
</body>
</html>
