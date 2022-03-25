<?php
    include "../connect/connect.php";
    //변수 설정
    $type = $_POST['type'];
    //쿼리문 생성
    $sql = "SELECT youEmail, NickName FROM myTeam ";
    if($type == "emailCheck"){
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
        $sql .= "WHERE youEmail = '{$youEmail}'";
    }
    if($type == "nickCheck"){
        $youNickName = $connect -> real_escape_string(trim($_POST['youNickName']));
        $sql .= "WHERE youNickName = '{$youNickName}'";
    }
    $result = $connect -> query($sql);
    $jsonResult = "bad";
    //데이터 유무 확인
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));//json_incode라는 메서드가 전달받은 배열을 제이슨의 형식으로 php가 변경시켜준다. 변경 형식은 텍스트이다.
?>                                                      
 
 