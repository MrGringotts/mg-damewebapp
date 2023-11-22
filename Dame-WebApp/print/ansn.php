<?php

$id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id=$id");
    while ($row = mysqli_fetch_array($squery)) {

    $gen = $row['gender'];
    $ans = $row['apt_numerical_score'];
    if($gen == 'Female')
    {
        if($ans <= '7'){
            $ansn = "1";
        }

        elseif($ans == '8' || $ans == '9' || $ans == '10' || 
        $ans == '11' )
        {
            $ansn = "2";
        }

        elseif($ans == '12' || $ans == '13' || $ans == '14')
        {
            $ansn = "3";
        }

        elseif($ans == '15' || $ans == '16' || $ans == '17' || $ans == '18' 
        || $ans == '19' || $ans == '20')
        {
            $ansn = "4";
        }

        elseif($ans == '21' || $ans == '22' || $ans == '23' || $ans == '24' 
        || $ans == '25' || $ans == '26' )
        {
            $ansn = "5";
        }

        elseif($ans == '27' || $ans == '28' || $ans == '29' 
        || $ans == '30' || $ans == '31' )
        {
            $ansn = "6";
        }

        elseif($ans == '32' || $ans == '33' || $ans == '34' || $ans == '35' )
        {
            $ansn = "7";
        }

        elseif($ans == '36' || $ans == '37' )
        {
            $ansn = "8";
        }

        elseif($ans == '38' || $ans == '39' || $ans == '40' )
        {
            $ansn = "9";
        }

        else
        {
            $ansn = "NS";
        }
    }
    else #MALEMALEMALEMALEMALE
    {
        if($ans <= '7'){
            $ansn = "1";
        }

        elseif($ans == '8' || $ans == '9' || $ans == '10' || 
        $ans == '11' )
        {
            $ansn = "2";
        }

        elseif($ans == '12' || $ans == '13' || $ans == '14' || $ans == '15')
        {
            $ansn = "3";
        }

        elseif( $ans == '16' || $ans == '17' || $ans == '18' 
        || $ans == '19' || $ans == '20' || $ans == '21' || $ans == '22' )
        {
            $ansn = "4";
        }

        elseif($ans == '23' || $ans == '24' || $ans == '25' || $ans == '26' 
        || $ans == '27' || $ans == '28' )
        {
            $ansn = "5";
        }

        elseif($ans == '29' || $ans == '30' || $ans == '31' 
        || $ans == '32' || $ans == '33' )
        {
            $ansn = "6";
        }

        elseif($ans == '34' || $ans == '35' || $ans == '36')
        {
            $ansn = "7";
        }

        elseif($ans == '37' || $ans == '38' )
        {
            $ansn = "8";
        }

        elseif($ans == '39' || $ans == '40' )
        {
            $ansn = "9";
        }

        else
        {
            $ansn = "NS";
        }
        
    }
}

?>

<?php

$id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id=$id");
    while ($row = mysqli_fetch_array($squery)) {

    $gen = $row['gender'];
    $ans = $row['apt_numerical_score'];

    if($gen == 'Female')
    {
        if($ans <= '5'){
            $ansp = "1";
        }

        elseif($ans == '6' || $ans == '7' )
        {
            $ansp = "3";
        }

        elseif($ans == '8' || $ans == '9' )
        {
            $ansp = "5";
        }

        elseif($ans == '10' || $ans == '11' )
        {
            $ansp = "10";
        }

        elseif($ans == '12' || $ans == '13' )
        {
            $ansp = "15";
        }

        elseif($ans == '14')
        {
            $ansp = "20";
        }

        elseif($ans == '15' || $ans == '16' )
        {
            $ansp = "25";
        }

        elseif($ans == '17' || $ans == '18' )
        {
            $ansp = "30";
        }

        elseif($ans == '19')
        {
            $ansp = "35";
        }
        
        elseif($ans == '20' || $ans == '21' )
        {
            $ansp = "40";
        }
        
        elseif($ans == '22')
        {
            $ansp = "45";
        }

        elseif($ans == '23')
        {
            $ansp = "50";
        }
         
        elseif($ans == '24' || $ans == '25' )
        {
            $ansp = "55";
        }
        
        elseif($ans == '26')
        {
            $ansp = "50";
        }
                 
        elseif($ans == '27' || $ans == '28' )
        {
            $ansp = "65";
        }  

        elseif($ans == '29')
        {
            $ansp = "70";
        }
                  
        elseif($ans == '30' || $ans == '31' )
        {
            $ansp = "75";
        } 
                  
        elseif($ans == '32')
        {
            $ansp = "80";
        } 
                  
        elseif($ans == '33' || $ans == '34' )
        {
            $ansp = "85";
        } 
                  
        elseif($ans == '35' || $ans == '36' )
        {
            $ansp = "90";
        }
                          
        elseif($ans == '37')
        {
            $ansp = "95";
        } 
                          
        elseif($ans == '38')
        {
            $ansp = "97";
        }
                          
        elseif($ans == '39' || $ans == '40' )
        {
            $ansp = "99";
        }

        else
        {
            $ansp = "NS";
        }

    }#else female

    else #MALEMALEMALEMALEMALE
    {
        if($ans <= '5'){
            $ansp = "1";
        }

        elseif($ans == '6' || $ans == '7')
        {
            $ansp = "3";
        }
        
        elseif($ans == '8' || $ans == '9')
        {
            $ansp = "5";
        }
        
        elseif($ans == '10' || $ans == '11')
        {
            $ansp = "10";
        }
        
        elseif($ans == '12' || $ans == '13')
        {
            $ansp = "15";
        }
        
        elseif($ans == '14' || $ans == '15')
        {
            $ansp = "20";
        }
        
        elseif($ans == '16' || $ans == '17')
        {
            $ansp = "25";
        }
        
        elseif($ans == '18' || $ans == '19')
        {
            $ansp = "30";
        }
        
        elseif($ans == '20' || $ans == '21')
        {
            $ansp = "35";
        }
        
        elseif($ans == '22' || $ans == '23')
        {
            $ansp = "40";
        }
        
        elseif($ans == '24')
        {
            $ansp = "45";
        }
        
        elseif($ans == '25' || $ans == '26')
        {
            $ansp = "50";
        }
        
        elseif($ans == '27' )
        {
            $ansp = "55";
        }
        
        elseif($ans == '28' || $ans == '29')
        {
            $ansp = "60";
        }

        elseif($ans == '30')
        {
            $ansp = "65";
        }
        
        elseif($ans == '31' || $ans == '32')
        {
            $ansp = "70";
        }
        
        elseif($ans == '33')
        {
            $ansp = "75";
        }
        
        elseif($ans == '34')
        {
            $ansp = "80";
        }
        
        elseif($ans == '35')
        {
            $ansp = "85";
        }
        
        elseif($ans == '36' || $ans == '37')
        {
            $ansp = "90";
        }
        
        elseif($ans == '38')
        {
            $ansp = "95";
        }
        
        elseif($ans == '39')
        {
            $ansp = "97";
        }
        
        elseif($ans == '40')
        {
            $ansp = "99";
        }

        else
        {
            $ansp = "NS";
        }
        

    }#else male

}#while

?>