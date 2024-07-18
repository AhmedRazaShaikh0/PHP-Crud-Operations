<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
      <a href="crud.php">Home</a>  
</header>
    <center>
    <form action="" method ="post">
    <h1>Insert data</h1>
       <input type="text" name="name" placeholder="Enter name" required="text"><br>
       <input type="text" name="fname" placeholder="Enter fathername" required="text"><br>
       <input type="number" name="contact" placeholder="+92." required="number"><br>
       <input type="email" name="email" placeholder="abc@gmail.com"><br>
       <span><input type="submit" value="Insert data" name="submit"></span><br>
    </form>
    </center>
</body>
</html>
<?php
include("connection.php");


if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $fname=$_POST["fname"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $sql="insert into data(name,fname,contact,email)values('$name','$fname','$contact','$email')";
    $result1=mysqli_query($conn,"select * from data where name='$name'");
    $result2=mysqli_query($conn,"select * from data where fname='$fname'");
    $result3=mysqli_query($conn,"select * from data where contact='$contact'");
    $result4=mysqli_query($conn,"select * from data where email='$email'"); 
if(mysqli_num_rows($result1)>0){
    echo"<h3>Duplicate  name data please change your registration data</h3>";
}
if(mysqli_num_rows($result2)>0){
    echo"<h3>Duplicate fname data please change your registration data</h3>";
}
if(mysqli_num_rows($result3)>0){
    echo"<h3>Duplicate contact data please change your registration data</h3>";
}
if(mysqli_num_rows($result4)>0){
    echo"<h3>Duplicate email data please change your registration data</h3>";
}

else if(mysqli_query($conn,$sql)) {
   header("location:crud.php");
}
else{
    echo"Insert data  failed";
  }
}
?>