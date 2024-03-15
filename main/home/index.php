<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fund-E | Login</title>
    <link rel="stylesheet" href="styles.scss">
    <link rel="icon" href="../../assets/img/logo.svg" type="image/x-icon">
</head>
<body>
<nav>
    <div class="tabs">
        <img src="../../assets/img/logo.svg">
        <a href="home">HOME</a>
        <a href="transaction">TRANSACTION</a>
        <a href="profile">PROFILE</a>
        <a href="about">ABOUT</a>
    </div>
    <img id="gear" src="../../assets/img/settings.png">
</nav>
<main>
    <div class="top-content">
        <div class="profile">
            <img src="">
            <div class="details">
                <h1>Welcome, <?php echo "Ohma" ?>!</h1>
                <h1><?php echo "#OHMA220534" ?></h1>
            </div>
        </div>
        <div class="balance">
            <h1>CURRENT BALANCE:</h1>
            <h2><?php 
                echo "₱ ";
                echo "22, 053.04"; 
            ?></h2>
            <div class="SnR">
                <a>SEND</a>
                <a>REQUEST</a>
            <div>
        </div>
    </div>
    <div class="bot-content">
        <div class="notifications">
        </div>
        <div class="services">
        </div>
    </div> 
</main>
</body>
</html>
