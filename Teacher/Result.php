<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Test.php');
$page='Dashboard';
include('Teacher_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9 text-center">
        <div class="container text-center">
            <h2><b>Result</b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Yeah, you successfully completed your quiz. </p>
            <?php
                include("connection.php");
                $quiz=$_GET['QuizName'];
                $name=$_SESSION['uname'];
                $query=mysqli_query($connection,"Select * from history where Quiz_name='$quiz' and student_name='$name'");
                $query1=mysqli_fetch_array($query);
                
                $query=mysqli_query($connection,"select Right_marks from quiz where QuizName='$quiz'");
                $right_marks=mysqli_fetch_array($query);
                $right_marks=$right_marks[0];

                $query=mysqli_query($connection,"select Questions from quiz where QuizName='$quiz'");
                $number=mysqli_fetch_array($query);
            ?>
            <h3>Right <span><?php echo $query1[0]?></span><h3>
            <h3>Wrong <?php echo $query1[1]?></span><h3>
            <h3>Marks <?php echo $query1[4]?></span><h3>
            <h3>Out of <?php echo $right_marks[0]*$number[0]?></span><h3>
            
            <hr>
            <p class="mb-0">Keep practice!! For better results</p>
        </div>
      </main>
 <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  -->
</body>
</html>