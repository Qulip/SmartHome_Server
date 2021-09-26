<?php // DB 접속 
    require 'connect_sql.php';
    $mysqli = connect_sql();

    if ($mysqli) { 
        mysqli_set_charset($mysqli,"utf8"); // 기본 클라이언트 문자 집합 설정하기 
        $res = mysqli_query($mysqli, "select * from myhouse"); // 쿼리문 실행, 결과를 res에 저장 
        $result = array(); // 결과를 배열로 변환하기 위한 변수 정의 
        while($row = mysqli_fetch_array($res)) { // 쿼리문의 결과(res)를 배열형식으로 변환(result) 
            $temp = array(
                'reg_time'=>$row[0],
                'temp'=>$row[1],
                'humi'=>$row[2]);
            array_push($result, $temp);
        } 
        echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE); 
        // 배열형식의 결과를 json으로 변환 및 출력
        mysqli_close($mysqli); // DB 접속 종료 
    }
    else{
        echo "MySQL접속 실패: " . mysqli_connect_error(); 
    }
?>