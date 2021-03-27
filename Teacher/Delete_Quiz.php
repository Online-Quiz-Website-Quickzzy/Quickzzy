<?php
include("connection.php");
$id=$_GET['QuizId'];
$name=mysqli_query($connection,"select QuizName from Quiz where QuizId='$id'");
$data=mysqli_fetch_array($name);
$query="Delete from quiz where QuizId='$id'";
$query1="Drop table $data[0]";
if(mysqli_query($connection,$query)&&mysqli_query($conn,$query1)){
    echo"<script>alert('Deleted');
    window.location='Quiz.php';
    </script>";
}
else{
    echo"<script>alert('Try Again')</script>";
}
?>