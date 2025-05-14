<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Resume</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: poppins, sans-serif;
}
main{
    width: 100%;
    height: 100vh;
    background-color: #050608;  
}
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 30px;
    margin-right: 20px;
    animation: slideDown 0.8s ease-in-out; 
}
@keyframes slideDown {
    0% {
        opacity: 0;
        transform: translateY(-100%);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
ul{
    list-style-type: none;
    display: flex;
}
li a{
    margin: 0px 15px;
    color: white;
    font-size: 15px;
    text-decoration: none;
}
ul:hover a{
    color: #575757;
    transition: ease-in-out .5s;
}
ul:hover a:hover{
    color: turquoise;
    box-shadow: 0 2px 0 0 turquoise;
}
.logo{
    color: turquoise;
    font-size: 25px;
    font-weight: bold;
    margin-left: 50px;
    text-transform: uppercase;
}
.container{
    width: 90%;
    height: 78vh;
    margin-top: 10px;
    border: 1px solid white;
    border-radius: 10px;
    background-color:rgba(20, 24, 28, 0.5);
    box-shadow: 0 0 30px rgba(15, 228, 224, 0.71);
}
.container:hover{
    box-shadow: 0 0 50px rgba(15, 228, 224, 0.71), 0 0 50px rgba(15, 228, 224, 0.71), 0 0 50px rgba(15, 228, 224, 0.71);
    transition: ease-in-out .5s;
}
h3{
    display: flex;
    justify-content: center;
    color: white;
    font-size: 30px;
    font-weight: 400;
}
.name{
    display: flex;
    margin-top: -40%;
    gap: 10px;
}
.name label{
    color: turquoise;
    font-size: 16px;
}
.name input{
    width: 150px;
    height: 30px;
    border: none;
    border-bottom: 2px solid white;
    background: transparent;
    color: white;
    font-size: 16px;
}
.adress{
    display:flex;
    position: absolute;
    top: 40%;
    margin-top: 10px;
    padding: 20px;
    border: 1px solid white;
}
h2{
    display: flex;
    top: 33%;
    margin-top: 20px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.gender{
    display: flex;
    top: 52%;
    left: 7%;
    margin-top: 30px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.adress label{
    color: turquoise;
    font-size: 16px;
    margin-left: 10px;
    margin-top: 20px;
}
.adress input{
    width: 100px;
    height: 30px;
    border: none;
    border-bottom: 2px solid white;
    background: transparent;
    color: white;
    font-size: 16px;
    margin-left: 26px;
    margin-top: 15px;
    transition: border-color 0.3s ease-in-out;
}
.radio-gender{
    display: flex;
    gap: 10px;
    top: 55%;
    left: 7%;
    margin-top: 30px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.radio-gender input{
    width: 20px;
    height: 20px;
    margin-top: 15px;
    border: none;
    border-bottom: 2px solid white;
    background: transparent;
    color: white;
    font-size: 12px;
}
.radio-gender label{
    color: turquoise;
    font-size: 20px;
    margin-top: 10px;
}
.birthdate{
    display: flex;
    gap: 10px;
    top: 50%;
    left: 25%;
    margin-top: 50px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.birthdate input{
    background: transparent;
    color: white;
    border: 1px solid white;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 20px;
    padding: 5px;
}
.birthplace{
    display: flex;
    gap: 10px;
    top: 50%;
    left: 55%;
    margin-top: 50px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.birthplace input{
    background: transparent;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    margin-bottom: 20px;
    padding: 5px;
}
.status{
    display: flex;
    top: 63%;
    left: 7%;
    margin-top: 30px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.radio-status{
    display: flex;
    flex-direction: column;
    top: 66%;
    left: 7%;
    margin-top: 50px;
    position: absolute;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.radio-status input{
    display: flex;
    position: relative;
    bottom: 23px;
    left: 20px;
    width: 20px;
    height: 20px;
    color: white;
}
.radio-status label{
    display: flex;
    position: relative;
    left: 50px;
    color: turquoise;
    font-size: 18px;
}
.contact-info{
    display: flex;
    gap: 10px;
    top: 62%;
    left: 25%;
    margin-top: 50px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.contact-info input{
    width: 150px;
    background: transparent;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    margin-bottom: 20px;
    padding: 5px;
}
.email{
    display: flex;
    gap: 10px;
    top: 75%;
    left: 25%;
    margin-top: 50px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.email input{
    width: 250px;
    background: transparent;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    margin-bottom: 20px;
    padding: 5px;
}
.submit input{
    display: flex;
    top: 78%;
    left: 83%;
    background-color: turquoise;
    margin-top: 50px;
    position: absolute;
    justify-content: center;
    color: white;
    border: none;
    padding: 10px 20px;
    font-weight: 400;
    font-size: 16px;
    border-radius: 8px;
}
</style>
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
            <h3>Personal Data Sheet</h3>
        <div class="container">
            <form class="form">
                <div class="name">
                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" name="lastname"><br><br>
                <label for="firstname">First Name:</label><br>
                <input type="text" id="firstname" name="firstname"><br><br>
                <label for="middlename">Middle Name:</label><br>
                <input type="text" id="middlename" name="middlename"><br><br>
                <label for="suffix">Suffix:</label><br>
                <input type="text" id="suffix" name="suffix"><br><br>
                </div>
            </form>
            <h2>Residential Address</h2>
            <div class="adress">
                <label for="House">House No.</label><br>
                <input type="text" id="house" name="house"><br><br>
                <label for="Street">Street:</label><br>
                <input type="text" id="Street" name="Street"><br><br>
                <label for="Barangay">Barangay:</label><br>
                <input type="text" id="Barangay" name="Barangay"><br><br>
                <label for="city">City/Town:</label><br>
                <input type="text" id="city" name="city"><br><br>
                 <label for="Province">Province:</label><br>
                <input type="text" id="province" name="province"><br><br>
                 <label for="zipcode">Zip Code:</label><br>
                <input type="text" id="zipcode" name="zipcode"><br><br>
            </div>
            <h2 class="gender">Gender</h2>
            <div class="radio-gender">
                <input type="radio"  name="gender">
                <label>Male</label>
                <input type="radio" name="gender">
                <label>Female</label>
            </div>
            <div class="birthdate">
                <label for="birthdate">Birthdate:</label><br>
                <input type="date" id="birthdate" name="birthdate"><br><br>
            </div>
            <div class="birthplace">
                <label for="birthplace">Place of Birth:</label><br>
                <input type="text" id="birthplace" name="birthplace"><br><br>
            </div>
            <h2 class="status">Civil Status</h2>
            <div class="radio-status">
                <label>Single</label>
                <input type="radio"  name="status">
                <label>Married</label>
                <input type="radio" name="status">
                <label>Divorced</label>
                <input type="radio" name="status">
                <label>Widdowed</label>
                <input type="radio" name="status">
            </div>
            <div class="contact-info">
                <label for="cpnumber">Cellphone No.:</label><br>
                <input type="tel" id="cpnumber" pattern="[0-9]"><br><br>
                <label for="telephone">Telephone No.:</label><br>
                <input type="tel" id="telephone" name="telphone"><br><br>
                <label for="citizenship">Citizenship:</label><br>
                <input type="text" id="citizenship" name="citizenshp"><br><br>
            </div>
            <div class="email">
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email"><br><br>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
        </div>
</main>
<?php
// database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myresume";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Check if the form is submitted

?>
</body>
</html>