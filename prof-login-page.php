<?php
session_start();

if (isset($_POST['login-btn'])) {
    // Get the department number and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the input values match the hard-coded admin credentials
    if ($username === "admin" && $password === "09112003") {
        // Admin credentials are correct, redirect to admin home page
        header("Location: admin-home-page.html");
        exit();
    } else {
        // Regular user authentication logic
        // Your existing code for checking against the database or other user authentication logic
    }
}
?>
