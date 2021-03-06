<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 수정하기</title>

     
      
      <!-- META -->  
      <meta name="acthor" content="한승보">
      <meta name="description" content="웹 표준을 준수한 사이트입니다.">
      <meta name="keywords" content="웹 표준, 웹 접근성, 웹 호환성, 사이트 제작, 사이트 만들기">
      <meta name="rebots" content="all">
       
       <!-- 아이콘&파비콘 -->
       <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
       <link rel="apple-touch-icon" href="img/icon114.png">
       <link rel="apple-touch-icon" sizes="114x114" href="img/icon114.png">
       <link rel="apple-touch-icon-precomposed" href="img/icon.png">
       <link rel="apple-touch-icon-precomposed" sizes="167x167" href="img/icon167.png">

        <!-- CSS style -->
        <link rel="stylesheet" href="assets/css/commom.css">
        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/style.css">

          <!-- style -->
     <?php
        include "../include/style.php";
     ?>
</head>
<body>
    <div id="skip">
        <a href="#main">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>

    <header id="header">
        <h1 class="logo">
            <a href="#">PHP <em>class</em></a>
        </h1>
        <nav class="menu">
            <h2 class="ir_so">메인 매뉴</h2>
            <ul>
                <li><a href="#">회원가입</a></li>
                <li><a href="#">댓글</a></li>
                <li><a href="#">게시판</a></li>
                <li><a href="#">블로그</a></li>
                <li><a href="#">관리자</a></li>
            </ul>
        </nav>
        <div class="member">
            <a href="#">회원가입</a>
            <a href="#">로그인</a>
        </div>
    </header>
    <!-- //header -->
    
   <!-- main -->
   <main id="contents">
      <h2 class="ir_so">컨텐츠 영역</h2>
      <section id="board-type" class="section center mb100">
          <div class="container">
             <h3 class="section__title">게시글 수정하기</h3>
             <p class="section__desc">강의와 관련된 게시글을 수정할 수 있습니다.</p>
             <div class="board__inner">
                 <div class="board__modify">
                    <form action="boardModifySave.php" name="boardModiry" method="post">
                        <fieldset>
                            <legend class="ir_so">게시판 수정 영역</legend>

<?php
    $boardID = $_GET['boardID'];

    //쿼리문 작성(해당 ID값의 제목, 내용을 출력)
    $sql = "SELECT boardID, boardTitle, boardContents from myBoard WHERE boardID = {$boardID}";
    $result = $connect -> query($sql);

    if($result){
        $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
    //    var_dump($boardInfo);
        echo "<div style = 'display: none;'><label for='boardID'>번호</label><input type='text' name='boardID' id='boardID'  value='".$boardInfo['boardID']."'></div>";
        echo "<div><label for='boardTitle'>제목</label><input type='text' name='boardTitle' id='boardTitle' value='".$boardInfo['boardTitle']."'></div>";
        echo "<div><label for='boardContents'>내용</label><textarea type='text' name='boardContents' id='boardContents'>".$boardInfo['boardContents']."</textarea></div>";
        echo "<div><label for='boardPass'>비밀번호</label><input type='password' name='youPass' id='youPass' value='****'></div>";
    }
?>

                            <!-- <div>
                                <label for="boardID">번호</label>
                                <input type="text" name="boardID" id="boardID">
                            </div>
                            <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" name="boardTitle" id="boardTitle">
                            </div>
                            <div>
                                <label for="boardContents">내용</label>
                                <textarea name="boardContents" id="boardContents"rows="15"></textarea>
                            </div>
                            <div>
                                <label for="boardPass">비밀번호</label>
                                <input type="password" name="boardPass" id="boardPass" placeholder="로그인 비밀번호를">
                            </div> -->
                            <div class="board__btn">
                                <button type="submit" value="저장하기">수정하기</button>
                                <a href="board.php">목록보기</a>
                            </div>
                        </fieldset>
                    </form>
                 </div>
                
             </div>
          </div>
      </section>
   </main>
    <!-- //main -->

    <footer id="footer" class="footer_type01 gray">
        <div class="container">
            <h2 class="ir_so">푸터 바로가기 메뉴</h2>
            <div class="footer-menu">                    
                <div>
                    <h3>레이아웃 영역</h3>
                    <ul>
                        <li><a href="../test4.html">레이아웃 유형01</a></li>                            
                        <li><a href="#">레이아웃 유형02</a></li>                            
                        <li><a href="#">레이아웃 유형03</a></li>                            
                        <li><a href="#">레이아웃 유형04</a></li>                            
                        <li><a href="#">레이아웃 유형05</a></li>                            
                    </ul>
                </div>
                <div>
                    <h3>메뉴 영역</h3>
                    <ul>
                        <li><a href="#">메뉴 유형01</a></li>
                    </ul>
                </div>
                <div>
                    <h3>메인 영역</h3>
                    <ul>
                        <li><li><a href="#">이미지 유형01</a></li>
                        <li><li><a href="#">동영상 유형02</a></li>
                        <li><li><a href="#">슬라이드 유형03</a></li>
                    </ul>
                </div>
                <div>
                    <h3>컨텐츠 영역</h3>
                    <ul>
                        <li><a href="#">텍스트 유형01</a></li>
                        <li><a href="#">이미지 유형02</a></li>
                        <li><a href="#">이미지/텍스트03</a></li>
                        <li><a href="#">카드 유형04</a></li>
                        <li><a href="#">배너 유형05</a></li>
                    </ul>
                </div>
                <div>
                    <h3>게시판 영역</h3>                        
                    <ul>
                        <li><a href="board.html">게시판</a></li>
                        <li><a href="boardView.html">게시판 보기</a></li>
                        <li><a href="boardModify.html">게시판 수정</a></li>
                        <li><a href="boardWrite.html">게시판 쓰기</a></li>
                    </ul>                         
                </div>
                <div>
                    <h3>사이트</h3>
                    <ul>
                        <li><a href="#">웹표준 사이트</a></li>
                        <li><a href="#">반응형 사이트</a></li>
                        <li><a href="#">페럴랙스 사이트</a></li>
                        <li><a href="#">포트폴리오 사이트</a></li>
                    </ul>                        
                </div>
            </div>
            <address class="footer-rights">
                2020 boseungdl. All rights reserved.
            </address>
            <!-- <div class="footer-sns">
                <ul>
                    <li><a href="#" class="ir_pm">페이스북</a></li>
                    <li><a href="#" class="ir_pm">인스타그램</a></li>
                    <li><a href="#" class="ir_pm">카카오톡</a></li>
                    <li><a href="#" class="ir_pm">블로그</a></li>
                </ul>
            </div>
        </div> -->
    </footer>
    <!-- footer -->

</body>
</html>