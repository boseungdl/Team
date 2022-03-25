

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>

<?php
    include "../../connect/connect.php";
    include "../../connect/session.php"; //세션을 줄 수 있게 만드는 start?


    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];

    // echo $youEmail ,$youPass

    //메세지 출력
    function msg($alert){
        echo "<p class='alert'>{$alert}</p>";
    }

    // //이메일 유효성 검사
    // if(!filter_var($youEmail, FILTER_VALIDATE_EAMIL)){
    //     msg("이메일이 잘못되었습니다<br>올바른 이메일을 적어주세요!");
    // }

    // //비밀번호 유효성검사
    // if($youPass == null || $youPass == ''){
    //     msg("비밀번호를 입력해주세요!");
    // }

    //데이터 가져오기 -> 유효성 검사(x) -> 데이터 불러오기
    $sql = "SELECT memberID, youName, youEmail, youPass FROM myTeam WHERE youEmail = '$youEmail' and youPass = '$youPass'";
     
    $result = $connect -> query($sql);
    // $memberinfo = $result -> fetch_array(MYSQLI_ASSOC);

    // $ID = $memberinfo['youEmail'];
    // if(isset($ID)){
    //     if(isset($_POST['agree'])){
    //         setcookie("id", $ID, time()+60*2);
    //     }

    // }
    
    if($result){
        $count = $result -> num_rows;
        // var_dump($count);
        if($count == 0){
            msg("이메일 또는 비밀번호가 잘못되었습니다. 다시 한번 확인해주세요!");
        } else {
            $agree = $_POST['agree'];
            if(isset($agree)){
                setcookie("id", $youEmail, time()+60*2);
            } else {
                setcookie("id", $youEmail, time()-3600);
            }


            
            
            //로그인 성공
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

            //섹션 추가
            $_SESSION['memberID'] = $memberInfo['memberID'];
            $_SESSION['youName'] = $memberInfo['youName'];
            $_SESSION['youEmail'] = $memberInfo['youEmail'];

            // echo $memberID;

            //메인
             Header("Location: ../pages/main.php");

            // echo $memberInfo;
            echo "<pre>";
            var_dump($memberInfo);
            echo "</pre>";
            var_dump($result);
           
        }
    }
?>


    
</body>
</html>