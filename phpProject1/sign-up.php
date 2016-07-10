<?php
session_start();

require "app/connection.php";
require "app/validate-data.php";
require "app/registration.php";

$signUpBack = "<a href='index.php'>Back</a>";
$signInBack = "";

include "template/app.php";
echo "<main>";
    include "views/headers/main-header.php";
    include "views/sign-up/form.php";
echo "</main>";
