<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #050608;  
        margin: 0;
        padding: 20px;
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
    margin-left: 60px;
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
    top: 35%;
    margin-top: 10px;
    padding: 20px;
    border: 1px solid white;
}
h2{
    display: flex;
    top: 28%;
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
.back-btn {
        display: flex;
        position: absolute;
        top: 8%;
        text-decoration: none;
        border-radius: 8px;
        background-color:rgb(255, 0, 0);
        padding: 10px 20px;
        left: 8%;
        color: white;
        font-size: 14px;
        font-weight: 400;
}
.record-message{
    position: absolute;
    top: 68%;
    left: 150%;
    color: red;
    width: 90%;
    font-size: 16px;
    font-weight: 400;
}
</style>
<body>


        <?php 
        $id = $_GET['id'];
        include "connect.php";

        $sql = "SELECT * FROM my_pds WHERE id = $id";
        $query = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($query)){
            
        ?>

        <h3>Update Record</h3>
        <div>
            <a class="back-btn" href="display.php">Back</a>
        </div>
        <form action="update.php?id=<?php echo $id; ?>" method="post">

        <div class="container" >
            <div class="form" >
                <div class="name">
                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" value="<?php echo $row['lname'];?>" name="lastname" required ><br><br>
                <label for="firstname">First Name:</label><br>
                <input type="text" id="firstname"  value="<?php echo $row['fname'];?>" name="firstname" required ><br><br>
                <label for="middlename">Middle Name:</label><br>
                <input type="text" id="middlename" value="<?php echo $row['mname'];?>"  name="middlename" ><br><br>
                <label for="suffix">Suffix:</label><br>
                <input type="text" id="suffix" value="<?php echo $row['sfxname'];?>"  name="suffix"><br><br>
                </div>
            </div> 
            <h2>Residential Address</h2>
            <div class="adress">
                <label for="House">House No.</label><br>
                <input type="text" value="<?php echo $row['housenum'];?>"  name="house"><br><br>
                <label for="Street">Street:</label><br>
                <input type="text" value="<?php echo $row['street'];?>"  name="Street"><br><br>
                <label for="Barangay">Barangay:</label><br>
                <input type="text" value="<?php echo $row['brgy'];?>"  name="Barangay"><br><br>
                <label for="city">City/Town:</label><br>
                <input type="text" value="<?php echo $row['city'];?>"  name="city"><br><br>
                 <label for="Province">Province:</label><br>
                <input type="text" value="<?php echo $row['province'];?>"  name="province"><br><br>
                 <label for="zipcode">Zip Code:</label><br>
                <input type="text" value="<?php echo $row['zipcode'];?>"  name="zipcode"><br><br>
            </div>
            <h2 class="gender">Gender</h2>
            <div class="radio-gender">
                <input type="radio" name="gender" value="Male" <?php if ($row['gender'] == 'Male') echo 'checked'; ?>> 
                <label>Male</label>
                <input type="radio" name="gender" value="Female" <?php if ($row['gender'] == 'Female') echo 'checked'; ?>> 
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
                <input type="date" value="<?php echo $row['birth'];?>"  name="birthdate"><br><br>
            </div>
            <div class="birthplace">
                <label for="birthplace">Place of Birth:</label><br>
                <input type="text" value="<?php echo $row['placebirth'];?>"  name="birthplace"><br><br>
            </div>
            <div class="contact-info">
                <label for="cpnumber">Cellphone No.:</label><br>
                <input type="tel" value="<?php echo $row['cpnum'];?>" name="cpnumber"><br><br>
                <label for="telephone">Telephone No.:</label><br>
                <input type="tel"  value="<?php echo $row['telnum'];?>" name="telphone"><br><br>
                <label for="citizenship">Citizenship:</label><br>
                <input type="text" value="<?php echo $row['citizenship'];?>"  name="citizenship"><br><br>
            </div>
            <div class="email">
                <label for="email">Email Address:</label><br>
                <input type="email" value="<?php echo $row['email'];?>"  name="email"><br><br>
            
            <?php
            }
            ?>
            <?php
            include "connect.php";
            if(isset($_POST['update'])) {
                $id = $_GET['id'];
                $lastname = $_POST['lastname'];
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $suffix = $_POST['suffix'];
                $house = $_POST['house'];
                $street = $_POST['Street'];
                $barangay = $_POST['Barangay'];
                $city = $_POST['city'];
                $province = $_POST['province'];
                $zipcode = $_POST['zipcode'];
                $gender = $_POST['gender'] ?? '';
                $status = $_POST['status'];
                $birthdate = $_POST['birthdate'];
                $birthplace = $_POST['birthplace'];
                $cpnumber = $_POST['cpnumber'];
                $telphone = $_POST['telphone'];
                $citizenship = $_POST['citizenship'];
                $email = $_POST['email'];

                $sql = "UPDATE my_pds SET 
                    lname='$lastname',
                    fname='$firstname',
                    mname='$middlename',
                    sfxname='$suffix',
                    housenum='$house',
                    street='$street',
                    brgy='$barangay',
                    city='$city',
                    province='$province',
                    zipcode='$zipcode',
                    gender='$gender',
                    status='$status',
                    birth='$birthdate',
                    placebirth='$birthplace',
                    cpnum='$cpnumber',
                    telnum='$telphone',
                    citizenship='$citizenship',
                    email='$email'
                    WHERE id=$id";

                $query = mysqli_query($con, $sql);

                if($query){
                    echo "<span class='record-message'>Record successfully updated</span>";
                } else {
                    echo "<span class='record-message'>Field to Update record</span>";
                }
            }
            ?>

            </div>
            <div class="submit">
                <input type="submit" name= "update" value="Update">
        </div>
    </form>
</body>
</html>