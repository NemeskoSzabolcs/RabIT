<?php require_once "../controller/AdvertisementController.php"; ?>

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

    <h2>Advertisements</h2>

    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Username</th>
        </tr>
        <?php
            $advertisementController = new AdvertisementController();
            $ads = $advertisementController->listAdvertisements();
        ?>
        
        <?php
            foreach($ads as $ad) {
        ?>
        <tr>
            <td><?php echo $ad->getId(); ?></td>
            <td><?php echo $ad->getTitle(); ?></td>
            <td><?php echo $ad->getUsername(); ?></td>
        <?php } ?>
        </tr>
        
    </table>
    
</body>
</html>