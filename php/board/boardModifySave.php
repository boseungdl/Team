<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $boardID = $_POST['boardID'];
        $boardTitle = $_POST['boardTitle'];
        $boardContents = $_POST['boardContents'];
        $youPass = $_POST['youPass'];
        $memberID = $_SESSION['memberID'];

        $boardTitle = $connect -> real_escape_string($boardTitle);
        $boardContents = $connect -> real_escape_string($boardContents);
        
        //쿼리문 작성
        $sql = "SELECT youPass, memberID FROM myMember JOIN myBoard WHERE memberID = {$memberID}";
        $result = $connect -> query($sql);

        // var_dump($result);

        if($result){
            //사용자가 입력한 값과 데이터에 저장된값을 비교하기 위해 불러온다.
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            //아이디 비밀번호 확인
            if($memberInfo['youPass'] == $youPass && $memberInfo['memberID'] == $memberID){
                //수정
                $sql = "UPDATE myBoard SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
                $connect -> query($sql);
            } else {
            echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요!'); history.back(1)</script>";
            }
        }
        
    ?>
    <script>
        location.href = "board.php";
    </script>
    
</body>
</html>