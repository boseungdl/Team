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
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link href="https://webfontworld.github.io/BMJua/BMJua.css" rel="stylesheet">
    <style>
        body {
            font-family: 'BMJua';
            background-color: #fafafa;
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
        /* 여기까지헤더 include 리셋포함*/

        /* 페이지네이션 */
        .board__pages {
            margin-top: 40px;
        }
        .board__pages ul {
            display: flex;
            justify-content: center;
        }
        .board__pages ul li {}
        .board__pages ul li a {
            display: block;
            border: 1px solid #eee;
            padding: 14px 10px;
            font-size: 14px;
            margin-left: -1px;
        }
        .board__pages ul li.active a {
            background: #000;
            color: #fff;
        }



        #nav {
            
        }
        #nav ul {
            display: flex;
        }
        #nav ul li {
            background: #fff;
            border-radius: 10px;
        }
        #nav li.active a {
            background: #605bff;
            color: #fff;
        }
        #nav a {
            display: inline-block;
            padding: 15px 20px;
            cursor: pointer;
        }

        #main {
            display: grid;
            margin-top: 50px;
            grid-template-columns: repeat(4, minmax(100px, 300px));
            grid-template-rows: repeat(4, 250px);
            grid-gap: 2em;
        }
        .room {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            border: 5px solid rgb(214, 201, 201);
        }
        .room h3 {
            margin-bottom: 20px;
            font-weight: 600;
        }
        .room > span {
            padding: 5px 15px;
            background-color: #ff6a77;
            border-radius: 22.5px;
            color: #fff;
        }
        .room form {
            display: inline-block;
        }
        .room button {
            font-size: 16px;
            padding: 5px 15px;
            border-radius: 22.5px;
            background-color: #ffd66b;
            font-family: 'BMJua';
        }
        .room p {
            margin-top: 20px;
            margin-bottom: 40px;
            font-weight: 600;
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .room .roomInfo {
            display: flex;
            align-items: center;
            
        }
        .room .roomInfo a {
            flex-basis: 60%;
        }
        .room .roomInfo > span {
            margin-left: 3px;
        }
        .room span span {
            margin-left: 5px;
            font-size: 14px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header id="header">
            <h2>방역투게더</h2>
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
<!-- //header include -->

        <nav id="nav">
            <ul>
                <li><a href="#">Q&A</a></li>
                <li class="active"><a href="#">놀이터</a></li>
                <li><a href="#">토론장</a></li>
            </ul>
        </nav>
        <main id="main">
        <?php
    //b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page =1;
    }

    //게시판 불러올 갯수
    $pageView = 9;
    $pageLimit = ($pageView * $page) - $pageView;
    
    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON(m.memberID = b.memberID) ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count > 0){
            for($i=1; $i<=$count; $i++){
                $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);?>
                <article class="room">
                <h3>제목</h3>
                <span>인원수</span>
                <form action="#">
                    <label for="#" class="ir_so"></label>
                    <button type="submit" >입장</button>
                </form>
                <p># Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo asperiores officia repellendus laudantium alias qui eveniet? Voluptates veniam cupiditate quaerat ea perspiciatis dolores rerum earum, minus cum et adipisci beatae.</p>
                <figure class="roomInfo">
                    <a href="" class="people"><img src="../assets/img/People.jpg" alt=""></a>
                   <span><img src="../assets/img/Chat.jpg" alt=""><span>23</span></span>
                   <span><img src="../assets/img/Heart.jpg" alt=""><span>232</span> </span>
                </figure>
            </article>
        <?php }
        }
    }
?>
<!-- 게시판에서 좋아요 클릭하면 올라가고 다른건 조회수?
뷰를 만든다음 거기서 (댓글) 밑주소있고 
사용자가 입장 누르면 뷰가 나오고 뷰에서 사용자의
아이디값(세션)가져와서 보드방문자명단 만들고 로그아웃시 세션파괴
뷰페이지 나오면 쿠키값을 나오면 쿠키값삭제?

입장(a태그)을 누른 사람들에 한에서 
입장을 누르면 온클릭으로 ajax를 사용해 인원수가 늘어나고 같은 페이지에서
쿠기부여해(입장누르면 에이젝스로 옮겨진 페이지에서 부여)
2시간 방문자 명단(닉네임값을 세션?쿠키?으로 받아와 명단작성)
명단 확인 페이지에서 에이젝스로 체크페이지에서 쿠키(세션)명단을 가져온다.
인원수 는 ajax로 데이타 값을 받아와서 밸류값에 변수를 넣는다.

좋아요이미지 바꾸고(이건 스크립으로 체크했을떄 바뀌게끔 토글),
좋아요를 누르면 ajax로 체크페이지에서 세션값이 존재한다면 좋아요수 1증가
이미지가 검정 이미지라면 데이터 넘어가지 않고 1마이너스 -->

            
            
            
         
        </main>
        <div>
            <a href="boardWrite.php" class="write">글쓰기</a>
        </div>
        <div class="board__pages">
            <ul>
<?php
    require "boardPage.php";
?>
            </ul>
        </div>

    
    
    
    
    
    
    
    
    
    </div>
   
</body>
</html>