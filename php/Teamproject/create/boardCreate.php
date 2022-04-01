<?php
    include "../../connect/connect.php";

    $sql = "CREATE TABLE teamBoardN (";
    $sql .= "boardID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned NOT NULL,";
    $sql .= "boardTitle varchar(50) NOT NULL,";
    $sql .= "boardMeet varchar(100) NOT NULL,";
    $sql .= "boardContents varchar(50) NOT NULL,";
    $sql .= "boardLike int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (boardID)";
    $sql .= ") charset=utf8;";

    $result = $connect -> query($sql);
    
    if($result){
        echo "create table true";
    } else {
        echo "create table false";
    }

    // $sql = "CREATE TABLE teamBoardQ (";
    // $sql .= "boardID int(10) unsigned auto_increment,";
    // $sql .= "memberID int(10) unsigned NOT NULL,";
    // $sql .= "boardTitle varchar(50) NOT NULL,";
    // $sql .= "boardContents longtext NOT NULL,";
    // $sql .= "boardConfirm varchar(10) NOT NULL,";
    // $sql .= "regTime int(20) NOT NULL,";
    // $sql .= "PRIMARY KEY (boardID)";
    // $sql .= ") charset=utf8;";

    // $result = $connect -> query($sql);

    // if($result){
    //     echo "create table true";
    // } else {
    //     echo "create table false";
    // }

    // $sql = "CREATE TABLE myTeam (";
    // $sql .= "memberID int(10) unsigned auto_increment,";
    // $sql .= "youName varchar(20) NOT NULL,";
    // $sql .= "youEmail varchar(40) NOT NULL,";
    // $sql .= "youNickName varchar(20) NOT NULL,";
    // $sql .= "youPhone varchar(20) NOT NULL,";
    // $sql .= "youPhoto varchar(255) DEFAULT 'default.svg',";
    // $sql .= "youIntro longtext DEFAULT NULL,";
    // $sql .= "youPass varchar(20) NOT NULL,";
    // $sql .= "regTime int(20) NOT NULL,";
    // $sql .= "PRIMARY KEY (memberID)";
    // $sql .= ") charset=utf8;";
    
    // $result = $connect -> query($sql);
    // if($result){
    //     echo "create table true";
    // } else {
    //     echo "create table false";
    // }
?>

