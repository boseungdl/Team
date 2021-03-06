<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

     <!-- style -->
     <?php
        include "../include/style.php";
     ?>
</head>
<body>
     <!-- skip -->
     <?php
        include "../include/skip.php";
    ?>
    <!-- //skip -->

   
    <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

     <!-- main -->
   <main id="contents">
      <h2 class="ir_so">컨텐츠 영역</h2>
      <section id="board-type" class="section center mb100">
          <div class="container">
             <h3 class="section__title">강의 게시판</h3>
             <p class="section__desc">강의와 관련된 게시판입니다.</p>
             <div class="board__inner">
                
                 <div class="board__table">
                     <table>
                         <colgroup>
                            <col style="width: 30%">
                            <col style="width: 70%">
                        </colgroup>
                        
                         <tbody>
                         <?php
    $boardID = $_GET['boardID'];
    //echo $boardID;
    $sql = "SELECT b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
    $result = $connect -> query($sql);

    $sql = "UPDATE myBoard SET boardVIew = boardView + 1 WHERE boardID = {$boardID}";
    $connect -> query($sql);

    if($result){
        $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
        // echo "<pre>";
        // var_dump($boardInfo);
        // echo "</pre>";
        echo "<tr><th>제목</th><td class='left'>".$boardInfo['boardTitle']."</td></tr>";
        echo "<tr><th>글쓴이</th><td class='left'>".$boardInfo['youName']."</td></tr>";
        echo "<tr><th>등록일</th><td class='left'>".date('Y-m-d H:i', $boardInfo['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td class='left'>".$boardInfo['boardView']."</td></tr>";
        echo "<tr><th>내용</th><td class='left height'>".$boardInfo['boardContents']."</td></tr>";
    }
?>
                             <!-- <tr>
                                 <td>1</td>
                                 <td>이번주 수업 내용을 여기서 확인해 보세요!</td>
                                 <td>한승보</td>
                                 <td>2022-03-22</td>
                                 <td>15</td>
                             </tr> -->
                         </tbody>
                     </table>
                 </div>
                 <div class="board__btn">
                    <a href="board.php">목록보기</a>
                    <a href="boardRemove.php?boardID=<?=$boardID?>" onclick=" return noticeRemove();">삭제하기</a>
                    <a href="boardModify.php?boardID=<?=$boardID?>">수정하기</a>
                 </div>
             </div>
          </div>
      </section>
   </main>
    <!-- //main -->










     <!-- footer -->
     <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->

    <script>
        function noticeRemove(){
            let notice = confirm("정말 삭제하시겠습니까?", "");
            return notice;
        }
    </script>
    
</body>
</html>