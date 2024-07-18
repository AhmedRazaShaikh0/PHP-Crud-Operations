<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>CRUD APP</title>
</head>
<body>
<header>
      <a href="crud.php">Home</a>  
</header>
    <center><h1>CRUD APP</h1></center>
    <br><br>
    <center>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Father name</th>
            <th>Contact</th>
            <th>Email address</th>
            <th>Action &nbsp;&nbsp;<a href="insertdata.php"><i style="color:white" class="fa-solid fa-user-plus"></i></a></th>
            
        </tr>
        <?php 
        $sql="select * from data ";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
        while($rows=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $rows["id"];?></td>
            <td><?php echo $rows["name"];?></td>
            <td><?php echo $rows["fname"];?></td>
            <td><?php echo $rows["contact"];?></td>
            <td><?php echo $rows["email"];?></td>
            <td><a href="editdata.php?id=<?php echo $rows['id'];?>"><i class="fa-solid fa-pen-clip"></i></a>&nbsp; <a href="deletedata.php?del2=<?php echo $rows['id'];?>"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
<?php            
        }

    }
            ?>
           
    </table>
    
</center>
</body>
</html>