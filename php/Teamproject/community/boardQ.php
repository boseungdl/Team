<?php
   include "../../connect/connect.php";
   include "../../connect/session.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- style -->
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
    <div class="wrap">
    <?php
        include "../include/header.php";
    ?>
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
                        <input type="search" name="searchKeyword" class="search-form" placeholder="search" aria-label="search" required>
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
      
            <nav id="navi" class="defaultBg">
                <ul>
                    <li>번호</li>
                    <li>이름</li>
                    <li>제목</li>
                    <li>등록일</li>
                    <li>상태</li>
                </ul>
            </nav>


<?php
    //b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page =1;
    }

    //게시판 불러올 갯수
    $pageView = 10;
    $pageLimit = ($pageView * $page) - $pageView;
    
    
    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardConfirm FROM teamBoardQ b JOIN myTeam m ON(m.memberID = b.memberID) ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
    $result = $connect -> query($sql);

    if($result){
        $counted = $result -> num_rows;
        if($counted > 0){
            for($i=1; $i<=$counted; $i++){
                $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='board'>";
                echo "<div>".$boardInfo['boardID']."</div>";
                echo "<div><img src='../assets/img/Group 465.jpg' alt=''>".$boardInfo['youName']."</div>";
                echo "<div><img src='../assets/img/Message.jpg' alt=''><a href='boardQView.php?boardID={$boardInfo['boardID']}'>".$boardInfo['boardTitle']."</a></div>";
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
$sql = "SELECT * FROM teamBoardQ ";
$result = $connect -> query($sql);
$count = $result -> num_rows;


$GET1 = '';
$GET2 = '';
$searchOption = '';

$address = 'boardQ';
  require "boardPage.php";
?>
                </ul>
            </div>



        </main>

        

    </div>

    <script>
        document.querySelectorAll(".board div:nth-child(5)").forEach(el => {
            if(el.innerText == "complete"){
                el.style.opacity = 1;
            }
        })
    </script>
    
</body>
</html>