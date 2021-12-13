<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon-32x32.png" type="image/png" sizes="32x32">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <header class="topHeader" id="topHeader">
        <div class="headerImage"></div>
        <div class="headerDiv">Ginny'<span class="s">s </span>&nbsp;&nbsp;Craft Room</div>
        <div class="headerImage"></div><br>
        <a href="index.php">Home</a>
        <a href="signUp.php">Sign Up</a>
     </header>
     <main>
         <div class="login-div">
             <form action="includes/login.php" method="POST">
                 <input type="text" name="uid" placeholder="Username/Email...">
                 <input type="password" name="pwd" placeholder="Password...">
                 <button type="submit" name="submit">Log In</button>
             </form>
         </div>
     </main>
     <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect Login Info!</p>";
            }
        }
    ?>
</body>
</html>