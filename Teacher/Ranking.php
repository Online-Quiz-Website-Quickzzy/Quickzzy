<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Teacher_login.php');
$page='Ranking';
include('Teacher_Structure.php');
?>
    <main class="col-md mx-auto mt-2 ms-sm-auto col-lg-9 text-center">
        <div class="container text-center">
            <h2><b>Ranking</b></h2>
            <hr class="col-sm-5 mx-auto">
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>Rank</th>
                <th>Student Name</th>
                <th>Score</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>random</td>
                <td>10</td>
                <td>10</td>
              </tr>
              <tr>
                <td>random</td>
                <td>10</td>
                <td>10</td>
              </tr>
                            <tr>
                <td>random</td>
                <td>10</td>
                <td>10</td>
              </tr>
             
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