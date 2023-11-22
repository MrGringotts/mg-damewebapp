<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/cropped-NDDU-Site-Favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <title>NDDU Document</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"> <img class="school-logo" src="../assets/img/nddu-logo.png"> </label>
        <ul>
            <li><a class="active" href="../results/results.php"><b>Results</b></a></li>
            <li><a href="../students/students.php">Students</a></li>
            <li><a href="../about/summary.php">Summary</a></li>
            <li><a href="../logout.php">Log Out</a></li>
        </ul>
    </nav>
    <?php include "../include/loader.php"; ?>
    <div id="form" class="container border mt-4 text-center">
        <div class="d-flex justify-content-center mt-3">
            <div class="logo">
                <img class="school-logo" src="../assets/img/NDDUseal.png">
            </div>
            <div class="name">
                <h4>Notre Dame of Dadiangas University</h4>
                <h6>Marist Avenue, General Santos City</h6>
                <p>Guidance and Testing Center</p>
            </div>

        </div>

        

        <br>
        <form action="add-records.php" method="post" enctype="multipart/form-data">
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group">
                    <span class="input-group-text">Name</span>
                    <input type="text" name="name" class="form-control shadow-none" style="text-transform: uppercase" placeholder="Student's Full Name" required>
                </div>
            </div>


            <div id="info" class="col-4">
                <div class="input-group" style="width: 90%;">
                    <span class="input-group-text">Prev. School</span>
                    <input type="text" name="prev_school" class="form-control shadow-none" style="text-transform: uppercase;" placeholder="Previous School" required>
                </div>
            </div>

            <div id="info" class="col-4">
                <span class="input-group-text">SEX</span>
                    <select name="gender" class="btn dropdown-toggle form-select shadow-none" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" required>
                     
                        <option selected>SELECT SEX</option>
                        <option class="dropdown-item" value="FEMALE">FEMALE</option>
                        <option class="dropdown-item" value="MALE">MALE</option>

                    </select>

               
            </div>
            


        </div>
        
        <br><br>
        <div id="form-input" class="row g-2">

        <div id="info" class="col-4">
                <div class="input-group" style="width: 90%;">
                    <span class="input-group-text">Test Date</span>
                    <input type="date" name="test_date" required>
                </div>
            </div>

            <div id="info" class="col-4">
            <span class="input-group-text">S.Y.</span>
                
                    <select name="school_year" class="btn dropdown-toggle form-select shadow-none" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" required>
                     
                        <option selected>SELECT SCHOOL YEAR</option>
                        <option class="dropdown-item" value="2022-2023">2022-2023</option>
                        <option class="dropdown-item" value="2023-2024">2023-2024</option>
                        <option class="dropdown-item" value="2024-2025">2024-2025</option>
                        <option class="dropdown-item" value="2025-2026">2025-2026</option>
                        <option class="dropdown-item" value="2026-2027">2026-2027</option>
                        <option class="dropdown-item" value="2027-2028">2027-2028</option>
                        <option class="dropdown-item" value="2029-2030">2029-2030</option>
                        <option class="dropdown-item" value="2030-2031">2030-2031</option>
                        <option class="dropdown-item" value="2031-2032">2031-2032</option>
                        <option class="dropdown-item" value="2032-2033">2032-2033</option>
                        <option class="dropdown-item" value="2033-2034">2033-2034</option>
                        <option class="dropdown-item" value="2034-2035">2034-2035</option>
                        <option class="dropdown-item" value="2035-2036">2035-2036</option>
                        <option class="dropdown-item" value="2036-2037">2036-2037</option>
                        <option class="dropdown-item" value="2037-2038">2037-2038</option>
                        <option class="dropdown-item" value="2038-2039">2038-2039</option>
                        <option class="dropdown-item" value="2039-2040">2039-2040</option>
                        
                    </select>
                
            </div>
            
            <div id="info" class="col-4">
            <span class="input-group-text">SEM</span>
                
                    <select name="semester" class="btn dropdown-toggle form-select shadow-none" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" required>
                        <option selected>SEM</option>
                        <option class="dropdown-item" value="1">1</option>
                        <option class="dropdown-item" value="2">2</option>
                    </select>
                
            </div>

        </div>






        <div>
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
                                    <input type="text" name="school_ability_score" class="form-control shadow-none" placeholder="insert score" required>
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Aptitude Verbal</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <input type="text" name="apt_verbal_score" class="form-control shadow-none" placeholder="insert score" required>
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Aptitude Numerical</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <input type="text" name="apt_numerical_score" class="form-control shadow-none" placeholder="insert score" required>
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="signature-div">
            <div id="wrapper" class="wrapper clearfix">
            </div>
        </div>
    </div>

    <div class="btn-toolbar">
        <button type="submit" id="btn" name="add_official_btn" class="btn btn-outline-success" >Save Changes</button>
        
    </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>