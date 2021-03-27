<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Add_Quiz1.php');
$page='Quiz';
include('Teacher_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9">
        <div class="container text-center">
            <h2><b>
            <?php
                $name=$_GET['QuizName'];
                echo $name;?>
            </b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>           
                <form class="form-floating" method="post">
                <?php
                $name=$_GET['QuizName'];
                include("connection.php");
                $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
                $number=mysqli_fetch_array($query);
                
                // echo $number[0];
                for($i=1;$i<=$number[0];$i++){
                    $query1=mysqli_query($conn,"insert into $name (id) values('$i')")
                ?>
                <div class="card my-3">
                <div class="card-body bg-light"> 
                  <div class="my-2">                                      
                    <select class="form-select" name="level"aria-label="Default select example">
                      <option value="1">Easy</option>
                      <option value="2">Medium</option>
                      <option value="3">Hard</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <textarea class="form-control" name="question" placeholder="Write question here"></textarea>                   
                  </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>" class="form-check-input mt-0" type="radio"  value="option1" aria-label="Radio button for following text input">
                        </div>
                        <input type="text" id="floatingInputValue" name="option1"class="form-control" placeholder="Answer option 1"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>"class="form-check-input mt-0" type="radio"   value="option2" aria-label="Radio button for following text input">
                        </div>
                        <input type="text" id="floatingInputValue" name="option2"class="form-control" placeholder="Answer option 2"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>"class="form-check-input mt-0" type="radio"   value="option3" aria-label="Radio button for following text input">
                        </div>
                        <input type="text" id="floatingInputValue" name="option3"class="form-control" placeholder="Answer option 3"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>"class="form-check-input mt-0" type="radio"  value="option4" aria-label="Radio button for following text input">
                        </div>
                        <input type="text" class="form-control" name="option4"id="floatingInputValue" placeholder="Answer option 4"aria-label="Text input with radio button">
                    </div>
                </div>
                    </div>
                      <?php
                }?>
                      <input type="submit" name="submit"value="Save" class="btn btn-primary my-3 w-10">
                      <input type="reset" value="Clear" class="btn btn-primary my-3 w-10">
                </form>

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
    $name=$_GET['QuizName'];
    $level = $_POST['level'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
    $number=mysqli_fetch_array($query);
    for($i=1;$i<=$number[0];$i++){
        $answer=$_POST["answer$i"];
        if($answer ==option1){
            $query=mysqli_query($conn,"insert into $name (Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question','$option1','$option1','$option2','$option3','$option4','$level')");
            if($query){
                echo "<script> alert('Added Successfully');
                window.location='Quiz.php';
                </script>";
            }
        }
        else if($answer ==option2){
            $query=mysqli_query($conn,"insert into $name (Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question','$option2','$option1','$option2','$option3','$option4','$level')");
            if($query){
                echo "<script> alert('Added Successfully');
                window.location='Quiz.php';</script>";
            }
        }
        else if($answer ==option3){
            $query=mysqli_query($conn,"insert into $name (Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question','$option3','$option1','$option2','$option3','$option4','$level')");
            if($query){
                echo "<script> alert('Added Successfully');
                window.location='Quiz.php';</script>";
            }
        }
        else if($answer ==option4){
            $query=mysqli_query($conn,"insert into $name (Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question','$option4','$option1','$option2','$option3','$option4','$level')");
            if($query){
                echo "<script> alert('Added Successfully');
                window.location='Quiz.php';</script>";
            }
        }
    }
    
}
?>
