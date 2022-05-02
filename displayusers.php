<?php
@include 'config\dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="css\display.css">
</head>
<body>
    <div class="container">
        <button id="btn" ><a href="insertuser.php">Create a new user</a><button></button>

        <table border="1" cellspacing="0" cellpadding="0">
            
            <tr class="heading">
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">UserType</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
            
            <tr class="data">
                <?php
                $select = " SELECT * FROM users ";
                $result = mysqli_query($con,$select);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $UserName=$row['UserName'];
                    $Email=$row['Email'];
                    $UserType=$row['UserType'];
                    $Password=$row['Password'];
                    echo'<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$UserName.'</td>
                                <td>'.$Email.'</td>
                                <td>'.$UserType.'</td>
                                <td>'.$Password.'</td>
                                <td><button id="btn"><a href="updateuser.php?updateid='.$id.'">Update</a></button>
                                <button id="btn"><a href="deleteuser.php?deleteid='.$id.'">Delete</a><button></td>
                            </tr>';
                    }
                }

                ?>
            </tr>
        </table>
    </div>
    
</body>
</html>