<?php
session_start();

if(isset($_SESSION['auth_name'])) {
    $signInBack = "<a href='admin.php'>Admin</a>";
    $signUpBack = "<a href='sign-out.php'>Sign Out</a>";
}
if(!isset($_SESSION['auth_name'])) {
    $signInBack = "<a href='sign-in.php'>Sign In</a>";
    $signUpBack = "<a href='sign-up.php'>Sign Up</a>";
}

include "template/app.php";
include "app" .DIRECTORY_SEPARATOR. "connection.php";
echo "<main>";
include "views/headers/main-header.php";
include "views/messages/success.php";
include "views/messages/log-out.php";
echo "</main>";



$sql="SELECT * FROM article ORDER BY created_at DESC ";

$results=dbConnection()->query($sql);
?>

    <body>
    <main>
        <br><br><br>
        <table class="col-xs-8 table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Email</th>
                <th>Content</th>
                <th>Author</th>
                <th>Created at</th>
            </tr>

<?php

if($results->num_rows > 0) {
    foreach($results as $key) {
        echo
            "<tr>".
            "<td>".$key['id'].        "</td>".
            "<td>".$key['title'].     "</td>".
            "<td>".$key['email'].     "</td>".
            "<td>".$key['content'].   "</td>".
            "<td>".$key['author'].    "</td>".
            "<td>".$key['created_at']."</td>".
            "</tr>";
    }
}
?>
        </table>
        <br><br><br>
    </main>
    </body>
