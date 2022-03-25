<?php
   include "../../connect/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- style -->
     <link rel="stylesheet" href="../assets/css/reset.css">
    <?php
        include "../../include/style.php";
    ?>
    <style>
        
        body {
            background-color: #fafafb;
        }
        .wrap {
            max-width: 1200px;
            margin: 0 auto;
        }
        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 150px;
        }
        #header h2 {
            font-size: 24px;
            font-weight: 800;
        }
        fieldset {
            display: flex;
        }
        fieldset > div{
           margin-left: 10px;
        }
        .search-form {
            height: 35px;
            padding: 0 10px;
            border-radius: 10px;
            font-size: 16px;
            border: 1px solid #000;
        }
        .search-option {
            height: 35px;
            border-radius: 10px;
            cursor: pointer;
        }
        .search-btn {
            width: 120px;
            height: 35px;
            border-radius: 10px;
            background-color: #605bff;
            color: #fff;
            cursor: pointer;
        }
        main {
            
        }
        #nav ul {
            height: 50px;
            display: grid;
            grid-template-columns: 1fr 1.5fr 5fr 1.5fr 1fr;
            align-items: center;
        }
        #nav ul li {
            color: #030229;
            opacity: 0.7;
            font-size: 12px;
            text-align: center;
        }
        .board {
            height: 70px;
            display: grid;
            grid-template-columns: 1fr 1.5fr 5fr 1.5fr 1fr;
            align-items: center;
            border-radius: 10px;
            background-color: #fff;
            margin-bottom: 5px;
        }
        .board div {
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            color: #000
        }
        .board div:nth-child(2) {
           display: flex;
           align-items: center;
           justify-content: center;
        }
        .board div:nth-child(2) img,
        .board div:nth-child(3) img,
        .board div:nth-child(4) img
         {
            margin-right: 5px;
        }
        .board div:nth-child(5) {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            opacity: 0.1;
            border-radius: 22.5px;
            background-color: #f29339;
            overflow: hidden;
        }
       .write {
           float: right;
           padding: 10px 20px;
           background: #000;
           color: #fff;
           margin-top: 5px;
           border-radius: 10px;
       }
       .result {
            text-align: right;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header id="header">
            <h2 ><a href="boardQ.php">Q&A</a></h2>
            <form action="boardQSearch.php" name="boardSearch" method="get">
                <fieldset>
                    <legend class="ir_so">게시판 검색 영역</legend>
                    <div>
                        <input type="search" name="searchKeyword" class="search-form" placeholder="search" aria-label="search" requierd >
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
 function msg($alert){
    echo "<p class='result'>총 ".$alert."건이 검색되었습니다.</p>";
}
$searchKeyword = $_GET['searchKeyword'];
$searchOption = $_GET['searchOption'];
$searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
$searchOption = $connect -> real_escape_string(trim($searchOption));

$sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON(b.memberID = m.memberID) ";
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
            <nav id="nav">
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
$sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON(b.memberID = m.memberID) ";
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
           echo " <div>complete</div>";
        echo "</div>";
        }
    }
}
?>
          

            
            <div>
                <a href="boardQWrite.php" class="write">글쓰기</a>
            </div>
            <div class="board__pages">
                <ul>
<?php
 $boardCount = ceil($count/$pageView);
 // 현재 페이지를 기준으로 보여주고 싶은 갯수
 $pageCurrent = 5;
 $startPage = $page - $pageCurrent;
 $endPage = $page + $pageCurrent;
 // 처음 페이지 초기화
 if($startPage < 1) $startPage = 1;
 // 마지막 페이지 초기화
 if($endPage >= $boardCount) $endPage = $boardCount;
 // 이전 페이지
 if($page != 1){
     $prevPage = $page -1;
     echo "<li><a href='boardQSearch.php?page={$prevPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>이전</a></li>";
 }
 // 처음으로 페이지
 if($page != 1){
     echo "<li><a href='boardQSearch.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>처음으로</a></li>";
 }
 // 페이지 넘버 표시
 for($i=$startPage; $i<=$endPage; $i++){
     $active = "";
     if($i == $page){
         $active = "active";
     }
     echo "<li class='{$active}'><a href='boardQSearch.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>{$i}</a></li>";
 }
 //다음 페이지
 if($page != $boardCount){
     $nextPage = $page +1;
     echo "<li><a href='boardQSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>다음</a></li>";
 }
 // 마지막 페이지
 if($page != $boardCount){
     echo "<li><a href='boardQSearch.php?page={$boardCount}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>마지막으로</a></li>";
 }
?>
                </ul>
            </div>



        </main>

        

    </div>
    
</body>
</html>