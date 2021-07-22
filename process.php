<?php 
  header("Content-Type: text/html;charset=UTF-8"); 
  require 'connect_sql.php';
  $mysqli = connect_sql();
    if($mysqli){ 
      echo "MySQL successfully connected!<br/>"; 
      $temp = $_POST['temp']; 
      $humi = $_POST['humi']; 
      $detect = $_POST['detect'];
      $curtain = $_POST['cur1'];
      $lamp = $_POST['lamp1'];
      $multi = $_POST['plug1'];
      
      echo "<br/>Temperature = $temp, Humidity = $humi";
      $query = "INSERT INTO myhouse (temp, humi, detect, curtain, lamp, multi) VALUES ('$temp','$humi','$detect','$curtain','$lamp','$multi')"; 
      mysqli_query($mysqli,$query); 
      echo "</br>success!!"; 
    } else{ 
      echo "MySQL could not be connected"; 
      } 
    mysqli_close($mysqli); 
?>
