<?php 
include 'connection.php';

$user_id=$_GET['user_id'];
$sql="DELETE FROM registration where user_id=$user_id";
$con->query($sql);


header("Location:display.php");
exit();

?>
<script>
    alert("data deleted successfully");
</script>