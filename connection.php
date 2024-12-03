<?php
$servername="localhost";
$username="root";
$password="";
$dbname="CRUD_task";

$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
    die("Connection Failed" .$con->connect_error);
}
// echo "connection successfully";

?>