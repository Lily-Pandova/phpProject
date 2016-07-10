<?php

function dbConnection() {

    $connect = mysqli_connect("localhost", "root", "", "bulitfactory_php");
    $connect->set_charset('utf8');
    return $connect;

}

