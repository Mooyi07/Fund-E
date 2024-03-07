<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fund-E | Register</title>
    <link rel="stylesheet" href="styles.scss">
    <link rel="icon" href="assets/img/logo.svg" type="image/x-icon">
</head>
<body>
<main>
    <nav>
        <img src="../assets/img/logo.svg">
        <h1>Fund-E</h1>   
    </nav>
    <div class="register-form">
        <form action="action.php" method="POST">
            <h1>Sign up with <span>Fund-e</span>!</h1>
            <h2>already have an account? <a>Log in</a></h2>
            <input id="fname" type="text" placeholder="First Name" name="fname" required><br>
            <input id="lname" type="text" placeholder="Last Name" name="lname" required><br>
            <input id="uname" type="text" placeholder="Username" name="uname" required><br>
            <input id="idno" type="text" placeholder="ID Number" name="idno" required><br>
            <input id="email" type="email" placeholder="Email" name="email" required><br>
            <input id="psw" type="password" placeholder="Password" name="psw" required><br>
            <input id="cpsw" type="password" placeholder="Confirm Password" name="cpsw" required><br>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</main>
</body>
<script>

</script>
</html>
