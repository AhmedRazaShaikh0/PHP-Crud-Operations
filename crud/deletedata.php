<?php
include("connection.php");
echo $id2= $_GET['del2'];
$sql2="DELETE FROM `data` WHERE id ='$id2'";
//end
if(mysqli_query($conn,$sql2)){
    header("location:crud.php");
}
?>