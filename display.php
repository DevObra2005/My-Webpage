<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
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
    .addrecord a{
        display: flex;
        position: absolute;
        top: 14%;
        text-decoration: none;
        border-radius: 8px;
        background-color:rgb(128, 124, 124);
        padding: 10px 20px;
        left: 80%;
        color: white;
        font-size: 14px;
        font-weight: 400;
    }
    a:hover{
    background-color: red;
    transition: ease-in-out .5s;
}
    table {
        position: relative;
        left: 10%;
        border: 1px solid rgb(1, 238, 255);
        width: 80%;
        border-collapse: collapse;
        margin-top: 50px;
    }
    th, td {
        padding: 10px;
        color: white;
        text-align: left;
        padding: 16px;
        border-bottom: 1px solid rgb(1, 238, 255);
    }
    .table-header {
        font-weight: bold;
        color: white;
        background-color:rgba(35, 111, 134, 0.6);
    }
   a {
        text-decoration: none;
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin: 1px;
    }
    a.view {
        background-color: green;
    }
    a.edit {
        background-color: blue;
    }
    a.delete {
        background-color: red;
    }
    a:hover {
        opacity: 0.8;
    }
.delete-message {
    display: block;
    color: #ffffff;
    background: #e74c3c;
    border-radius: 5px;
    padding: 10px 20px;
    margin: 20px auto;
    width: fit-content;
    font-size: 16px;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(231, 76, 60, 0.15);
    text-align: center;
}
    .delete-message a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }
    .delete-message a:hover {
        text-decoration: underline;
    }
    .delete-message a:active {
        color: #e74c3c;
    }
.no-records {
    color: #fff;
    background: #34495e;
    position: absolute;
    top: 35%;
    left: 43%;
    border-radius: 5px;
    padding: 10px 20px;
    margin: 40px auto;
    width: fit-content;
    font-size: 20px;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(52, 73, 94, 0.15);
    letter-spacing: 1px;
    opacity: 0.95;
}
</style>
<body>
    <!-- Heading -->
    <h1>Display Page</h1><br>

    <div>
        <div>
            <div class="addrecord">
                <a class="addrecord" href="resume.php">Add Record</a>
            </div>
        

        <?php
            session_start();
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                session_destroy();
            }
        ?>

        <!-- Table Element -->
        <table>
            <tr class="table-header">
                <td>Last Name</td>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Action</td>
            </tr>
            <?php
                include "connect.php";

                // Command to get data from the database 
                $sql = "SELECT * FROM my_pds";

                $query = mysqli_query($con, $sql);

                // Check if query is successful
                if (mysqli_num_rows($query) > 0) {
                    while($row = mysqli_fetch_assoc($query)) {
                ?> 
                    <tr>
                        <td> <?php echo $row['lname']; ?></td>
                        <td> <?php echo $row['fname']; ?></td>
                        <td> <?php echo $row['mname']; ?></td>
                        <td>
                            <a class="view" href="view.php?id=<?=$row['id'];?>" >View</a>
                            <a class="edit" href="edit.php?id=<?=$row['id'];?>" >Edit</a>
                            <a class="delete" href="delete.php?id=<?=$row['id'];?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                        </td>
                    </tr>
                <?php     
                    }
                }else {
                    echo "<span class='no-records'>No records found</span>";
                }
                    // output data of each row
            ?>
                    
        </table>
</body>
</html>