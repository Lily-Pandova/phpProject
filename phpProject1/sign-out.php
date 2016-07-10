<?php
    session_start();

    if(isset($_SESSION['auth_name'])) {
        session_destroy();
        session_start();
        $_SESSION['log_out'] = "You Sign Out and destroy previous session";
        header("location: index.php");
    }