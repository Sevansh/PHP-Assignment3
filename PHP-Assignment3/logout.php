<?php
session_start();
session_destroy();
header('Location: index.php');
?>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>