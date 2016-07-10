<?php
session_start();
require "app" .DIRECTORY_SEPARATOR. "connection.php";

if(isset($_SESSION['auth_name'])) {
    $signInBack = "";
    $signUpBack = "<a href='index.php'>Back</a>";

    include "template/app.php";
    echo "<main>";
    include "views/headers/main-header.php";
    echo "</main>";

}
else {
    header("Location: sign-in.php");
}


$emptyErrors = $emptyErrors1 = $emptyErrors2 = $emptyErrors3 ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $email = $_POST["email"];
    $content = $_POST["content"];
    $author = $_POST["author"];
   

    $errors = [
        "The title is required.",
        "The email is required.",
        "The content is required.",
        "The author is required."
    ];
    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $author = $_POST['author'];
       

        if (empty($title)) {
            $emptyErrors = $errors[0];
        }
        if (empty($email)) {
            $emptyErrors1 = $errors[1];
        }
        if (empty($content)) {
            $emptyErrors2 = $errors[2];
        }
        if (empty($author)) {
            $emptyErrors3 = $errors[3];
        }

        if (!empty($title)& !empty($email) &!empty($content) &!empty($author)){
            $sql = <<<TAG
INSERT INTO article (title, email, content,  author) VALUES ('$title', '$email', '$content', '$author')
TAG;
            if (dbConnection()->query($sql) === TRUE) {

                echo "Success";


            } else {
                echo "Something went wrong!";
            }
        }

        if (!isset($errors)) {

            $sql = "SELECT title, email, content, , author FROM article WHERE title='$title', email = '$email', content = '$content', author='$author'";
            $results = dbConnection()->query($sql);

            if($results->num_rows > 0) {

                foreach($results as $result) {
                    echo $results;

                }
                header("Location: index.php");

            }
            else{
                echo "Invalid record";
            }

        }
        }
//    }
}
?>

<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Please enter a title">
            <?php echo $emptyErrors?>

        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Please enter an email">
            <?php echo $emptyErrors1?>
        </div>
        <div class="form-group ">
            <textarea name="content" cols="94" rows="5"></textarea>
            <?php echo $emptyErrors2?>
        </div>
        <div class="form-group">
            <input type="text" name="author" class="form-control" placeholder="Please enter an author">
            <?php echo $emptyErrors3?>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Sign In" class="btn btn-primary">
        </div>

    </form>
</div>

