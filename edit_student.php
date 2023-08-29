<?php
include("db_connection.php");

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $class=$_POST['class'];
    $age=$_POST['age'];

    
    $sql = "UPDATE `students` SET `name`='$name',`email`='$email',`gender`='$gender',`class`='$class',`age`='$age' WHERE id=$id";
    
    $result = mysqli_query($con, $sql);
    
    if($result) {
        header("Location:index.php?msg=Student Data Updated...");
    }
    else {
        echo "Failed: " . mysqli_error($con);
    }
    }

?>

<?php
    include("db_connection.php");
   $sql = "SELECT * FROM `students` WHERE id = $id LIMIT 1";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>Crud Application</h1>
    </div>

    <div class="main-container">
       <form action="" method="post">

        <div class="title">
            <h1>Edit Student Info</h1>
            <div class="line"></div>
        </div>

        <div class="form">
            
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']?>">

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']?>">

            <label>Gender:</label>
            <input type="text" name="gender" value="<?php echo $row['gender']?>">

            <label>Class:</label>
            <input type="text" name="class" value="<?php echo $row['class']?>">


            <label>Age:</label>
            <input type="number" name="age" value="<?php echo $row['age']?>">

            <button type="submit" name="submit">Update Student Data</button>


        </div>

       </form> 

    <div class="button">
        <a href="./index.php">Get Back...</a>
    </div>
    </div>

</body>
</html>