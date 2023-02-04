<?php
    include 'db_connector.php';

    $name = $_POST['sname'];
    $id = $_POST['sid'];
    $sem = $_POST['ssem'];
    $sec = $_POST['ssec'];


    $sql = "insert into student(name, id,semsister,sec) values('{$name}', {$id},'{$sem}','{$sec}') ";
    
    if(mysqli_query($conn, $sql)){
        echo 1;
    }else
    {
        echo 0;
    } 
   
?>