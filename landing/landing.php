<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../CSS/slider.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    <style>
      * {
        margin: 0px;
        padding: 0px;
      }
      nav {
        background-image: linear-gradient(-90deg, #d38312, #b92a80);
        padding: 1rem 1rem 1rem 1rem;
        position: relative;
      }
      .first {
        color: black;
      }
      nav li {
        list-style: none;
        padding: 0rem 0rem;
        display: inline-block;
        font-size: 3vh;

      }
      .second {
        margin-left: 8vw;
        color: white;

        position: relative;
      }
      nav button{
        width: 10vw;
        height: 6vh;
        border-radius: 2vh;
        margin-left: 65vw;
        /* box-shadow: none; */
        outline: none;
        transition: 0.5s;
        background-color: #bc3062;
        font-size: 3vh;
        top: 2vh;
        color: lavenderblush;
      }
      
      .second:hover {
        color: lightpink;
        transition: 0.5s;
      }
      .cards {
        height: 100vh;
        width: 100vw;
        background-color: #bc3062;
        color: white;
        position: absolute;
        top: 100vh;
        display: block;
      }
      .cards h1 {
        text-align: center;
        color: white;
        margin-top: 4vh;
      }

      .c1 {
        width: 35%;
        height: 80%;
        background-color: blanchedalmond;
        position: absolute;
        top: 15vh;
        margin-left: 10vw;
        border-radius: 20px;
        box-shadow: 5px 10px 10px gold;
      }
      .c2 {
        width: 35%;
        height: 80%;
        background-color: blanchedalmond;
        position: absolute;
        top: 15vh;
        margin-left: 56vw;
        border-radius: 20px;
        box-shadow: 5px 10px 10px gold;
      }
      .c1 img {
        display: block;
        position: absolute;
        height: 60%;
        top: 18vh;
      }
      .c2 img {
        display: block;
        position: absolute;
        height: 60%;
        top: 18vh;
      }
      .c1 h1 {
        position: absolute;
        top: 40vh;
        margin-left: 12vw;
        color: black;
        font-size: 7vh;
      }
      .c2 h1 {
        position: absolute;
        top: 40vh;
        margin-left: 12vw;
        color: black;
        font-size: 7vh;
      }
      .c1 button {
        height: 8vh;
        width: 12vw;
        position: absolute;
        top: 60vh;
        left: 12vw;
        background-color: gold;
        border-radius: 6px;
        outline: none;
        transition: 0.5s;
        font-size: 3vh;
        color: white;
        border: none;
      }
      .c2 button {
        height: 8vh;
        width: 12vw;
        position: absolute;
        top: 60vh;
        left: 12vw;
        background-color: gold;
        border-radius: 6px;
        outline: none;
        transition: 0.5s;
        font-size: 3vh;
        color: white;
        border: none;
      }
      .menu {
        position: absolute;
        background-color: darkcyan;
        width: 100%;
        height: 80vh;
        top:202vh;
      }
      .menu h1{
        text-align: center;
        position: absolute;
        left: 40vw;
        top: 5vh;
      }
      .menu ul {
        list-style-type: none;
      
      }
      .menu li {
        display: inline-block;
        position: absolute;
        top: 20vh;
      }
       .circle {
        border-radius: 140px;
        width:30vh;
        height: 30vh;
        background-color:hotpink;
        background-image: url(img2.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        left: 10vw;
        position: absolute;
        top: 20vh;
      }
       .circle1 {
        border-radius: 140px;
        width:30vh;
        height: 30vh;
        background-color: red;
        position: absolute;
        top: 20vh;
        left: 30vw;
        background-image: url(img4.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;


      }
      .circle2 {
        border-radius: 140px;
        width:30vh;
        height: 30vh;
        background-color: #00b4ff;
        left: 50vw;
        position: absolute;
        top: 20vh;
        background-image: url(img3.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
      .circle3 {
        border-radius: 140px;
        width:30vh;
        height: 30vh;
        background-color: green;
        left: 70vw;
        position: absolute;
        top: 20vh;
        background-image: url(img1.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
      li span{
        position: absolute;
        top: 33vh;
        left: 8vh;
        color:black;
        font-size: 2.5vh;
      }
      .s{
        position:absolute;
        right:3vw;
        color: lavenderblush;
        background-color: #bc3062;
      }
      *{
        padding:0;margin:0;
        }
        body{
        font-family: 'RocknRoll One', sans-serif;
        }
    </style>
  </head>
  <body>
    <nav>
      <ul class="first">
        <li>
          <b
            style="
              font-size: 2vw;
              text-shadow: -3px -3px 3px cyan, 3px 3px 3px orangered;
            "
            >Quickzzy</b
          >
        </li>
        
        <!-- <button class = "btn" onclick="location.href = 'Student/Student_Signup.php';">Signup</button>
        <button class = "btn1" onclick="location.href = 'Teacher/Teacher_Signup.php';">Signup</button> -->
        <li class="nav-item mx-0 s" >
              <div class="dropdown show" >
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Signup
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="../Student/Student_Signup.php">Student</a>
                  <a class="dropdown-item" href="../Teacher/Teacher_Signup.php">Teacher</a>
                </div>
              </div>
        
        </li>
      </ul>
    </nav>
    <div class="banner1">
      <img src="first.jpeg" />

      <div class="text box">
        <h1>The 100% engagement platform</h1>
        <span></span>
        <br />
        <p>
          Find and create free gamified quizzes and interactive<br />
          lessons to engage any learner.
        </p>
        <!-- <button onclick="location.href = 'login.html'; ">Login</button> -->
      </div>
    </div>
    <div class="banner2">
      <img src="quiz-5351649_1920.png" />
      <div class="text box1">
        <h1>The 100% engagement platform</h1>
        <span></span>
        <br />
        <p>
          Find and create free gamified quizzes and interactive<br />
          lessons to engage any learner.
        </p>
        <!-- <button onclick="location.href = 'login.html'; ">Login</button> -->
      </div>
    </div>
    <div class="banner3">
      <img src="question-2004314_1920.jpg" />
      <div class="text box2">
        <h1>The 100% engagement platform</h1>
        <span></span>
        <br />
        <p>
          Find and create free gamified quizzes and interactive<br />
          lessons to engage any learner.
        </p>
        <!-- <button onclick="location.href = 'login.html'; ">Login</button> -->
      </div>
    </div>

    <div class="cards">
      <h1><b>Learn more about Quickzzy</b></h1>
      <div class="c1">
        <img src="../Images/5-PRODUCT_LINEUP-For_Work.png" />
        <h1>Teacher</h1>

        <a href="../Teacher/Teacher_login.php"><button>Login</button></a>
      </div>
      <div class="c2">
        <img src="../Images/5-PRODUCT_LINEUP-For_Teachers.png" />
        <h1>Student</h1>
        <a href="../Student/Student_login.php"><button>Login</button></a>
      </div>
    </div>
    <div class="menu text-center">
      <h1 class="mx-5"><b> Team</b></h1>
      <ul >
        <li class="circle">
          <span>Mansi Verma </span>
        </li>
        <li class="circle1">
          <span>Diksha Khandelwal</span>
        </li>
        <li class="circle2">
          <span>Tanya Goyal</span>
        </li>
        <li class="circle3">
          <span>Diya Gupta</span>
        </li>
      </ul>
    </div>
  </body>
</html>
