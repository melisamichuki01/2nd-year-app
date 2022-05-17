<?php

@include 'config\dbcon.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM users WHERE id = $id";
$result=mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
$UserName=$row['UserName'];
$Email=$row['Email'];
$UserType=$row['UserType'];
$Password=$row['Password'];

if(isset($_POST['submit'])){
    
   $UserName =mysqli_real_escape_string($con,$_POST['UserName']);
   $Email = mysqli_real_escape_string($con, $_POST['Email']);
   $UserType = mysqli_real_escape_string($con, $_POST['UserType']);
   $Password = mysqli_real_escape_string($con,$_POST['Password']);
   

   $update = "UPDATE users SET id= $id, UserName= '$UserName',UserType='$UserType', Email='$Email',Password='$Password' WHERE id= $id";

   $result = mysqli_query($con, $update);

   if($result){
        header('location:displayusers.php');
   }else{
       $error[] = 'could not update,try again';
       die();
   }

}

?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>New User</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    
    <!--login section starts  -->

    <div class="form-container">

        <form action="" method="post">
                <h3>Update User</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <input type="text" name="UserName" required placeholder="Enter  name" value=<?php echo $UserName;?>>
                <input type="email" name="Email" required placeholder="Enter  email"value=<?php echo $Email;?>>
                <select name="UserType">
                    <option value="" disabled selected>Register as a</option>
                    <option value="Client">Client</option>
                    <option value="Therapist">Therapist</option>
                    <option value="Admin">Admin</option>
                </select>
                <input type="password" name="Password" required placeholder="Enter  password" value=<?php echo $Password;?>>
                <input type="submit" name="submit" value="Update" class="form-btn">
            </form>

    </div>

    <!--login section ends-->
</body>