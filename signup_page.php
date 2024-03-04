<?php
session_start(); 
if (isset($_POST['signup-btn'])) {
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
        $full_name = $_POST["full_name"];
        $deptno = $_POST["dept-num"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Check if passwords match
        if ($password != $confirm_password) {
            echo "Password and Confirm Password do not match.";
        } else {
            // Check if dept or email already exists in the database
            $check_query = "SELECT * FROM student_details WHERE deptno='$deptno' OR email='$email'";
            $result = mysqli_query($conn, $check_query);

            if (mysqli_num_rows($result) > 0) {
                echo "Department number or email already exists. Please choose a different department number or email.";
            } else {
                // Hash the password for security
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                // Insert user data into the database
                $sql = "INSERT INTO student_details (full_name, deptno, email, password)
                        VALUES ('$full_name', '$deptno', '$email', '$hashed_password')";

                if (mysqli_query($conn, $sql)) {
                     // Use the value from $_POST["full_name"] instead of $row["full_name"]
                    $student_name = $full_name;

                    // Extract first two names
                    $names = explode(" ", $student_name); // Split full name into an array of names
                    $first_two_names = implode(" ", array_slice($names, 0, 2)); // Take the first two names and join them back into a string

                    // Save the first two names in the session
                    $_SESSION["name"] = $first_two_names;

                    // Redirect to home page
                    header("Location: student-home-page.php");
                    exit(); // stop further execution
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
