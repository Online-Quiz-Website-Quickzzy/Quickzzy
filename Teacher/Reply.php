<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Teacher_login.php');
$page='Feedback';
include('Teacher_Structure.php');
?>
    <main class="col-md-9 mx-auto mt-5 ms-sm-auto  text-center">
        <div class="create-quiz bg-light px-5 mb-5">
            <img src="Question.svg" alt=""><h4>Reply</h4>
            <div class="form-group">   
                <form class="form-floating" method="post" >
                <div class="form-group">   
                    <?php
                        include("connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($connection,"select * from feedback where id='$id'");
                        $query1=mysqli_fetch_array($query);
                    ?>
                <div class="col-md-12">
                    <label>Student Name And Feedback</label>
                    <input type="text" disabled class="form-control" value="<?php echo $query1['Student_name']." : ".$query1['Feedback'];?>"></textarea>                   
                  </div>
                </div>
                <div class="form-group">   
                <div class="col-md-12">
                    <textarea class="form-control" name="feedback" placeholder="Write reply here"></textarea>                   
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
    $tname=$_SESSION['uname'];
    $id=$_GET['id'];
    $feedback=$_POST['feedback'];
    if($feedback == ""){
        echo("<script>alert('Fields must be filled out')</script>");
    }
    else{
                $query="UPDATE `feedback` SET `Reply`='$feedback',`Teacher_name`='$tname' WHERE id=$id";
                if(mysqli_query($connection,"$query")){
                    echo "<script> alert('Thank you for your reply')</script>";                    
                }
                else{
                    echo "<script> alert('Please try Again')</script>";
                }
        }
}
?>