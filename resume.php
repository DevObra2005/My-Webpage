<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resume.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Resume</title>
</head>
<body>
<main>
        <nav>
            <div class="logo">Obra.</div>
             <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="resume.php">Resume</a></li>
             </ul>
        </nav>
        <div class="container">
            <h3>Personal Data Sheet</h3>
            <form class="form">
                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" name="lastname"><br><br>
                <label for="firstname">First Name:</label><br>
                <input type="text" id="firstname" name="firstname"><br><br>
                <label for="middlename">Middle Name:</label><br>
                <input type="text" id="middlename" name="middlename"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
</main>
<?php

?>
</body>
</html>