

<?php

include 'connection.php';

$sql="SELECT* FROM registration";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD app</title>
       <style>
        table {
            width: 60%;
           
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
    </head>
    <body>
    <table border=2>
            <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()) :  ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['DOB']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td>
                    <a href="update.php?user_id=<?php echo $row['user_id']; ?>">Edit</a>
                    <a href="delete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a>
                    </td>
            </tr>
            <?php  endwhile?>

            
            
            
        </tbody>


        </table><br><br>
        <a href="index.html"  style="border:3px solid blue; padding:4px;">Register</a>
</body>
</html>
