<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Please enter an username">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Please enter an email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Please enter a password">
        </div>
        <div class="form-group">
            <input type="password" name="confirm_password" class="form-control" placeholder="Please repeat passwword">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
        </div>
        <div class="form-group">
            <?php
                if(isset($errors)) {
                    echo '<div class="alert alert-danger" role="alert">
                          <button type="button" class="close" data-dismiss="alert">x</button>';

                    foreach ($errors as $error) {
                        echo $error."<br/>";
                    }

                    echo '</div>';
                }
            ?>
        </div>
    </form>
</div>
