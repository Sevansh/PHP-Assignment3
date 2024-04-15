<?php
session_start();
include 'templates/header.php';

// Contact Form Handling
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Send email functionality
    // Display success message
}
?>

<!-- HTML content for contact.php -->
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<h2>Contact Us</h2>
<p>Please fill in the form below to contact us.</p>

<!-- Contact Form -->
<form method="post">
    <label>Your Full Name:</label>
    <input type="text" name="name" required>

    <label>Your Email:</label>
    <input type="email" name="email" required>

    <label>Your Message:</label>
    <textarea name="message" required></textarea>

    <input type="submit" value="Send Message">
</form>

<?php
include 'templates/footer.php';
?>
