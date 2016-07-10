<?php
session_start();
require "app/connection.php";
require "app/validate-data.php";
require "app/login.php";

$signInBack = "<a href='index.php'>Back</a>";
$signUpBack = "";

include "template/app.php";
echo "<main>";
include "views/headers/main-header.php";
include "views/sign-in/form.php";
echo "</main>";
