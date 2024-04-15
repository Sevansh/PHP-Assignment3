<?php
session_start();
include 'templates/header.php';

// Check if user is logged in
if(isset($_SESSION['email'])) {
    header('Location: member.php');
    exit;
}

// Login Form Handling
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validation and database checks
    // If validation succeeds
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['first_name'] = $user['first_name']; // Assuming $user is fetched from DB
    $_SESSION['last_name'] = $user['last_name'];
    header('Location: member.php');
}
?>

<!-- HTML content for index.php -->
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<h2>Welcome to our website!</h2>
<p>Please login to continue.</p>

<!-- Login Form -->
<form method="post" >
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Password:</label>
    <input type="password" name="password" required>
    
    <input type="submit" value="Login">
</form>

<?php
include 'templates/footer.php';
?>
