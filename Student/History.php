<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Student_login.php');
$page='History';
include('Student_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9 text-center">
        <div class="container text-center">
            <h2><b>Quiz</b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm">
            <thead>

              <tr>
                <th>Quiz Name</th>
                <th>Questions</th>
                <th>Right</th>
                <th>Wrong</th>
                <th>Total Marks</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include('connection.php');
                
                $name=$_SESSION['uname'];
                $query=mysqli_query($connection,"select * from history where student_name='$name'");
                while($row=mysqli_fetch_array($query)){
            ?>
              <tr>
                <td><?php echo $row['Quiz_name'];?></td>    
                <td>
                <?php 
                                $quiz_name=$row['Quiz_name'];
                                $query1=mysqli_query($connection,"select Questions from quiz where QuizName='$quiz_name'");
                                $quiz=mysqli_fetch_array($query1);
                echo $quiz[0];?>
                </td>   
                <td><?php echo $row['Right'];?></td>
                <td><?php echo $row['Wrong'];?></td>
                <?php 
                $quiz_name=$row['Quiz_name'];
                $query1=mysqli_query($connection,"select Questions from quiz where QuizName='$quiz_name'");
                $quiz=mysqli_fetch_array($query1);
                $query2=mysqli_query($connection,"select Right_marks from quiz where QuizName='$quiz_name'");
                $right_marks=mysqli_fetch_array($query2);

                ?>
                <td><?php echo $row['Marks']." Out of ".$right_marks[0]*$quiz[0];?></td> 
              </tr>
            <?php } ?>
            </tbody>
          </table>
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