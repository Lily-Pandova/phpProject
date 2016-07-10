<?php
    if(isset($_SESSION['signUp'])){

        echo '<p class="alert alert-success col-md-6 col-md-offset-3" role="alert">';

        echo $_SESSION['signUp'];
        unset($_SESSION['signUp']);

        echo '</p>';

    }

