<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Student_login.php');
$page='Feedback';
include('Student_Structure.php');
?>
    <main class="col-md-5 mx-auto mt-5 ms-sm-auto col-xxl-4 px-md-5 text-center">
        <div class="create-quiz bg-light px-md-5 mb-5">
            <img src="Question.svg" alt=""><h4>Add Feedback</h4>
            <div class="form-group">   
                <form class="form-floating" method="post" >
                <div class="form-group">   
                <div class="col-md-12">
                    <textarea class="form-control" name="feedback" placeholder="Write Feedback here"></textarea>                   
                  </div>
                </div>
                    <button type="submit" name="submit">Save</button>
                </form>
            </div>
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
<?php
include("connection.php");

if(isset($_POST['submit'])){
    $uname=$_SESSION['uname'];
    $feedback=$_POST['feedback'];
    if($feedback == ""){
        echo("<script>alert('Fields must be filled out')</script>");
    }
    else{
                $query="insert into feedback (Feedback,Student_name) values('$feedback','$uname')";
                if(mysqli_query($connection,"$query")){
                    echo "<script> alert('Thank you for your feedback')</script>";                    
                }
                else{
                    echo "<script> alert('Please try Again')</script>";
                }
        }
}
?> 
