<?php
  $id = $_GET['id'];
  $squery =  mysqli_query($conn, "select * from students where id=$id");
  while ($row = mysqli_fetch_array($squery)) {
  $gen = $row['gender'];
  $avs = $row['apt_verbal_score'];
  

  if($gen == 'Female')
  {
      if($avs <= '7'){
          $avsn = "1";
      }
      
      elseif($avs == '8' || $avs == '9' || $avs == '10' || $avs == '11')
      {
          $avsn = "2";
      }
      
      elseif($avs == '12' || $avs == '13' || $avs == '14' || $avs == '15' 
      || $avs == '16' || $avs == '17' || $avs == '18' || $avs == '19' )
      {
          $avsn = "3";
      }
      
      elseif($avs == '20' || $avs == '21' || $avs == '22' || $avs == '23' 
      || $avs == '24' || $avs == '25' || $avs == '26' || $avs == '27')
      {
          $avsn = "4";
      }
      
      elseif($avs == '28' || $avs == '29' || $avs == '30' || $avs == '31' || $avs == '32' 
      || $avs == '33' || $avs == '34' || $avs == '35' )
      {
          $avsn = "5";
      }
      
      elseif($avs == '36' || $avs == '37' || $avs == '38' || $avs == '39' 
      || $avs == '40' || $avs == '41' )
      {
          $avsn = "6";
      }
      
      elseif($avs == '42' || $avs == '43' || $avs == '44' || $avs == '45' )
      {
          $avsn = "7";

      }

      elseif($avs == '46' || $avs == '47' )
      {
          $avsn = "8";
      }

      elseif($avs == '48' || $avs == '49' || $avs == '50')
      {
          $avsn = "9";

      }

      else
      {
          $avsn = "NS";
      }

  }#gender
  else #MALEMALEMALEMALEMALE
  {
      if($avs <= '8'){
          $avsn = "1";
      }
      
      elseif($avs == '9' || $avs == '10' || $avs == '11' || $avs == '12')
      {
          $avsn = "2";

      }
      
      elseif($avs == '13' || $avs == '14' || $avs == '15' || $avs == '16' 
      || $avs == '17' || $avs == '18' || $avs == '19' || $avs == '20' )
      {
          $avsn = "3";

      }
      
      elseif($avs == '21' || $avs == '22' || $avs == '23' || $avs == '24' 
      || $avs == '25' || $avs == '26' || $avs == '27' || $avs == '28')
      {
          $avsn = "4";

      }
      
      elseif($avs == '29' || $avs == '30' || $avs == '31' || $avs == '32' || $avs == '33' 
      || $avs == '34' || $avs == '35' )
      {
          $avsn = "5";

      }
      
      elseif($avs == '36' || $avs == '37' || $avs == '38' || $avs == '39' 
      || $avs == '40' || $avs == '41' || $avs == '42' )
      {
          $avsn = "6";

      }
      
      elseif($avs == '43' || $avs == '44' || $avs == '45' )
      {
          $avsn = "7";

      }

      elseif($avs == '46' || $avs == '47' )
      {
          $avsn = "8";

      }

      elseif($avs == '48' || $avs == '49' || $avs == '50')
      {
          $avsn = "9";

      }

      else
      {
          $avsn = "NS";
      }

      
  }#else gender

}#while

