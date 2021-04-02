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
        <div class="container">
        <form class="form-floating" method="post">
            <h2><b>
            <div style="text-align:center"class="form-group col-sm-4 mx-auto">
                <input type="text" name="QuizName" class="form-control" value="<?php  $name=$_GET['QuizName']; echo $name;?>" id="formGroupExampleInput" >
            </div>

            </b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>           
                
                <?php
                $name=$_GET['QuizName'];
                include("connection.php");
                $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
                $number=mysqli_fetch_array($query);
                $query="select * from $name";
                $query1=mysqli_query($conn,$query);
                
                while($row=mysqli_fetch_array($query1)){
                    $level = $row["Level"];
                    $question=$row["Question"];
                    $option2=$row["Option2"];
                    $option3=$row["Option3"];
                    $option1=$row["Option1"];
                    $option4=$row["Option4"];      
                    $answer=$row["Answer"];
                ?>
                <div class="card my-3">
                <div class="card-body bg-light"> 
                  <div class="my-2">                                      
                    <select class="form-select" name="level<?php echo $i?>">
                        <option selected value="<?php echo $level;?>"><?php echo $level;?></option>
                        <option value="Easy">Easy</option>
                      <option value="Medium">Medium</option>
                      <option value="Hard">Hard</option>
                        
                    </select>
                  </div>
                  <div class="col-md-12">
                    <textarea class="form-control"name="question<?php echo $i?>" placeholder="Write question here"><?php echo $question ?></textarea>                   
                  </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>" class="form-check-input mt-0" type="radio" <?php if($answer==$option1) echo 'checked';?> aria-label="Radio button for following text input">
                        </div>
                        <input type="text" value="<?php echo $option1 ?>" id="floatingInputValue" name="option1<?php echo $i?>"class="form-control" placeholder="Answer option 1"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>"class="form-check-input mt-0" type="radio" <?php if($answer==$option2) echo 'checked';?> aria-label="Radio button for following text input">
                        </div><?php if($answer==$option1) echo "checked"?>
                        <input type="text" value="<?php echo $option2 ?>" id="floatingInputValue" name="option2<?php echo $i?>"class="form-control" placeholder="Answer option 2"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>"class="form-check-input mt-0" type="radio" <?php if($answer==$option3) echo 'checked'?>  aria-label="Radio button for following text input">
                        </div>
                        <input type="text" id="floatingInputValue" name="option3<?php echo $i?>"class="form-control" placeholder="Answer option 3" value="<?php echo $option3 ?>" aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>"class="form-check-input mt-0" type="radio" <?php if($answer==$option4) echo 'checked'?> aria-label="Radio button for following text input">
                        </div>
                        <input type="text"  value="<?php echo $option4 ?>" class="form-control" name="option4<?php echo $i?>"id="floatingInputValue" placeholder="Answer option 4"aria-label="Text input with radio button">
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
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit'])){
    $new_name = $_POST['QuizName'];
    $new_name=str_replace(" ","_",$new_name);
    $old_name = $_GET['QuizName'];
    
    $query=mysqli_query($connection,"UPDATE `quiz` SET `QuizName`='$new_name' WHERE `QuizName`='$old_name'");
    $query=mysqli_query($conn,"ALTER TABLE $old_name RENAME TO $new_name;");
    $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
    $number=mysqli_fetch_array($query);

    for($i=1;$i<=$number[0];$i++){
      $level = $_POST["level$i"];
      $question=$_POST["question$i"];
      $option1=$_POST["option1$i"];
      $option2=$_POST["option2$i"];
      $option3=$_POST["option3$i"];
      $option4=$_POST["option4$i"];      
        $answer=$_POST["answer$i"];
        if($answer =="option1"){          
            $query=mysqli_query($conn,"INSERT INTO $name(Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question', '$option1','$option1', '$option2', '$option3','$option4','$level')");
            if($query){
              
            }
        }
        else if($answer =="option2"){
            $query=mysqli_query($conn,"INSERT INTO $name(Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question', '$option2','$option1', '$option2', '$option3','$option4','$level')");
            if($query){
              
            }
        }
        else if($answer =="option3"){
            $query=mysqli_query($conn,"INSERT INTO $name(Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question', '$option3','$option1', '$option2', '$option3','$option4','$level')");
            if($query){
              
            }
        }
        else if($answer =="option4"){
            $query=mysqli_query($conn,"INSERT INTO $name(Question, Answer, Option1, Option2, Option3, Option4, Level) VALUES ('$question', '$option4','$option1', '$option2', '$option3','$option4','$level')");
            if($query){

            }
        }
    }     echo "<script> alert('Added Successfully');
  window.location='Quiz.php';</script>";
  }
?>