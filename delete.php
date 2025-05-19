
<?php
    session_start();
    $id = $_GET['id'];
    include "connect.php";

    $sql = "DELETE FROM my_pds WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        $_SESSION['message'] = "<span class='delete-message'>Record successfully deleted</span>";
        header ('location: display.php');
    }else{
        $_SESSION['message'] = "<span>Failed to delete record</span>";
        header ('location: display.php');
    }
?>