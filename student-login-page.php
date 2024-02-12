<?php

    if (isset($_POST['login-btn'])) {
      session_start();

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
    $sql = "SELECT * FROM users WHERE deptno = ?";
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
            $_SESSION["deptno"] = $input_username; // Store username in session
            header("Location: home-page.html"); // Redirect to the dashboard or another authenticated page
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // Username not found
        echo "Username not found. Please check your username or sign up.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}

?>
