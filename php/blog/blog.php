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
      <section id="board-type" class="section center mb100">
      <div class="container">
         <h3 class="section__title">강의 블로그</h3>
         <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
         <div class="blog__inner">
            <div class="blog__search">
                <form action="blogSearch.php" method="get">
                    <fieldset>
                        <legend class="ir_so">검색 영역</legend>
                        <input type="search" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력해주세요!">
                        <label for="blogSearch" class="ir_so">검색</label>
                        <button class="button">검색</button>
                    </fieldset>
                </form>
            </div>
            <div class="blog__btn">
                <a href="blogWrite.php">글쓰기</a>
            </div>
            <div class="blog__cont">

<?php
   
 if(isset($_GET['page'])){
    $page = (int) $_GET['page'];
} else {
    $page =1;
}
    $pageView = 5;
    $startPage = $pageView*$page - $pageView;
    
    
    $sql = "SELECT blogImgFile, blogCategory, blogTitle, blogContents, blogAuthor, blogRegTime FROM myBlog ORDER BY blogID DESC LIMIT {$startPage}, {$pageView}";
    $result = $connect -> query($sql);
  
            foreach($result as $blog){  ?>
          
                 <article class="blog mb20">
                    <figure class="blog__header">
                        <img style="height: 250px;" src="../assets/img/blog/<?=$blog['blogImgFile']?>" alt="블로그이미지">
                    </figure>
                    <div class="blog__body">
                        <div class="blog__cate"><?=$blog['blogCategory']?></div>
                        <div class="blog__title"><?=$blog['blogTitle']?></div>
                        <div class="blog__desc"><?=$blog['blogContents']?></div>
                        <div class="blog__info">
                            <span class="author"><a href="#"><?=$_SESSION['youname']?></a></span>
                            <span class="date"><?=$blog['blogRegTime']?></span>
                            <span class="modify"><a href="#">수정</a></span>
                            <span class="delete"><a href="#">삭제</a></span>
                        </div>
                    </div>
                </article>
<?php       }?>
    


               
            </div>
          
            <div class="blog__pages">
                <ul>
                    <li><a href="#">&lt;&lt;</a></li>
                    <li><a href="#">&lt;</a></li>
                    <li><a href="blog.php?page=1" class="active">1</a></li>
                    <li><a href="blog.php?page=2">2</a></li>
                    <li><a href="blog.php?page=3">3</a></li>
                    <li><a href="blog.php?page=4">4</a></li>
                    <li><a href="blog.php?page=5">5</a></li>
                    <li><a href="blog.php?page=6">6</a></li>
                    <li><a href="blog.php?page=7">&gt;</a></li>
                    <li><a href="blog.php?page=8">&gt;&gt;</a></li>
                </ul>
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



