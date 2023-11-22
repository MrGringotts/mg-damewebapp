<?php
include "../db/config.php";
include "../print/sasn.php";
include "../print/avsn.php";
include "../print/ansn.php";


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/img/cropped-NDDU-Site-Favicon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <title>NDDU Document</title>
</head>

<div id="form" class="container border mt-4 text-center">
    <div class="d-flex justify-content-center mt-3">
        <div class="logo">
            <img class="school-logo" src="../assets/img/NDDUseal.png" />
        </div>
        <div class="name">
            <h4>Notre Dame of Dadiangas University</h4>
            <h6>Marist Avenue, General Santos City</h6>
            <p>Guidance and Testing Center</p>
        </div>
    </div>

    <br />
    <?php
    $id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id = $id");
    while ($row = mysqli_fetch_array($squery)) {
    ?>
    <form action="" method="POST">
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group" style="justify-content: center">
                    Name: <?php $name = $row['name'];
                                echo $name; ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="input-group" >
                   Previous School:  <?php echo $row['prev_school'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="dropdown">
                    Gender: <?php $gen = $row['gender'];
                                echo $gen; ?>

                </div>


            </div>
        </div>
       
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Type of Test</th>
                        <th>Raw Score</th>
                        <th>Percent Rank</th>
                        <th>Standard Nine</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>School Ability</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">

                                <input type="text" style="width: 40px; text-align: center;" name="ability" value="<?php
                                $rn = $_GET['id'];
                                $query = "SELECT * FROM students WHERE id = '$rn' ";
                                $sas =  $row['school_ability_score'];
                                echo $sas;

                                ?>">

                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>
                    
                        <td> <?php echo $sasp; ?></td>

                        <td> <?php echo $sasn; ?> </td>
                        
                    </tr>
                    <tr>
                        <td>Aptitude Verbal</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">

                                <input type="text" style="width: 40px; text-align: center;" name="verbal" value="<?php
                                $rn = $_GET['id'];
                                $query = "SELECT * FROM students WHERE id = '$rn' ";
                                $avs =  $row['apt_verbal_score'];
                                echo $avs;

                                ?>">
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>

                        <td> <?php echo $avsp; ?></td>

                        <td> <?php echo $avsn; ?> </td>

                    </tr>
                    <tr>
                        <td>Aptitude Numerical</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                
                                <div class="input-group">

                                <input type="text" style="width: 40px; text-align: center;" name="numerical" value="<?php
                                $rn = $_GET['id'];
                                $query = "SELECT * FROM students WHERE id = '$rn' ";
                                $ans =  $row['apt_numerical_score'];
                                echo $ans;

                                ?>">

                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>

                        <td> <?php echo $ansp; ?></td>

                        <td> <?php echo $ansn; ?> </td>

                    </tr>
                </tbody>
            </table>
     
    <?php
    }
    ?>
    <br />
    <div class="wrapper clearfix">
        <div class="float-start">
            <h4>________________</h4>
            <h6>Applicant's Signature</h6>
        </div>
    </div>
</div>
<div class="print-tool">


<button type="submit" class="btn btn-outline-success" name="save">Save</button>

    <a href="print.php?id=<?php echo $id;?>" class="btn btn-outline-success">Back</a>
</div>
</form>
<?php

if(isset($_POST['save']))
{
    $ability = $_POST['ability'];
    $verbal = $_POST['verbal'];
    $numerical = $_POST['numerical'];

    $sql="UPDATE students SET school_ability_score = '$ability', apt_verbal_score = '$verbal', 
    apt_numerical_score = '$numerical' WHERE name = '$name' ";
    $result = mysqli_query($conn, $sql);
    
}

?>

</html>
