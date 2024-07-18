<?php
include("connection.php");
    $id=$_POST["id"];
    $name=$_POST["name"];
    $fname=$_POST["fname"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $update="UPDATE `data` SET `name`='{$name}',`fname`='{$fname}',`contact`='{$contact}',`email`='{$email}' WHERE id={$id}";
     $result=mysqli_query($conn,$update);
     if($result) {
        header("location:crud.php");
    }
    else{
        echo"update failed";
      }
?>