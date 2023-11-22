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
            <p>Guidance and Testing Center</p><br>
            <p>STUDENT'S COPY</p>
        </div>
    </div>

    <br />
    <?php
    $id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id = $id");
    while ($row = mysqli_fetch_array($squery)) {
    ?>
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group" style="justify-content: center">
                    Name : <?php echo $row['name'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="input-group" >
                   Previous School :  <?php echo $row['prev_school'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="dropdown">
                    Sex : <?php $gen = $row['gender'];
                                echo $gen; ?>

                </div>


            </div>
            <br><br><br>
            
            <div id="info" class="col-4">
                <div class="dropdown">
                    Test Date : <?php $tes = $row['test_date'];
                                echo $tes; ?>

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
                                    <?php $sas = $row['school_ability_score'];
                                        echo $sas; ?>

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
                                    <?php $avs = $row['apt_verbal_score'];
                                            echo $avs; ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>

                        <td> <?php echo $avsp; ?> </td>

                        <td> <?php echo $avsn; ?> </td>

                    </tr>
                    <tr>
                        <td>Aptitude Numerical</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <?php $ans = $row['apt_numerical_score'];
                                            echo $ans; ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>

                        <td> <?php echo $ansp; ?> </td>

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
            <br>
        </div>
    </div>
</div>


<div id="form" class="container border mt-4 text-center">
    <div class="d-flex justify-content-center mt-3">
        <div class="logo">
            <img class="school-logo" src="../assets/img/NDDUseal.png" />
        </div>
        <div class="name">
            <h4>Notre Dame of Dadiangas University</h4>
            <h6>Marist Avenue, General Santos City</h6>
            <p>Guidance and Testing Center</p><br>
            <p>GUIDANCE'S COPY</p>
        </div>
    </div>

    <br />
    <?php
    $id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id = $id");
    while ($row = mysqli_fetch_array($squery)) {
    ?>
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group" style="justify-content: center">
                    Name : <?php echo $row['name'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="input-group" >
                   Previous School :  <?php echo $row['prev_school'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="dropdown">
                    Sex : <?php $gen = $row['gender'];
                                echo $gen; ?>

                </div>


            </div>
            <br><br><br>

            <div id="info" class="col-4">
                <div class="dropdown">
                    Test Date : <?php $tes = $row['test_date'];
                                echo $tes; ?>

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
                                    <?php $sas = $row['school_ability_score'];
                                        echo $sas; ?>

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
                                    <?php $avs = $row['apt_verbal_score'];
                                            echo $avs; ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>

                        <td> <?php echo $avsp; ?> </td>

                        <td> <?php echo $avsn; ?> </td>

                    </tr>
                    <tr>
                        <td>Aptitude Numerical</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <?php $ans = $row['apt_numerical_score'];
                                            echo $ans; ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>

                        <td> <?php echo $ansp; ?> </td>

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
            <br>
        </div>
    </div>
</div>

<div class="print-tool">
    <a href="edit.php?id=<?php echo $id;?>" class="btn btn-outline-success" id="edit-btn">Edit</a>
    </button>
    <button class="btn btn-outline-success" id="print-btn" onclick="printPage()">
        Print
    </button>
    <a href="../students/students.php" class="btn btn-outline-success" id="back-btn">Back</a>
</div>

</html>

<?php
if(isset($_GET['id']))
{
    $rn = $_GET['id'];
    $total = $sas + $avs + $ans;

    $query = "UPDATE students SET school_ability_sn = '$sasn', school_ability_percentile = '$sasp',  
    apt_verbal_sn = '$avsn', apt_verbal_percentile = '$avsp', 
    apt_numerical_sn = '$ansn', apt_numerical_percentile = '$ansp', total_score = '$total' WHERE id = '$rn' ";
    mysqli_query($conn, $query);
}
?>