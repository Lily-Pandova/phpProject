<?php

$sql = "SELECT * FROM users";
$results = dbConnection()->query($sql);

if($results->num_rows > 0) { ?>

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>User name</th>
                <th>User email</th>
                <th>User password</th>
                <th>Created at</th>
            </tr>

            <?php foreach($results as $result) {?>
                <tr>
                    <td><?php echo $result['id'];?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['email'];?></td>
                    <td><?php echo $result['password'];?></td>
                    <td><?php echo $result['created_at'];?></td>
                </tr>
            <?php } ?>

        </table>
    </div>
<?php
}

dbConnection()->close();
