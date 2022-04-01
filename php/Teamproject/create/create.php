<?php
    include "../../connect/connect.php";

    // $sql = "CREATE TABLE boardQComment (";
    // $sql .= "commentID int(10) unsigned auto_increment,";
    // $sql .= "memberID int(10) unsigned,";
    // $sql .= "youName varchar(20) NULL,";
    // $sql .= "youText longtext NOT NULL,";
    // $sql .= "regTime int(20) NOT NULL,";
    // $sql .= "PRIMARY KEY (commentID)";
    // $sql .= ") charset=utf8;";
    
    // $result = $connect -> query($sql);
    // if($result){
    //     echo "create table true";
    // } else {
    //     echo "create table false";

   
    // $sql = "CREATE TABLE teamBoardT (";
    // $sql .= "boardID int(10) unsigned auto_increment,";
    // $sql .= "memberID int(10) unsigned NOT NULL,";
    // $sql .= "boardTitle varchar(50) NOT NULL,";
    // $sql .= "boardContents longtext NOT NULL,";
    // $sql .= "regTime int(20) NOT NULL,";
    // $sql .= "PRIMARY KEY (boardID)";
    // $sql .= ") charset=utf8;";
    // $result = $connect -> query($sql);
    // if($result){
    //     echo "create table true";
    // } else {
    //     echo "create table false";
    // }
    // $sql = "CREATE TABLE teamBoardTAnswer (";
    // $sql .= "boardID int(10) unsigned auto_increment,";
    // $sql .= "memberID int(10) unsigned NOT NULL,";
    // $sql .= "answerContents longtext NOT NULL,";
    // $sql .= "regTime int(20) NOT NULL,";
    // $sql .= "PRIMARY KEY (boardID)";
    // $sql .= ") charset=utf8;";
    // $result = $connect -> query($sql);
    // if($result){
    //     echo "create table true";
    // } else {
    //     echo "create table false";
    // }


    include "../../connect/connect.php";
    $sql = "CREATE TABLE heart (";
    $sql .= "likeID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned DEFAULT NULL,";
    $sql .= "boardID int(10) unsigned DEFAULT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (likeID)";
    $sql .= ") charset=utf8;";
    $result = $connect -> query($sql);
    if($result){
        echo "create table true";
    } else {
        echo "create table false";
    }


    
?>

