<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Student_login.php');
$page='Dashboard';
include('Student_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9 text-center">
        <div class="container text-center">
            <h2><b>Result</b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>
        <?php
  if(isset($_POST['submit'])){
    include("connection.php");
    $name=$_GET['QuizName'];                
                $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
                $number=mysqli_fetch_array($query);
                echo "<script> alert('$number[0]')</script>";
                $num=$number[0];
                for($i=1;$i<=$number[0];$i++){
                  $num=$i+$num;
                    $ans=$_POST["answer$num"];
                    if(!empty($ans)){
                      echo $ans;
                    }
                    
  }
}
?>
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