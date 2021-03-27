<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Teacher_login.php');
$page='Quiz';
include('Teacher_Structure.php');
?>
    <main class="col-md-5 mx-auto mt-5 ms-sm-auto col-xxl-4 px-md-5 text-center">
        <div class="create-quiz bg-light px-md-5 mb-5">
            <img src="Question.svg" alt=""><h4>Create a Quiz</h4>
            <div class="form-group">   
                <form class="form-floating" method="post" >
                <div class="form-group">   
                    <div class="input-group-text">
                        <input type="text" name="QuizName"class="form-control" id="floatingInputValue" placeholder="Enter quiz name">
                    </div>
                </div>
                <div class="form-group">   
                    <label for="category">Select Category</label>
                    <div class="input-group-text">
                        <select class="form-select form-select-sm" name="category"aria-label=".form-select-sm ">
                        <?php
                            include('connection.php');
                                $query=mysqli_query($connection,"select * from category");
                                while($row=mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
                        <?php } ?>
                        </select>   
                    </div>
                </div>
                <div class="form-group">   
                <label for="number">Number of Questions</label>
                    <div class="input-group-text">
                        <input type="number" value="10" min="1" max="15" placeholder="Number of Questions"name="number"class="form-control" id="number">
                    </div>                    
                </div>
                    <button><a href="Quiz.php">Cancel</a></button>
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
    $quizName = $_POST['QuizName'];
    $quizName=str_replace(" ","_",$quizName);
    $category = $_POST['category'];
    $number = $_POST['number'];
    if($quizName == "" || $category == "" || $number == ""){
        echo("<script>alert('Fields must be filled out')</script>");
    }
    else{
        $query=mysqli_query($connection,"select * from Quiz where QuizName='$quizName'");
        if($query){
            if(mysqli_num_rows($query)>0){
                echo "<script> alert('Quiz Already Exists')</script>";
                exit();                
            }
            else{
                $query="insert into Quiz (QuizName,Teacher,category,Questions) values('$quizName','$uname','$category','$number')";
                $query1="CREATE TABLE $quizName (id INT(6) AUTO_INCREMENT PRIMARY KEY,Question VARCHAR(255),Answer VARCHAR(255),Option1 VARCHAR(255),Option2 VARCHAR(255),Option3 VARCHAR(255),Option4 VARCHAR(255),Level VARCHAR(255))";
                if(mysqli_query($connection,"$query") && mysqli_query($conn,"$query1")){
                    echo "<script> alert('Added Successfully');
                    location.replace('Add_Quiz2.php?QuizName=$quizName')</script>";
                    
                }else{
                    echo "<script> alert('Please try Again')</script>";
                }
            }
        }
        
    }
    
}
?> 
