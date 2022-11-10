<?php
require "server.php";
session_start();
require "get-user.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าเเรก</title>
    <?php
    require "./header/header.php"
    ?>
</head>

<body>

    <?php
    echo $_SESSION['id'];
    echo $_SESSION['username'];
    ?>
    <?php
    $all_user = new User();
    $getvalue = $all_user->find_all();
    while ($row = mysqli_fetch_array($getvalue)) { ?>
        <h1>
            <?php
            echo $row['id'], $row['username']
            ?>
        </h1>
    <?php   } ?>

    <?php
    $user_id = new User();
    $get_id = $user_id->find_by_id($_SESSION['id']);
    foreach ($get_id as $row) { ?>
        <p>
            <?php
            echo $row['id']
            ?>
        </p>
        <p><?php echo $row['username'] ?></p>
    <?php   } ?>

</body>

</html>