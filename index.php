<?php
include("db_connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./icon_64.png" type="image/x-icon">
</head>
<body>
    <div class="header">
        <h1>Crud Application</h1>
    </div>

    <div class="main-container">
    <div class="title">
            <h1>Available Student</h1>
            <div class="line"></div>
    </div>

    <table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Class</th>
    <th>Age</th>
    <th>Actions</th>
  </tr>


    <?php
    $query=$con->query("Select * from students");
    while($row = mysqli_fetch_array($query)){

    ?>

    <tr>

    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['class']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td>
        <a class="button" href="./edit_student.php?id=<?php echo $row['id']?>">Edit</a>

        <a class="button" href="./delete_student.php?id=<?php echo $row['id']?>">Delete</a>

        <?php
         }
        ?>
    </td>
  </tr>


</table>


<div class="button">
        <a href="./new_student.php">Add New Student</a>
    </div>
    </div>



</body>
</html>