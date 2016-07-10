<?php

    if(isset($_POST['submit'])) {

        $useremail = $_POST['email'];
        $userpassword = $_POST['password'];

        if (empty($useremail)) {
            $errors[] = "The email is required.";
        } elseif (!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "The email doesn't exist.";
        } else {
            $email = validateData($useremail);
        }

        if (empty($userpassword)) {
            $errors[] = "The password is required.";
        } elseif (mb_strlen($userpassword) < 4) {
            $errors[] = "The password must be bigger then 4 symbols";
        } else {
            $password = validateData($userpassword);
            $password = md5($password);
        }

        if (!isset($errors)) {

            $sql = "SELECT email, password, name FROM users WHERE email = '$email' and password = '$password'";
            $results = dbConnection()->query($sql);

            if($results->num_rows > 0) {

                foreach($results as $result) {
                    $authName = $result['name'];
                    $_SESSION['auth_name'] = $authName;
                    $_SESSION['login_success'] = $authName." Welcome to the system!!!";
                }
                header("Location: admin.php");

            }
            else{
                $errors[] = "Invalid useremail or password";
            }

        }
    }