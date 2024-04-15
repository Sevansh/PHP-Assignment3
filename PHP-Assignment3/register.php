<?php
session_start();
include 'templates/header.php';

// Registration Form Handling
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validation and database checks
    // If validation succeeds
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    header('Location: member.php');
}
?>

<!-- HTML content for register.php -->
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<h2>Registration</h2>
<p>Please register to continue.</p>

<!-- Registration Form -->
<form method="post">
    <label>First Name:</label>
    <input type="text" name="first_name" required>

    <label>Last Name:</label>
    <input type="text" name="last_name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <input type="submit" value="Register">
</form>

<?php
include 'templates/footer.php';
?>