?>
<?php
  $id = $_GET['id'];
  $squery =  mysqli_query($conn, "select * from students where id=$id");
  while ($row = mysqli_fetch_array($squery)) {
  $gen = $row['gender'];
  $avs = $row['apt_verbal_score'];
  

  if($gen == 'Female')
  {
      if($avs <= '6'){
          $avsp = "1";
      }
      
      elseif($avs == '7')
      {
          $avsp = "2";
      }

      elseif($avs == '8' || $avs == '9')
      {
          $avsp = "5";
      }
      
      elseif($avs == '10' || $avs == '11'|| $avs == '12' )
      {
          $avsp = "10";
      }
      
      elseif($avs == '13' || $avs == '14'|| $avs == '15' )
      {
          $avsp = "15";
      }
       
      elseif($avs == '16' || $avs == '17'|| $avs == '18' )
      {
          $avsp = "14";
      }
       
      elseif($avs == '19' || $avs == '20'|| $avs == '21' )
      {
          $avsp = "25";
      }
             
      elseif($avs == '22' || $avs == '23')
      {
          $avsp = "30";
      }
                  
      elseif($avs == '24' || $avs == '25')
      {
          $avsp = "35";
      }
                  
      elseif($avs == '26' || $avs == '27' || $avs == '28')
      {
          $avsp = "40";
      }
                        
      elseif($avs == '29' || $avs == '30')
      {
          $avsp = "45";
      }
                        
      elseif($avs == '31' || $avs == '32')
      {
          $avsp = "50";
      }
                        
      elseif($avs == '33' || $avs == '34')
      {
          $avsp = "55";
      }
                        
      elseif($avs == '35' || $avs == '36')
      {
          $avsp = "60";
      }
                        
      elseif($avs == '37' )
      {
          $avsp = "65";
      }
                              
      elseif($avs == '38' || $avs == '39')
      {
          $avsp = "70";
      }
                              
      elseif($avs == '40' || $avs == '41')
      {
          $avsp = "75";
      }
                              
      elseif($avs == '42' )
      {
          $avsp = "80";
      }
                                    
      elseif($avs == '43' || $avs == '44')
      {
          $avsp = "85";
      }
                                    
      elseif($avs == '45' || $avs == '46')
      {
          $avsp = "90";
      }
                                      
      elseif($avs == '47' )
      {
          $avsp = "95";
      }

      elseif($avs == '48' || $avs == '49')
      {
          $avsp = "97";
      }

      elseif($avs == '50')
      {
          $avsp = "99";
      }

      else
      {
          $avsp = "NS";
      }
        
            

  }#gender

  else #MALEMALEMALEMALEMALE
  {
      if($avs <= '6'){
          $avsp = "1";
      }
      
      elseif($avs == '7' || $avs == '8')
      {
          $avsp = "3";

      }
      
      elseif($avs == '9' || $avs == '10')
      {
          $avsp = "5";

      }
  
      elseif($avs == '11' || $avs == '12'  || $avs == '13')
      {
          $avsp = "10";

      }
  
      elseif($avs == '14' || $avs == '15'  || $avs == '16')
      {
          $avsp = "15";

      }
  
      elseif($avs == '17' || $avs == '18'  || $avs == '19')
      {
          $avsp = "20";

      }
  
      elseif($avs == '20' || $avs == '21'  || $avs == '22')
      {
          $avsp = "25";

      }
  
      elseif($avs == '23' || $avs == '24')
      {
          $avsp = "30";

      }
    
      elseif($avs == '25' || $avs == '26'  || $avs == '27')
      {
          $avsp = "35";

      }
    
      elseif($avs == '28' || $avs == '29')
      {
          $avsp = "40";

      }
    
      elseif($avs == '30')
      {
          $avsp = "45";

      }
         
      elseif($avs == '31' || $avs == '32')
      {
          $avsp = "50";

      }

      elseif($avs == '33' || $avs == '34')
      {
          $avsp = "55";

      }

      elseif($avs == '35' || $avs == '36')
      {
          $avsp = "60";

      }

      elseif($avs == '37' || $avs == '38')
      {
          $avsp = "65";

      }

      elseif($avs == '39' || $avs == '40')
      {
          $avsp = "70";

      }

      elseif($avs == '42' || $avs == '42')
      {
          $avsp = "75";

      }

      elseif($avs == '43')
      {
          $avsp = "80";

      }
      
      elseif($avs == '44' || $avs == '45')
      {
          $avsp = "85";

      }
      
      elseif($avs == '46')
      {
          $avsp = "90";

      }
      
      elseif($avs == '47')
      {
          $avsp = "95";

      }
      
      elseif($avs == '48')
      {
          $avsp = "97";

      }
            
      elseif($avs == '49' || $avs == '50')
      {
          $avsp = "99";

      }
    
      else
      {
          $avsp = "NS";
      }

      
  }#else gender

}#while

?>