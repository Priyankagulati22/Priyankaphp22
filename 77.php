<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Class: <input type="text" name="class" required><br><br>
        SEM: <input type="text" name="sem" required><br><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>
        Mobile: <input type="text" name="mobile" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $sem = $_POST['sem'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    // Step 1: Connect to MySQL server
    $conn = new mysqli("localhost", "root", "");
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Create database if not exists
    $sql = "CREATE DATABASE IF NOT EXISTS studentdb";
    if ($conn->query($sql) === TRUE) {
        // echo "Database created or already exists<br>";
    } else {
        die("Error creating database: " . $conn->error);
    }

    // Step 3: Select the database
    $conn->select_db("studentdb");

    // Step 4: Create table if not exists
    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        class VARCHAR(50),
        sem VARCHAR(10),
        gender VARCHAR(10),
        mobile VARCHAR(15)
    )";

    if ($conn->query($sql) === TRUE) {
        // echo "Table created or already exists<br>";
    } else {
        die("Error creating table: " . $conn->error);
    }

    // Step 5: Insert data into table
    $sql = "INSERT INTO students (name, class, sem, gender, mobile)
            VALUES ('$name', '$class', '$sem', '$gender', '$mobile')";

    if($conn->query($sql) === TRUE){
        echo "<br>Student registered successfully!";
    } else {
        echo "<br>Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
</body>
</html>