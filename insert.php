<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $password=$_POST['password'];
}

$sql="INSERT INTO registration (fname,lname,DOB,Email,pass) VALUES  ('$fname','$lname','$dob','$email','$password')";

if($con->query($sql) === TRUE)
{
    echo "record added successfully";?>
    <script>
        alert("data inserted successfully");
    </script>
    
    <?php
    header("Location:display.php");
    $fname="";
    
}
else{
    echo "Error: " . $sql . "<br>" . $con->error;

}
?>