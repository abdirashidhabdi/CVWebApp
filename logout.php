<?php
    session_start();
    session_destroy(); //destroy the session
    header('Location: loginForm.php'); //redirect to the login page
?>