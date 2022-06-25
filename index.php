<?php include "connection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<section class="class_name">
      <div class="container">
        <div class="row">
        <form action ="" method="POST">
        <input type="text" name="name" placeholder ="Enter Your Name"><br><br>
        <input type="text" name="id" placeholder ="Enter Your Id"><br><br>
        <input type="number" name="age" placeholder ="Enter Your Age"><br><br>
        <input type="text" name="username" placeholder ="Enter Your Username"><br><br>
        <input type="password" name="password" placeholder ="Enter Your Password as 0-9"><br><br>
        <input type="submit" name="save">
        
        <a href="display.php">
           <input type="button" value="Show">
        </a>
   
</form>
<?php
if(isset($_POST["save"])){

    $name=$_POST["name"];
    $id=$_POST["id"];
    $age=$_POST["age"];
    $username=$_POST["username"];
    $password= $_POST["password"];


    $query = "INSERT INTO student1(
        name,id,age,username,password) VALUES('$name','$id','$age','$username','$password')";
    $data = mysqli_query($con,$query);   
}
?>
        </div>
      </div>
    </section>
</body>
</html>