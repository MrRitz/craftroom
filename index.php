<?php
    session_start();
?>

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
    <title>Ginny's CraftRoom</title>
</head>
<body>
   <header class="topHeader" id="topHeader">
       <div class="headerImage"></div>
       <div class="headerDiv">Ginny'<span class="s">s </span>&nbsp;&nbsp;Craft Room</div>
       <div class="headerImage"></div><br>
       <?php
       if (isset($_SESSION["useruid"])) {
        echo "<a href='profile.php'>Profile Page</a>";
        echo "<a href='includes/logout.inc.php'>Log Out</a>";
       }
       else {
        echo "<a href='login.php'>Log In</a>";
        echo "<a href='signUp.php'>SignUp</a>";
       }
       ?>
      
    </header>
    <div class="loggedIn">
    <?php
       if (isset($_SESSION["useruid"])) {
        echo "<div class='upload'>
                <p>Welcome  $_SESSION[useruid]!</p>
                <h2>Upload Image</h2>
                <form action='' method='POST' enctype='multipart/form-data' id='uploadForm'>
                <input type='file' name='file'>
                <button type='submit' name='submit'>Upload</button>
                </form>
              </div>";
        } 
        //if ($_SERVER["REQUEST_METHOD"] === "POST" && $file_error === 0) {
            //echo "File Uploaded";
        //}
    ?>
    <?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt . "." . $fileName;
                $fileDestination = './uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                //header("Location: ../success.php");
                echo "File uploaded!";
                
                
            } else {
                echo "You're file is too big!";
            }
        } else {
            echo "There was an error uploading you're file";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}
   ?>
        
    </div>
    <div class="projects">
        <h3><a href="#shirts">Shirts</a></h3>
        <h3><a href="#bags">Bags</a></h3>
        <h3><a href="#hats">Hats</a></h3>
        <h3><a href="#cups">Cups</a></h3>
        <h3 class="backToTop"><a href="#topHeader" class="backToTop">Back ^</a></h3>
    </div>
    
    <div class="shirts" id="shirts">
        <hr>
        <h1>Shirts</h1>
        <img src="img/shirtWhite.png" alt="picture of a shirt" width="100%" id="shirt">
        <h4>$19.95</h4>
        <div class="color">
            <div class="red" id="red"></div>
            <div class="blue" id="blue"></div>
            <div class="green" id="green"></div>
            <div class="black" id="black"></div>
            <div class="white" id="white"></div>
        </div>
    </div><br>
    <div class="bags" id="bags">
        <hr>
        <h1>Bags</h1>
        <img src="img/bag.jpg" alt="picture of a bag" width="100%">
        <h4>$24.95</h4>
    </div><br>
    <div class="hats" id="hats">
        <hr>
        <h1>Hats</h1>
        <img src="img/hat.jpg" alt="picture of a hat" width="100%">
        <h4>$22.99</h4>
    </div><br>
    <div class="cups" id="cups">
        <hr>
        <h1>Cups</h1>
        <img src="img/cups.jpg" alt="picture of a cup" width="100%">
        <h4>$14.99</h4>
    </div>
    <script src="main.js"></script>
</body>
</html>