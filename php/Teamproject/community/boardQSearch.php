<?php
   include "../../connect/connect.php";
   include "../../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- style -->
     <link rel="stylesheet" href="../css/reset.css">
    <?php
        include "../include/style.php";
    ?>
    
</head>
<body>
    <?php
        include "../include/header.php";
    ?>
    <div class="wrap">
        <nav id="nav">
            <ul>
                <li class="active"><a href="boardQ.php">Q&A</a></li>
                <li><a href="boardN.php">놀이터</a></li>
                <li><a href="boardT.php">토론장</a></li>
            </ul>
        </nav>
        <header class="header">
            <form action="boardQSearch.php" name="boardSearch" method="get">
                <fieldset class="field__b">
                    <legend class="ir_so">게시판 검색 영역</legend>
                    <div>
                        <input type="search" name="searchKeyword" class="search-form" placeholder="search" aria-label="search" >
                    </div>
                    <div>
                        <select name="searchOption" class="search-option">
                            <option value="title">제목</option>
                            <option value="content">내용</option>
                            <option value="name">등록자</option>
                        </select>
                    </div>
                    <div>
                        <button type="sumbit" class="search-btn">검색</button>
                    </div>
                </fieldset>
            </form>
        </header>
        <main>
<?php
    $searchKeyword = $_GET['searchKeyword'];
    $searchOption = $_GET['searchOption'];

   
        function msg($alert){
            echo "<p class='result'>총 ".$alert."건이 검색되었습니다.</p>";
        }

        $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
        $searchOption = $connect -> real_escape_string(trim($searchOption));
        $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardConfirm FROM teamBoardQ b JOIN myTeam m ON(b.memberID = m.memberID) ";
        switch($searchOption){
            case 'title':
                $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
                break;
            case 'content':
                $sql .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
                break;
            case 'name':
                $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC";
                break;
        }
        $result = $connect -> query($sql);
        if($result){
            $count = $result -> num_rows;
            msg($count);
        }
    
    
?>
       
            <nav id="navi">
                <ul>
                    <li>번호</li>
                    <li>이름</li>
                    <li>제목</li>
                    <li>등록일</li>
                    <li>상태</li>
                </ul>
            </nav>
<?php
// $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
// $searchOption = $connect -> real_escape_string(trim($searchOption));
if(isset($_GET['page'])){
    $page = (int) $_GET['page'];
} else {
    $page = 1;
}
$pageView = 10;
$pageLimit = ($pageView * $page) - $pageView;
$sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardConfirm FROM teamBoardQ b JOIN myTeam m ON(b.memberID = m.memberID) ";
switch($searchOption){
    case 'title':
        $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
        break;
    case 'content':
        $sql .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
        break;
    case 'name':
        $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
        break;
}
$result = $connect -> query($sql);
if($result){
    $counted = $result -> num_rows;
    if($counted > 0){
        for($i=1; $i<=$counted; $i++){
            $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
            
            echo "<div class='board'>";
            echo "<div>".$boardInfo['boardID']."</div>";
            echo "<div><img src='../assets/img/Group 465.jpg' alt=''>".$boardInfo['youName']."</div>";
            echo "<div><img src='../assets/img/Message.jpg' alt=''><a href='boardView.php?boardID={$boardInfo['boardID']}'>".$boardInfo['boardTitle']."</a></div>";
            echo "<div><img src='../assets/img/Calendar.jpg' alt=''>".date('Y-m-d', $boardInfo['regTime'])."</div>";
           echo " <div>".$boardInfo['boardConfirm']."</div>";
        echo "</div>";
        }
    }
}
?>
            <div>
                <a href="boardWrite.php" class="write">글쓰기</a>
            </div>
            <div class="board__pages">
                <ul>
<?php
$GET1 = 'searchKeyword='.$searchKeyword;
$GET2 = "&searchOption=".$searchOption;

$address = 'boardQSearch';
$boardPage = 'boardQPage';
  require "boardPage.php";
?>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>