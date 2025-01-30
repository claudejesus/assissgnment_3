<?php
include 'db.php'; // Include the database connection
session_start(); // Start a session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    // Check if the email exists in the database
    $sql = "SELECT * FROM tbl_users WHERE user_email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, now check the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['user_password'])) {
            // Set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_firstname'] = $row['user_firstname'];
            $_SESSION['user_email'] = $row['user_email'];

            echo "Login successful!";
            // Redirect to a protected page or dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }
}
?>

<!-- Login Form -->
<form method="POST" action="login.php">
    <input type="email" name="user_email" placeholder="Email" required><br>
    <input type="password" name="user_password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
