<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <a href="crud.php">Home</a>  
</header>
<center>
    <form action="update.php" method ="post">
    <h1>Edit data</h1>
    <?php
    $id =$_GET['id'];
    $sql="SELECT * FROM data WHERE id={$id}";
    $result=mysqli_query($conn,$sql); 
         if(mysqli_num_rows($result) > 0){
         while($rows=mysqli_fetch_assoc($result)){?>
         <input type="hidden"name="id" value="<?php echo $rows['id'];?>">
       <input type="text" name="name" placeholder="Enter name" required="text" value="<?php echo $rows['name'];?>"><br>
       <input type="text" name="fname" placeholder="Enter fathername" required="text"value="<?php echo $rows['fname'];?>"><br>
       <input type="number" name="contact" placeholder="+92." required="number"value="<?php echo $rows['contact'];?>"><br>
       <input type="email" name="email" placeholder="abc@gmail.com"value="<?php echo $rows['email'];?>"><br>
  
       <span><input type="submit" value="Edit data" name="submit"></span><br>
    </form>
    <?php  }}?>
    </center>
    
</body>
</html>
