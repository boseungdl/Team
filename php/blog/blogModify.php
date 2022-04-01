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

           
                <form action="blogModifySave.php" method="POST">
                    <fieldset>
                        <legend class="ir_so">블로그 수정 영역</legend>
                        <div class="blog__label" style="background-image:url(../assets/img/blog/<?=$bloginfor['blogImgFile']?>)">
                            <label for="blogTitle" class="ir_so">블로그 제목</label>
                            <input class="section__title" type="text" name="blogTitle" value="<?=$bloginfor['blogTitle']?>">
                        <div>
                            <span class="author"><a href="#"><?=$bloginfor['blogAuthor']?></a></span>
                            <span class="date"><?=$bloginfor['blogRegTime']?></span><br>
                            <button class="delete" type="submit">완료</button>
                        </div>
                        </div>
                        <div class="container">
                            <div class="blog__layout">
                                <div class="blog__left">
                                    <input type="text" name="blogContents" value="<?=$bloginfor['blogContents']?>">
                                </div>
                                <div class="blog__right">
                                    dd
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
         
       
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



