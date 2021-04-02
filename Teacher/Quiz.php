<?php
session_start();
include("connection.php");
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Teacher_login.php');
$page='Quiz';
include('Teacher_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9 text-center">
        <div class="container text-center">
            <h2><b>Quiz</b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr><th colspan="6"><a href="Add_Quiz1.php" style="margin-bottom:1%"><i style="padding:0.4rem"class="fa fa-plus"></i>Add Quiz</a> </th></tr>   
              <tr>
                <th>Quiz Name</th>
                <th>Number of Questions</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include('connection.php');
                $query=mysqli_query($connection,"select * from quiz");
                while($row=mysqli_fetch_array($query)){
            ?>
              <tr>
                <td><?php echo $row['QuizName'];?></td>
                <td><?php echo $row['Questions'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><a href="Edit_Quiz.php?QuizName=<?php echo $row['QuizName']; ?>"><i class="fas fa-edit"></i></a></td>
                <td><a href="Delete_Quiz.php?QuizId=<?php echo $row['QuizId']; ?>"><i class="fas fa-trash"></i></a></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
    </div>
    
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