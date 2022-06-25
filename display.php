
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
</head>
<body>

        
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
                include 'connection.php';

                
                $selectquery = "select *from student1";
                $query = mysqli_query($con,$selectquery);
                $num = mysqli_num_rows($query);
                while($res= mysqli_fetch_array($query)){
                    
                

        ?>
        <tr>
            <td><?php echo $res['name']; ?> </td>
            <td><?php echo $res['id']; ?> </td>
            <td><?php echo $res['age']; ?> </td>
            <td> <?php echo $res['username']; ?></td>
            <td> <?php echo $res['password']; ?></td>
            
        </tr>
        <?php
                }
                
        ?>
    </table>
    
</body>
</html>