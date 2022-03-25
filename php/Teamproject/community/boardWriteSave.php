<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";
    $memberID = $_SESSION['memberID'];
    $meetAddress = $_POST['boardMEET'];
    $meetThema = $_POST['boardTheme'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardView = 1;
    $regTime = time();

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    echo $memberID, $boardTitle, $boardContents, $boardView, $regTime;
    $sql = "INSERT INTO teamBoard(memberID, meetAddress, meetThema, boardTitle, boardContents, boardView, regTime) VALUES('$memberID', '$meetAddress', '$meetThema', '$boardTitle', '$boardContents', '$boardView','$regTime');";
    $connect -> query($sql);

    // Header("Location: ../community/boardQ.php");
?>