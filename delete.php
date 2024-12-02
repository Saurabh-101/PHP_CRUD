<?php 
    include 'database_con.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "DELETE FROM `student` WHERE `id` = '$id'";

        $result = mysqli_query($connection,$query);
        if(!$result){
            die("Query failed".mysqli_error());
        }else{
            header("location:index.php?delete_msg=You have deleted the record");
        }
    
    }
?>