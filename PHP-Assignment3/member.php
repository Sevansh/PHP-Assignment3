<?php
session_start();
include 'templates/header.php';

// Check if user is not logged in
if(!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit;
}
?>

<!-- HTML content for member.php -->
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<h2>Welcome <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>!</h2>
<p>Your email: <?php echo $_SESSION['email']; ?></p>

<!-- Add extra contents here -->

<?php
include 'templates/footer.php';
?>
