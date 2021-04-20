<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Student_login.php');
$page='Reply';
include('Student_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9 ">
        <div class="container">          
            <h2 class="text-center"><b>Teacher's Reply</b></h2>
            <hr class="col-sm-5 mx-auto">
            
        </div>
        
        <?php 
                include("connection.php");
                $sname=$_SESSION['uname'];
                $query=mysqli_query($connection,"select * from feedback where Student_name='$sname'");
                while($query1=mysqli_fetch_array($query)){?>
        
        <div class="alert alert-secondary" role="alert">
                <?php
                if(mysqli_num_rows($query)>0){
                    echo " <strong>You : </strong> $query1[1]";
                    echo "<p><strong>$query1[4] :</strong>$query1[3]</p>";
                }
                else{
                    echo "<i><strong>No Reply</strong></i>";
                }
            ?>
        </div>
            
        <?php }?>
        
      </main>

 <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>