<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 사이트</title>
     <!-- style -->
     <?php
        include "../include/style.php";
    ?>
</head>
<body>


    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <div>
        <section id="blog-type" class="section center type">
            <div class="container">
                <h3 class="section__title">새로운 강의</h3>
                <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
<?php
    $sql = "SELECT * FROM myBlog LIMIT 3";
    $result = $connect -> query($sql);
    $count = $result -> num_rows;
    // var_dump($count);
    for($i=1; $i<=$count; $i++){
        $blogInfo = $result -> fetch_array(MYSQLI_ASSOC)   ?>
  
        <article class="blog">
            <figure class="blog__header">
                <a href="" style="background-image:url(../assets/img/blog/<?=$blogInfo['blogImgFile']?>)"></a>
            </figure>
            <div class="blog__body">
                <span class="blog__cate"><?=$blogInfo['blogCategory']?></span>
                <div class="blog__title"><?=$blogInfo['blogTitle']?></div>
                <div class="blog__desc"><?=$blogInfo['blogContents']?></div>
                <div class="blog__info">
                    <span class="author"><?=$blogInfo['blogAuthor']?></span>
                    <span class="date"><?=$blogInfo['blogRegTime']?></span>
                </div>
            </div>
        </article>
<?php }?>


                        
                    </div>
                    <div class="blog__btn">
                        <a href="">더보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="notice-type" class="section center gray">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="notice__inner">
                    <article class="notice">
                    <h4>공지사항 </h4>
                    <ul>
<?php
    $sql = "SELECT * FROM myBoard ORDER BY boardID DESC LIMIT 4";
    $result = $connect -> query($sql);
    $count = $result -> num_rows;

    for($i=1; $i<=$count; $i++){
        $boardinfo = $result -> fetch_array(MYSQLI_ASSOC);?>
        <li><a href="../board/boardView.php?boardID=<?=$boardinfo['boardID']?>"><?=$boardinfo['boardTitle']?></a><span class="time"><?=$boardinfo['regTime']?></span></li>
<?php }?>
          
                    </ul>
                    <a href="../board/board.php" class="more">더보기</a>
                    </article>


                    <article class="notice">
                        <h4>댓글</h4>
                        <ul>
<?php
  $sql = "SELECT * FROM myComment  ORDER BY commentID LIMIT 4";
  $result = $connect -> query($sql);
  $count = $result -> num_rows;

    for($j=1; $j<=$count; $j++){
        $commentinfo = $result -> fetch_array(MYSQLI_ASSOC);?>
        <li><a href="../comment/comment.php"><?=$commentinfo['youText']?></a><span class="time"><?=$commentinfo['regTime']?></span></li>
<?php }?>
                        </ul>
                    </article>
                </div>
            </div>
        </section>
    </main>
    
</body>
</html>