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
    h1 {
        color:rgb(1, 238, 255);
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .view-details {
        position: absolute;
        left: 25%;
        margin-top: 50px;
        width: 50%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 18px;
        background-color:rgba(36, 80, 83, 0.36);
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    }
    .view-details dl {
        display: grid;
        grid-template-columns: 180px 1fr;
        row-gap: 12px;
        column-gap: 20px;
        margin: 0;
    }
    .view-details dt {
        font-weight: 600;
        color:rgb(1, 238, 255);
        text-align: start;
        padding-right: 10px;
    }

    .view-details dd {
        margin: 0;
        color: white;
        font-weight: 400;
        padding-left: 10px;
    }
    .back-btn {
        display: flex;
        position: absolute;
        top: 13%;
        text-decoration: none;
        border-radius: 8px;
        background-color:rgb(255, 0, 0);
        padding: 10px 20px;
        left: 25%;
        color: white;
        font-size: 14px;
        font-weight: 400;
    }
</style>
<body>
    <h1>View Page</h1>
    <div>
        <a class="back-btn" href="display.php">Back</a>
    </div>
    <?php
    include "connect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM my_pds WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($query)) {
    ?>
        <div class="view-details">
            <dl>
                <dt>Lastname:</dt> 
                <dd><?php echo $row['lname']; ?></dd>
                <dt>Firstname:</dt> 
                <dd><?php echo $row['fname']; ?></dd>
                <dt>Middlename:</dt> 
                <dd><?php echo $row['mname']; ?></dd>
                <dt>Suffix:</dt>
                <dd><?php echo $row['sfxname']; ?></dd>
                <dt>House Number:</dt> 
                <dd><?php echo $row['housenum']; ?></dd>
                <dt>Street:</dt> 
                <dd><?php echo $row['street']; ?></dd>
                <dt>Barangay:</dt> 
                <dd><?php echo $row['brgy']; ?></dd>
                <dt>City:</dt> 
                <dd><?php echo $row['city']; ?></dd>
                <dt>Province:</dt> 
                <dd><?php echo $row['province']; ?></dd>
                <dt>Zip Code:</dt> 
                <dd><?php echo $row['zipcode']; ?></dd>
                <dt>Gender:</dt> 
                <dd><?php echo $row['gender']; ?></dd>
                <dt>Date of Birth:</dt> 
                <dd><?php echo $row['birth']; ?></dd>
                <dt>Place of Birth:</dt> 
                <dd><?php echo $row['placebirth']; ?></dd>
                <dt>Status:</dt> 
                <dd><?php echo $row['status']; ?></dd>
                <dt>Contact Number:</dt> 
                <dd><?php echo $row['cpnum']; ?></dd>
                <dt>Telephone Number:</dt> 
                <dd><?php echo $row['telnum']; ?></dd>
                <dt>Email Address:</dt> 
                <dd><?php echo $row['email']; ?></dd>
            </dl>
        </div>
    <?php
    }
    ?>
</body>
</html>