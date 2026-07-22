<?php
include("db.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
echo $name . "<br>" . $email . "<br>" . $phone . "<br>" . $course;

$sql = "INSERT INTO student(name , email , phone , course) VALUES('$name', '$email', '$phone', '$course')";
if (mysqli_query($conn, $sql) ) {
    echo "new record created successfully";
} else {
    echo "error:" . $sql . "<br>" . mysqli_connect_error($conn);
}
if($conn){
    echo "yes";
}
else {
    echo"no";

    }