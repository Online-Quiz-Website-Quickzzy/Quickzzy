<?php
include("connection.php");
$id=$_GET['Student_name'];
$query="Delete from feedback where Feedback='$id'";
if(mysqli_query($connection,$query)){
    echo"<script>alert('Deleted');
    window.location='Feedback.php';
    </script>";
}
else{
    echo"<script>alert('Try Again')</script>";
}
?>