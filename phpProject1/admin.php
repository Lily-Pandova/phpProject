<?php
    session_start();
    require "app/connection.php";

    if(isset($_SESSION['auth_name'])) {
        $signInBack = "<a href='index.php'>Home page</a>";
        $signUpBack = "<a href='sign-out.php'>Sign Out</a>";

        include "template/app.php";
        echo "<main>";
        include "views/headers/main-header.php";
        include "views/messages/login-success.php";
        include "views/admin/users-table.php";
        echo "</main>";
    }
    else {
        header("Location: sign-in.php");
    }



