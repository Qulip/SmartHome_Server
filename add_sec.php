<?php 
  header("Content-Type: text/html;charset=UTF-8"); 
  require 'connect_sql.php';
  $mysqli = connect_sql(); //sql과 연결
    if($mysqli){ 
      echo "MySQL successfully connected!<br/>"; //연결 확인 후 POST로 값 받아오기
      $loc = $_GET['loc']; 
      
      echo "<br/>loc = $loc";  //확인차 값 확인 후 sql에 저장
      $query = "INSERT INTO secure (loc) VALUES ('$loc')"; 
      mysqli_query($mysqli,$query); 
      echo "</br>success!!"; 
    } else{ //sql에 연결 실패했을경우
      echo "MySQL could not be connected"; 
      } 
    mysqli_close($mysqli); 
?>
