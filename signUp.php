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
        <a href="login.php">Log In</a>
     </header>
     <main>
         <div class="login-div">
             <form action="includes/signup.php" method="post">
                 <input type="text" name="name" placeholder="Full name...">
                 <input type="text" name="email" placeholder="Email...">
                 <input type="text" name="uid" placeholder="Username...">
                 <input type="password" name="pwd" placeholder="Password...">
                 <input type="password" name="pwdrepeat" placeholder="Confirm Password...">
                 <button type="submit" name="submit">Sign Up</button>
            </form>
          </div>
     </main>
    
     <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords do not match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
    
</body>
</html>