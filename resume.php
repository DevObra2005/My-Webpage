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
    display: flex;
    justify-content: center;
    width: 90%;
    margin-left: 5%;
    height: 78vh;
    margin-top: 25px;
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
    margin-left: 200px;
    margin-top: 3%;
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
    top: 67%;
    left: 7%;
    margin-top: 30px;
    position: absolute;
    justify-content: center;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.dropdown-status{
    display: flex;
    flex-direction: column;
    top: 70%;
    left: 7%;
    margin-top: 50px;
    position: absolute;
    color: white;
    font-weight: 400;
    font-size: 20px;
    margin-left: 20px;
}
.dropdown-status option{
    color: turquoise;
    background-color: #050608;
    font-size: 14px;
}
.dropdown-status select{
    width: 150px;
    height: 40px;
    border: none;
    border-bottom: 2px solid white;
    background: transparent;
    font-size: 16px;
    color: white;
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
    background-color: #575757;
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
.submit input:hover{
    background-color: turquoise;
    transition: ease-in-out .5s;
}
.recordcss{
    display: flex;
    position: absolute;
    top: 86%;
    left: 68%;
    color: green;
    font-size: 14px;
    font-weight: 400;
}
.display{
}
.display a{
    display: flex;
    position: absolute;
    top: 15%;
    text-decoration: none;
    border-radius: 10px;
    background-color:rgb(128, 124, 124);
    padding: 10px 20px;
    left: 80%;
    color: white;
    font-size: 14px;
    font-weight: 400;
}
.display a:hover{
    background-color: red;
    transition: ease-in-out .5s;
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
        <div class="display">
            <a href="display.php">View all records</a>
            <h3>Personal Data Sheet</h3>
        <form action="resume.php" method="Post">
        <div class="container" >
            <div class="form" >
                <div class="name">
                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" name="lastname" required ><br><br>
                <label for="firstname">First Name:</label><br>
                <input type="text" id="firstname" name="firstname" required ><br><br>
                <label for="middlename">Middle Name:</label><br>
                <input type="text" id="middlename" name="middlename" required ><br><br>
                <label for="suffix">Suffix:</label><br>
                <input type="text" id="suffix" name="suffix"><br><br>
                </div>
            </div> 
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
            <h2 class="status">Civil Status</h2>
            <div class="dropdown-status">
                        <select name="status">
                            <option value="0">Choose One...</option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Separated</option>
                        </select>
            </div>
             <div class="birthdate">
                <label for="birthdate">Birthdate:</label><br>
                <input type="date" id="birthdate" name="birthdate"><br><br>
            </div>
            <div class="birthplace">
                <label for="birthplace">Place of Birth:</label><br>
                <input type="text" id="birthplace" name="birthplace"><br><br>
            </div>
            <div class="contact-info">
                <label for="cpnumber">Cellphone No.:</label><br>
                <input type="tel" name="cpnumber"><br><br>
                <label for="telephone">Telephone No.:</label><br>
                <input type="tel"  name="telphone"><br><br>
                <label for="citizenship">Citizenship:</label><br>
                <input type="text"  name="citizenship"><br><br>
            </div>
            <div class="email">
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email"><br><br>
            </div>
            <div class="submit">
                <input type="submit" name= "submit" value="Submit">
        </div>
    </form>
</main>
<?php
// Global variables
$lastname_error = "";
$firstname_error = "";
$middlename_error = "";
$suffix_error = "";
$house_error = "";
$street_error = "";
$brgy_error = "";
$city_error = "";
$province_error = "";
$zipcode_error = "";
$gender_error = "";
$birthdate_error = "";
$placebirth_error = "";
$status_error = "";
$cpnumber_error = "";
$telphone_error = "";
$citizenship_error = "";
$email_error = "";

if(isset($_POST['submit'])){
    if($_POST['status'] == 1){
        $status = "Single";
    }elseif($_POST['status'] == 2){
        $status = "Married";
    }elseif($_POST['status'] == 3){
        $status = "Widowed";
    }elseif($_POST['status'] == 4){
         $status = "Separated";
    }else{
        $status_error = "<span>Please select one</span>";
    }

    if(isset($_POST['gender'])){
        if($_POST['gender'] == "male"){
            $gender = "Male";
        }else{
            $gender = "Female";
        }
        }else{
            $gender_error = "<span>Please select one</span>";
    }

    if(empty($gender_error) && empty($status_error)){

        include "connect.php";

        
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $suffix = $_POST['suffix'];
        $house = $_POST['house'];
        $street = $_POST['Street'];
        $brgy = $_POST['Barangay'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $zipcode = $_POST['zipcode'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $placebirth = $_POST['birthplace'];
        $status = $_POST['status'];
        $cpnumber = $_POST['cpnumber'];
        $telphone = $_POST['telphone'];
        $citizenship = $_POST['citizenship'];
        $email = $_POST['email'];

// Command to insert data to the database
        $sql = "INSERT INTO my_pds (lname, fname, mname, sfxname, housenum, street, brgy, city, province, zipcode, gender, birth, placebirth, status, cpnum, telnum, citizenship, email)
        VALUES ('$lastname', '$firstname', '$middlename', '$suffix', '$house', '$street', '$brgy', '$city', '$province', '$zipcode', '$gender', '$birthdate', '$placebirth', '$status', 
        '$cpnumber', '$telphone', '$citizenship', '$email')";

         $query = mysqli_query($con, $sql);
            if($query){
                echo "<span class='recordcss'>Record successfully added</span>"; 
            }else {
                 echo "<span>Failed to add record: </span>" . $sql . "<br>" . mysqli_error($con);
            }
            mysqli_close($con);
            }else{
                $status_error = $status_error;
                $gender_error = $gender_error;
            }
// database connection
}
?>
</body>
</html>