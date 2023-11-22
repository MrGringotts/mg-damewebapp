<?php

$id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id=$id");
    while ($row = mysqli_fetch_array($squery)) {

    $sas = $row['school_ability_score'];

    if($sas <= '16'){
        $sasn = "1";
    }
    
    elseif($sas == '17' || $sas == '18' || $sas == '19' || 
    $sas == '20' || $sas == '21' || $sas == '22' || $sas == '23')
    {
        $sasn = "2";

    }
    
    elseif($sas == '24' || $sas == '25' || $sas == '26' || 
    $sas == '27' || $sas == '28' || $sas == '29' || $sas == '30')
    {
        $sasn = "3";

    }
    
    elseif($sas == '31' || $sas == '32' || $sas == '33' || $sas == '34' 
    || $sas == '35' || $sas == '36' || $sas == '37' || $sas == '38')
    {
        $sasn = "4";

    }
    
    elseif($sas == '39' || $sas == '40' || $sas == '41' || $sas == '42' || $sas == '43' 
    || $sas == '44' || $sas == '45' || $sas == '46' || $sas == '47')
    {
        $sasn = "5";

    }
    
    elseif($sas == '48' || $sas == '49' || $sas == '50' || $sas == '51' || $sas == '52' 
    || $sas == '53' || $sas == '54' || $sas == '55')
    {
        $sasn = "6";
 
    }
    
    elseif($sas == '56' || $sas == '57' || $sas == '58' || $sas == '59' 
    || $sas == '60' || $sas == '61' || $sas == '62')
    {
        $sasn = "7";

    }

    elseif($sas == '63' || $sas == '64' || $sas == '65' || $sas == '66' 
    || $sas == '67' || $sas == '68' || $sas == '69')
    {
        $sasn = "8";

    }

    elseif($sas >= '70')
    {
        $sasn = "9";

    }
    else
    {
        $sasn = "NS";
    }
   
    }

?>

<?php

$id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id=$id");
    while ($row = mysqli_fetch_array($squery)) {

    $sas = $row['school_ability_score'];

    if($sas <= '13'){
        $sasp = "1";
    }
    
    elseif($sas == '14' || $sas == '15')
    {
        $sasp = "2";

    }
    
    elseif($sas == '16')
    {
        $sasp = "3";

    }
    
    elseif($sas == '17')
    {
        $sasp = "4";

    }
    
    elseif($sas == '18')
    {
        $sasp = "5";

    }
    
    elseif($sas == '19')
    {
        $sasp = "6";

    }
    
    elseif($sas == '20')
    {
        $sasp = "7";

    }

    elseif($sas == '21')
    {
        $sasp = "8";

    }

    elseif($sas == '22')
    {
        $sasp = "9";

    }

    elseif($sas == '23')
    {
        $sasp = "10";

    }

    elseif($sas == '24')
    {
        $sasp = "11";

    }

    elseif($sas == '25')
    {
        $sasp = "13";

    }
        
    elseif($sas == '26')
    {
        $sasp = "14";

    }
       
    elseif($sas == '27')
    {
        $sasp = "16";

    }
       
    elseif($sas == '28')
    {
        $sasp = "17";

    }
       
    elseif($sas == '29')
    {
        $sasp = "19";

    }
    
    elseif($sas == '30')
    {
        $sasp = "21";

    }
       
    elseif($sas == '31')
    {
        $sasp = "23";

    }
   
    elseif($sas == '32')
    {
        $sasp = "25";

    }
       
    elseif($sas == '33')
    {
        $sasp = "27";

    }
       
    elseif($sas == '34')
    {
        $sasp = "29";

    }
       
    elseif($sas == '35')
    {
        $sasp = "31";

    }
       
    elseif($sas == '36')
    {
        $sasp = "33";

    }
       
    elseif($sas == '37')
    {
        $sasp = "35";

    }
       
    elseif($sas == '38')
    {
        $sasp = "38";

    }
       
    elseif($sas == '39')
    {
        $sasp = "40";

    }
       
    elseif($sas == '40')
    {
        $sasp = "42";

    }
        
    elseif($sas == '41')
    {
        $sasp = "44";

    }
       
    elseif($sas == '42')
    {
        $sasp = "46";

    }
       
    elseif($sas == '43')
    {
        $sasp = "49";

    }
       
    elseif($sas == '44')
    {
        $sasp = "51";

    }
       
    elseif($sas == '45')
    {
        $sasp = "54";

    }
       
    elseif($sas == '46')
    {
        $sasp = "56";

    }
       
    elseif($sas == '47')
    {
        $sasp = "58";

    }
       
    elseif($sas == '48')
    {
        $sasp = "61";

    }
       
    elseif($sas == '49')
    {
        $sasp = "63";

    }
       
    elseif($sas == '50')
    {
        $sasp = "65";

    }
          
    elseif($sas == '51')
    {
        $sasp = "67";

    }
          
    elseif($sas == '52')
    {
        $sasp = "69";

    }
          
    elseif($sas == '53')
    {
        $sasp = "71";

    }
          
    elseif($sas == '54')
    {
        $sasp = "73";

    }
          
    elseif($sas == '55')
    {
        $sasp = "75";

    }
          
    elseif($sas == '56')
    {
        $sasp = "77";

    }
          
    elseif($sas == '57')
    {
        $sasp = "79";

    }
          
    elseif($sas == '58')
    {
        $sasp = "81";

    }
          
    elseif($sas == '59')
    {
        $sasp = "83";

    }
          
    elseif($sas == '60')
    {
        $sasp = "85";

    }
             
    elseif($sas == '61')
    {
        $sasp = "86";

    }
             
    elseif($sas == '62')
    {
        $sasp = "88";

    }
             
    elseif($sas == '63')
    {
        $sasp = "89";

    }
             
    elseif($sas == '64')
    {
        $sasp = "90";

    }
             
    elseif($sas == '65')
    {
        $sasp = "91";

    }
             
    elseif($sas == '66')
    {
        $sasp = "92";

    }
             
    elseif($sas == '67')
    {
        $sasp = "93";

    }
             
    elseif($sas == '68')
    {
        $sasp = "94";

    }
             
    elseif($sas == '69')
    {
        $sasp = "95";

    }
             
    elseif($sas == '70')
    {
        $sasp = "96";

    }
             
    elseif($sas == '71')
    {
        $sasp = "97";

    }
             
    elseif($sas == '72')
    {
        $sasp = "97";

    }
             
    elseif($sas == '73')
    {
        $sasp = "98";

    }
             
    elseif($sas == '74')
    {
        $sasp = "98";
    }

    else
    {
        $sasp = "NS";
    }
   

    }#while

?>