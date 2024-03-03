<?php 
    session_abort();
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fund-E | Login</title>
    <link rel="stylesheet" href="styles.scss">
    <link rel="icon" href="assets/img/logo.svg" type="image/x-icon">
</head>
<body>
<main>
    <div class="content">
        <div class="opac"> 
            <div class="logo-and-name">
                <img id="logo" src="assets/img/logo.svg">
                <h1>Fund-e</h1>
            </div>
            <div class="slogan">
                <h1>
                    Track your Expenses <br> 
                    Financial Discipline <br> 
                    Well-defined options <br>
                    Know your goals with <br>
                    <span>Fund-e</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="login-form">
        <form action="action_page.php" method="post">
            <h1>LOGIN</h1>
            <div class="upper-container">
                <input id="uname" type="text" placeholder="Username" name="uname" required><br>
                <input id="psw" type="password" placeholder="Password" name="psw" required><br>
                <button type="submit">LOGIN</button>
            </div>
            <div class="lower-container">
                <a href="#">Sign Up</a>
                <a href="#">Forgot Password</a></span>
            </div>
        </form>
    </div>
</main>
</body>
</html>