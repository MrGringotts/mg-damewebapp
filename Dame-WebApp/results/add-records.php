<?php
include "../db/config.php";
if (isset($_POST['add_official_btn'])) {

    $name = strtoupper($_POST['name']);
    $prev_school = strtoupper($_POST['prev_school']);
    $gender = $_POST['gender'];
    $test_date = $_POST['test_date'];
    $school_year = $_POST['school_year'];
    $semester = $_POST['semester'];
    $school_ability_score= $_POST['school_ability_score'];
    $apt_verbal_score = $_POST['apt_verbal_score'];
    $apt_numerical_score = $_POST['apt_numerical_score'];
    $school_ability_sn = $_POST['school_ability_sn'];
    $apt_verbal_sn = $_POST['apt_verbal_sn'];
    $apt_numerical_sn = $_POST['apt_numerical_sn'];
   

    $sql = "INSERT INTO `students`(
                    `name`,
                    `prev_school`,
                    `gender`,
                    `test_date`,
                    `school_year`,
                    `semester`,
                    `school_ability_score`,
                    `apt_verbal_score`, 
                    `apt_numerical_score`,
                    `school_ability_sn`,
                    `apt_verbal_sn`,
                    `apt_numerical_sn` ) 
            
            VALUES     (
                        '$name',
                        '$prev_school ',
                        '$gender',
                        '$test_date',
                        '$school_year',
                        '$semester',
                        '$school_ability_score',
                        '$apt_verbal_score',
                        '$apt_numerical_score',
                        '$school_ability_sn',
                        '$apt_verbal_sn',
                        '$apt_numerical_sn' 
                        
                        )";

    mysqli_query($conn, $sql);
    header("location: ../students/students.php");
}
// if (mysqli_query($connect, $sql)) {
//     echo "New record created successfully";}

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
