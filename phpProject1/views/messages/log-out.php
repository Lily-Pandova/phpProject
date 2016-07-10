<?php
if(isset($_SESSION['log_out'])){

    echo '<p class="alert alert-success col-md-6 col-md-offset-3" role="alert">';

    echo $_SESSION['log_out'];
    unset($_SESSION['log_out']);

    echo '</p>';

}