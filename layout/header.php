<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="client.js"></script>
</head>
<body>

<div id="page-header">

    <button class="menu-btn">&equiv;<div id="menu">menu</a></button>
 
    <?php
        if( $user->is_logged_in() ){ echo '<p class="username">' . $_SESSION["username"] . '</p>'; }
    ?>

    <a class="login-btn" href="login.php">login</a>

    <div id="background-container">
        <div class="background-fade" id="image1"></div>
        <div class="background-fade" id="image2"></div>
        <div class="background-fade" id="image3"></div>
        <div class="background-fade" id="image4"></div>
        <img class="efnetmoto" src="images/bluelogo.png" />
    </div>

    <div class="nav">
        <button class="close-btn">&equiv;</button>
        <a href="index.php">Home</a>
        <a href="#">Members</a>
        <a href="#">Rides</a>
        <a href="http://stats.efnetmoto.com">Stats</a>
        <a href="register.php">Register</a>
        <a href="logout.php">Logout</a>
    </div>

</div>
