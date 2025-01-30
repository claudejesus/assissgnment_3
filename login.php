<?php
include 'db.php'; // Include the database connection

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
            echo "Login successful!";
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

