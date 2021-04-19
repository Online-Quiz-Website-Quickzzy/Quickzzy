<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Teacher_login.php');
$page='Dashboard';
include('Teacher_Structure.php');
?>
<main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9">
        <div class="container text-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <p class="text-center"><strong >Important!</strong>           <button style="border:none;outline:none;background-color:transparent" class="close " data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
          </button></p>
          <?php
            include("connection.php");
            $name=$_GET['QuizName'];  
            $sname=$_SESSION['uname'];     
            $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
            $number=mysqli_fetch_array($query);
        
            $query=mysqli_query($connection,"select Right_marks from quiz where QuizName='$name'");
            $right_marks=mysqli_fetch_array($query);
            $right_marks=$right_marks[0];
        
            $query=mysqli_query($connection,"select Wrong_marks from quiz where QuizName='$name'");
            $wrong_marks=mysqli_fetch_array($query);
            $wrong_marks=$wrong_marks[0];
          ?>
          
            <p>There are total <strong><?php echo$number[0]?></strong> questions.</p>
            <p>For every correct attempt you will get increament of <strong><?php echo$right_marks[0]?></strong> marks.</p>
            <p>For every incorrect attempt you will get decrease of <strong><?php echo$wrong_marks[0]?></strong> marks.</p>
            <p class="text-center"><strong>All the best!!</strong></p>
          

          
        </div>
            <h2><b>
            <?php
                $name=$_GET['QuizName'];
                echo $name;?>
            </b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>           
                <form  value="option1""class="form-floating" method="post" enctype="multipart/form-data">
                <?php
                $name=$_GET['QuizName'];
                include("connection.php");
                $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
                $number=mysqli_fetch_array($query);
                $query="select * from $name";
                $query1=mysqli_query($conn,$query);
                $i=1;
                while($row=mysqli_fetch_array($query1)){
                    
                    $level = $row["Level"];
                    $question=$row["Question"];
                    $option2=$row["Option2"];
                    $option3=$row["Option3"];
                    $option1=$row["Option1"];
                    $option4=$row["Option4"];      
                    $answer=$row["Answer"];
                    for($b=1;$b<=$number[0];$b++){
                        $i=$i+1;  }?>
                                   <div class="card my-3">
                <div class="card-body bg-light"> 
                  <div class="my-2">                                      
                    <select disabled class="form-select" name="level<?php echo $i?>">
                        <option selected value="<?php echo $level;?>"><?php echo $level;?></option>                        
                    </select>
                  </div>
                  <div class="col-md-12">
                    <textarea disabled class="form-control"name="question<?php echo $i?>" placeholder="Write question here"><?php echo $question ?></textarea>                   
                  </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>" value="option1" class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                        </div>
                        <input disabled type="text" value="<?php echo $option1 ?>" id="floatingInputValue" name="option1<?php echo $i?>"class="form-control" placeholder="Answer option 1"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>" value="option2"class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                        </div>
                        <input disabled type="text" value="<?php echo $option2 ?>" id="floatingInputValue" name="option2<?php echo $i?>"class="form-control" placeholder="Answer option 2"aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i?>" value="option3"class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                        </div>
                        <input disabled type="text" id="floatingInputValue" name="option3<?php echo $i?>"class="form-control" placeholder="Answer option 3" value="<?php echo $option3 ?>" aria-label="Text input with radio button">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-text">
                          <input name="answer<?php echo $i;?>" value="option4"class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input">
                        </div>
                        <input disabled type="text"  value="<?php echo $option4 ?>" class="form-control" name="option4<?php echo $i?>"id="floatingInputValue" placeholder="Answer option 4"aria-label="Text input with radio button">
                    </div>
                </div>
                    </div>
                      <?php
                }?>
                      <input type="submit" name="submit"value="Save" class="btn btn-primary my-3 w-10">
                      <input type="reset" value="Clear" class="btn btn-primary my-3 w-10">
            
        
      </main>
 <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php
  if(isset($_POST['submit'])){
    include("connection.php");
    $name=$_GET['QuizName'];  
    $sname=$_SESSION['uname'];              
    $query=mysqli_query($connection,"select Questions from quiz where QuizName='$name'");
    $number=mysqli_fetch_array($query);

    $query=mysqli_query($connection,"select Right_marks from quiz where QuizName='$name'");
    $right_marks=mysqli_fetch_array($query);
    $right_marks=$right_marks[0];

    $query=mysqli_query($connection,"select Wrong_marks from quiz where QuizName='$name'");
    $wrong_marks=mysqli_fetch_array($query);
    $wrong_marks=$wrong_marks[0];
    $query="select * from $name";
    $query1=mysqli_query($conn,$query);
    $i=1;      
    $right=0;$wrong=0;$total=0;
    
    while($row=mysqli_fetch_array($query1)){    
      $answer=$row["Answer"];
      for($b=1;$b<=$number[0];$b++){
          $i=$i+1;  }
          $ans=$_POST["answer$i"];
          if(!empty($ans)){
            if($answer ==$ans){

              $right=$right+1;

              $total=$total+$right_marks;


            }
            else{

              $wrong=$wrong+1;
              $total=$total-$wrong_marks;
            }
          }
      }
      $query=mysqli_query($connection,"select * from history where student_name='$sname' and Quiz_name='$name'");
      if($query){
        if(mysqli_num_rows($query)>0){
          
          $query1=mysqli_query($connection,"UPDATE `history` SET `Right`='$right',`Wrong`='$wrong',`student_name`='$sname',`Quiz_name`='$name',`Marks`='$total' WHERE student_name='$sname' and Quiz_name='$name'");
          if($query1)
          echo "<script> alert('Marks Upgraded');location.replace('Result.php?QuizName=$name')</script>";
        }
        else{
          $query=mysqli_query($connection,"insert into history (`Right`, `Wrong`, `student_name`, `Quiz_name`, `Marks`) VALUES ('$right','$wrong','$sname','$name','$total')");
            if($query){
                echo "<script> alert('Thank you');location.replace('Result.php?QuizName=$name')</script>";
              
            }else{
                echo "<script> alert('Please try Again')</script>";
            }
        }
    }

      
      
}
?>