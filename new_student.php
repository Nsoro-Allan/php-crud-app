<?php
include("db_connection.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $class=$_POST['class'];
    $age=$_POST['age'];

    $result=$con->query("Insert into students values('','$name','$email','$gender','$class','$age')");

    if($result){
        header("Location:index.php?msg=Added new student successfully..");
    }
    
}
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
       <form action="" method="post">

        <div class="title">
            <h1>Add New Student</h1>
            <div class="line"></div>
        </div>

        <div class="form">
            
            <label>Name:</label>
            <input type="text" placeholder="Enter Your Name..." name="name">

            <label>Email:</label>
            <input type="email" placeholder="Enter Your Email..." name="email">

            <label>Gender:</label>
            <select name="gender">
                <option>Select Your Gender...</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <label>Class:</label>
            <select name="class">
                <option>Select Your Class...</option>
                <option>L3 SOD</option>
                <option>L4 SOD</option>
                <option>L5 SOD</option>
            </select>

            <label>Age:</label>
            <input type="number" placeholder="Enter Your Age..." name="age">

            <button type="submit" name="submit">Add New Student</button>


        </div>

       </form> 

    <div class="button">
        <a href="./index.php">View Available Students</a>
    </div>
    </div>

</body>
</html>