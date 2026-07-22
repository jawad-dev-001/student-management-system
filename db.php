<?php
$conn = mysqli_connect("localhost", "root", "", "student_management");
if (mysqli_error($conn)) {
    die( "coonection failed". mysqli_error($conn));
}
else{
    echo "connection success";
}
?>