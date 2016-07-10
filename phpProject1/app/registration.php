<?php

if(isset($_POST['submit'])) {

    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if(empty($username)){
        $errors[] = "The username required.";
    }
    elseif(!preg_match("/^([a-zA-Z]+|[\p{Cyrillic}]+)$/u", $username)) {
        $errors[] = "The name field should content only letters.";
    }
    else {
        $name = validateData($username);
    }

    if(empty($useremail)){
        $errors[] = "The email is required.";
    }
    elseif(!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "The email doesn't exist.";
    }
    else {
        $email = validateData($useremail);
    }

    if(empty($userpassword)) {
        $errors[] = "The password is required.";
    }
    elseif (mb_strlen($userpassword) < 4) {
        $errors[] = "The password must be bigger then 4 symbols";
    }
    elseif ($userpassword !== $confirmPassword){
        $errors[] = "The passworts must be equal";
    }
    else {
        $password = validateData($userpassword);
        $password = md5($password);
    }

    if(!isset($errors)){

        $sql = <<<TAG
INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')
TAG;

        if(dbConnection()->query($sql) === TRUE){
            $_SESSION['signUp'] = "The registration was successful";
            header("location: index.php");
        }
        else{
            $errors[] = "Something went wrong. The email already exist.";
        }

    }

}