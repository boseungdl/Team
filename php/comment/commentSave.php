<?php
    include "../connect/connect.php";
    $youName = $_POST['youName'];
    $youText = $_POST['youText'];
    $regTime = time();
    echo $youName, $youText, $regTime;
    //sql 작성 이름, 텍스트, 시간 --> query();
    $sql = "INSERT INTO myComment(youName, youText, regTime) VALUES('$youName', '$youText', '$regTime')";
    $connect -> query($sql);

    // if($result){
    //     echo "INSERT INTO TURE";
    // } else {
    //     echo "INSERT INTO FALSE";
    // }

    Header("Loaction: ../comment/comment.php#comment-type")
?>