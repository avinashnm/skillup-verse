<?php


if (isset($_POST['login-btn'])) {
    session_start();

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

            $_SESSION["username"] = $input_username; // Store username in session
            header("Location: prof-home-page.php"); // Redirect to the prof login page
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // Username not found
        echo "Username not found. Please check your username or sign up.";
    }
    }
}
?>
