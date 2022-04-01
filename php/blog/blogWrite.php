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
        <section id="board-type" class="section center">
            <div class="container">
                <h3 class="section__title">게시글 작성하기</h3>
                <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__write">
                        <form action="blogWriteSave.php" name="blogWrite" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend class="ir_so">블로그 게시글 작성 영역</legend>
                                <div>
                                    <label for="blogCate">카테고리</label>
                                    <select name="blogCate" id="blogCate">
                                        <option value="javascript">javascript</option>
                                        <option value="jquery">jquery</option>
                                        <option value="html">html</option>
                                        <option value="css">css</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="blogTitle">제목</label>
                                    <input type="text" name="blogTitle" id="blogTitle" placeholder="제목을 넣어주세요!">
                                </div>
                                <div>
                                    <label for="blogContents">내용</label>
                                    <textarea name="blogContents" id="blogContents" placeholder="내용을 넣어주세요!"></textarea>
                                </div>
                                <div>
                                    <label for="blogFile">파일</label>
                                    <input type="file" accept=".jpg, .jpeg, .png, .gif" name="blogFile" id="blogFile" placeholder="사진을 넣어주세요! 사진은 jpg, gif, png 파일만 지원이 됩니다.">
                                </div>
                                <button type="submit" value="저장하기">저장하기</button>
                            </fieldset>
                        </form>
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