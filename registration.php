<?php
include 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $_POST['user_firstname'];
    $lastname = $_POST['user_lastname'];
    $gender = $_POST['user_gender'];
    $email = $_POST['user_email'];
    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT); // Hash the password for security

    // Insert into the database
    $sql = "INSERT INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password)
            VALUES ('$firstname', '$lastname', '$gender', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- Registration Form -->
<form method="POST" action="register.php">
    <input type="text" name="user_firstname" placeholder="First Name" required><br>
    <input type="text" name="user_lastname" placeholder="Last Name" required><br>
    <select name="user_gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br>
    <input type="email" name="user_email" placeholder="Email" required><br>
    <input type="password" name="user_password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>
