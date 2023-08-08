<?php
include 'connected.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $mobile=$_POST['mobile'];
    $password = $_POST['password'];


    $sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Updated successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
        //echo "Failed";
    }

}





?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
  </head>
  <body>
    <div class="container">
    <form method="post">
  <div class="mb-3">
    <label for="InputName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name" id="InputName" value=<?php echo $name;?> >
  </div>

  <div class="mb-3">
    <label for="InputEmail" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter your Email" id="InputEmail" value=<?php echo $email;?> >
  </div>

  <div class="mb-3">
    <label for="InputMobile" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile no" id="InputMobile" value=<?php echo $mobile;?> >
  </div>

  <div class="mb-3">
    <label for="InputPassword" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" placeholder="Enter your password" id="InputPassword" value=<?php echo $password;?> >
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>