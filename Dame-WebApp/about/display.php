<?php
if(isset($_POST['search'])){
  $res = $_POST["entry"];

  $squery =  mysqli_query($conn, "select * from students WHERE name LIKE '%$res%' AND school_year = '$ay'");
  while ($row = mysqli_fetch_array($squery)) {
      ?>
        <tr>
        <td scope="row"><?php echo $row['id'] ?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['prev_school'] ?></td>
          <td style="width: 120px"><?php echo $row['school_year'] ?></td>
          <td><?php echo $row['semester'] ?></td>
          <td><?php echo $row['school_ability_score']?></td>
          <td><?php echo $row['apt_verbal_score']?></td>
          <td><?php echo $row['apt_numerical_score']?></td>
          <td><?php echo $row['total_score']?></td>
        </tr>
      <?php
      }#while

}elseif(isset($_POST['first'])){

              $ay = $_POST['acad_year'];
              $squery =  mysqli_query($conn, "select * from students WHERE school_year = '$ay' AND semester = '1' ORDER BY total_score DESC");
              while ($row = mysqli_fetch_array($squery)) {
              ?>
                <tr>
                <td scope="row"><?php echo $row['id'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['prev_school'] ?></td>
                  <td style="width: 120px"><?php echo $row['school_year'] ?></td>
                  <td><?php echo $row['semester'] ?></td>
                  <td><?php echo $row['school_ability_score']?></td>
                  <td><?php echo $row['apt_verbal_score']?></td>
                  <td><?php echo $row['apt_numerical_score']?></td>
                  <td><?php echo $row['total_score']?></td>
                </tr>
              <?php
              }#while
            }#elseif 
            elseif(isset($_POST['second'])){
              $ay = $_POST['acad_year'];
              $squery =  mysqli_query($conn, "select * from students WHERE school_year = '$ay' AND semester = '2' ORDER BY total_score DESC");
              while ($row = mysqli_fetch_array($squery)) {
              ?>
                <tr>
                <td scope="row"><?php echo $row['id'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['prev_school'] ?></td>
                  <td style="width: 120px"><?php echo $row['school_year'] ?></td>
                  <td><?php echo $row['semester'] ?></td>
                  <td><?php echo $row['school_ability_score']?></td>
                  <td><?php echo $row['apt_verbal_score']?></td>
                  <td><?php echo $row['apt_numerical_score']?></td>
                  <td><?php echo $row['total_score']?></td>
                </tr>
              <?php
              }#while
            }#elseif 
?>