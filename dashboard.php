<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!-- Protected content on the dashboard -->
<h1>Welcome, <?php echo $_SESSION['user_firstname']; ?>!</h1>
<p>This is a protected page that only logged-in users can access.</p>

<!-- Logout link -->
<a href="logout.php">Logout</a>
