<?php
if(isset($_SESSION['login_success'])){

    echo '<p class="alert alert-success col-md-6 col-md-offset-3" role="alert">';

    echo $_SESSION['login_success'];

    echo '</p>';

}