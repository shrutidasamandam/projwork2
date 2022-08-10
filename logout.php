<?php
    session_start();
    unset($_SESSION['logggedIn']);
    session_destroy();
    header('Location: index.php');
    exit();
?>
