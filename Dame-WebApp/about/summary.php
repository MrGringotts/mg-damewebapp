<?php
session_start();
include "../db/config.php";

function display(){
  
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NDDU Summary</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../assets/img/cropped-NDDU-Site-Favicon.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/main.js" defer></script>
</head>

<body>
    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo"> <img class="school-logo" src="../assets/img/nddu-logo.png"> </label>
    <ul>
      <li><a href="../results/results.php">Results</a></li>
      <li><a href="../students/students.php">Students</a></li>
      <li><a class="active" href="../about/summary.php"><b>Summary</b></a></li>
      <li><a href="../logout.php">Log Out</a></li>
    </ul>
  </nav>
  <?php include "../include/loader.php"; ?>
  <section>
    <div class="container">
      <table class="table table-hover">

      <form action="" method="post">

      <br>
      <input type="text" name="entry" style="width: 300px">
      <button class="btn btn-outline-success" name="search" style="margin-left: 10px">Search</button>
      <button class="btn btn-outline-success" name="clear" style="margin-left: 10px">Clear</button><br><br>
  
      <div id="info" class="col-4">
            <span class="input-group-text" style="background-color: #0c5c04; color: white">S.Y.</span>
                
                    <select name="acad_year" class="btn dropdown-toggle form-select shadow-none" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" required>
                     
                        <?php include("option.php") ?>
                        
                    </select>
                
            </div>

      <button class="btn btn-outline-success" name="first" style="margin-left: 10px">Sem-1</button>
      <button class="btn btn-outline-success" name="second" style="margin-left: 10px">Sem-2</button>
      <br><br>

 
          <input type="hidden" name="sem" style="width: 100px; text-align: center" value="<?php 
          if(isset($_POST['first']))
          {
              $ay = $_POST['acad_year'];
              echo $ay;
          }elseif(isset($_POST['second']))
          {
              $ay = $_POST['acad_year'];
              echo $ay;
          }           
          elseif(isset($_POST['search'])){

            $ay = $_POST['acad_year'];
            echo $ay;
          }

          
          ?>">
  
      

          Semester : <input type="text" name="sem" style="width: 30px; text-align: center" value="<?php 
          if(isset($_POST['first']))
          { 
            $sem = '1'; 
            echo $sem;
          }elseif(isset($_POST['second']))
          { 
            $sem = '2'; 
            echo $sem;
          }else
          ?>">
 



        <thead style="text-align: center">
          <tr style="font-size: 18px">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Previous School</th>
            <th scope="col">S.Y.</th>
            <th scope="col">Sem</th>
            <th scope="col">School Ability Score</th>
            <th scope="col">Aptitude Verbal Score</th>
            <th scope="col">Aptitude Numerical Score</th>
            <th scope="col">Total Score</th>
          </tr>
        </thead>


        <tbody style="text-align: center">

          <?php include("display.php"); ?>

        </tbody>
      </table>
    </div>
  </section>
</body>

</html>