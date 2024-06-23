<?php require_once "../controller/UserController.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nemeskó Szabolcs">
    <meta name="description" content="PHP web application for RabIT Solutions">
    <link rel="stylesheet" href="../minimal_style.css">
    <title>PHP web application for RabIT Solutions</title>
</head>
<body>

    <div id="navbar">
        <a href="./index.php">Home</a>
        <a href="./user_list.php">Users</a>
        <a href="./advertisement_list.php">Advertisements</a>
    </div>

    <h2>Users</h2>
    
    <div id="div-list">
        <ul>
            <?php
                $userController = new UserController();
                $users = $userController->listUsers();
            ?>

            <?php foreach($users as $user) { ?>
                <li><?php echo $user->getName(); ?></li>
            <?php } ?>
        </ul>
    </div>
    
    
</body>
</html>