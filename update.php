<?php 
include 'connection.php';

$user_id=$_GET['user_id'];
$sql="SELECT * FROM registration WHERE user_id=$user_id";
$result=$con->query($sql);
$row=$result->fetch_assoc();

if($_SERVER['REQUEST_METHOD']=== "POST")
{
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $sql="UPDATE registration SET fname='$fname',lname='$lname',DOB='$dob',Email='$email',pass=$pass where user_id=$user_id";
        $con->query($sql);
        header("Location:display.php");
        exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST">
        <label> First Name: <input type="text" name="fname" value="<?php echo $row['fname']; ?>" required></label><br><br>
        <label>Last Name: <input type="text" name="lname" value="<?php echo $row['lname']; ?>" required></label><br><br>
        <label>Date of Birth: <input type="text" name="dob" value="<?php echo $row['DOB']; ?>" required></label><br><br>
        <label>Email: <input type="email" name="email" value="<?php echo $row['Email']; ?>" required></label><br><br>
        <label>password: <input type="text" name="pass" value="<?php echo $row['pass']; ?>" required></label><br><br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>