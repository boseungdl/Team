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
    <title>블로그 글쓰기</title>
     <!-- style -->
     <?php
        include "../include/style.php";
     ?>
     <style>
        #footer {
            background:#f5f5f5;
        } 
     </style>
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
      <section id="board-type" class="center mb100">
<?php
    $blogID = $_GET['blogID'];
    $sql = "SELECT * FROM myBlog WHERE blogID = '{$blogID}'";
    $result = $connect -> query($sql);
        
    $bloginfor = $result -> fetch_array(MYSQLI_ASSOC);
    ?>

            <div class="blog__label" style="background-image:url(../assets/img/blog/<?=$bloginfor['blogImgFile']?>)">
                <h3 class="section__title"><?=$bloginfor['blogTitle']?></h3>
                <div>
                    <span class="author"><a href="#"><?=$bloginfor['blogAuthor']?></a></span>
                    <span class="date"><?=$bloginfor['blogRegTime']?></span><br>
                    <span class="modify"><a href="blogModify.php?blogID=<?=$blogID?>">수정</a></span>
                    <span class="delete"><a href="#">삭제</a></span>
                </div>
            </div>
            <div class="container">
                <div class="blog__layout">
                    <div class="blog__left">
                        <h4> <?=$bloginfor['blogTitle']?></h4>
                        <div>
                            <?=$bloginfor['blogContents']?>
                        </div>
                    </div>
                    <div class="blog__right">
                        <iframe src="https://ads-partners.coupang.com/widgets.html?id=572133&template=carousel&trackingCode=AF8143841&subId=&width=300&height=300" width="300" height="300" frameborder="0" scrolling="no" referrerpolicy="unsafe-url"></iframe>
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
    
</body>
</html>



