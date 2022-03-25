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

    <!-- contents -->
    <!-- <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type">
            <h2>성장통</h2>
            <p>살아가는 이야기, 그 안에서 겪는 사랑, 희망, 절망, 즐거움, 그렇게 나를
                찾아가는 과정. <br>The story of my life, the love, hope, despair, and joy </p>
            <div class="card-inner">
                <article><span>자라나는 새싹 <p>사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p><a href="#">더 자세히 보기</a></span> </article>
                <article><span>만개하는 지금 <p></p><a href="#">더 자세히 보기</a></span> </article>
                <article><span>이제는 내려갈 때 <p>asdasdasd</p><a href="#">더 자세히 보기</a></span></article>
            </div>
        </section>

        <section id="comment-type">
            <h3 class="section_title">강의 신청하기</h3>
            <p class="section_desc">강의 신청하기는 누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능합니다.</p>
            <div class="comment__inner">
                <div class="comment_form"></div>
                <div class="comment_list"></div>
            </div>
        </section>
    </main> -->
    <!-- <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">웹스토리보이 강의</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 강의 사이트입니다. <br>
                    Gmarket Sans Light 22px 150% #67778A 
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="img/새싹.jpg" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">웹표준 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="img/만개.jpg" alt="이미지2">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">반응형 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="img/낙엽.jpg" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">기업 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        //card-type -->
        <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">웹스토리보이 강의</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 강의 사이트입니다. <br>
                    Gmarket Sans Light 22px 150% #67778A 
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="img/새싹.jpg" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">웹표준 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="img/만개.jpg" alt="이미지2">    
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">반응형 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                             <img class="card__img" src="img/낙엽.jpg" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">기업 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="comment-type" class="section center purple">
            <h3 class="section__title">강의 신청하기</h3>
            <p class="section__desc">강의 신청하기는 누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능합니다. 100글자 이내로 써주세요~</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment">
                        <fieldset>
                            <legend class="ir_so">댓글쓰기</legend>
                            <div class="comment__wrap">
                                <div>
                                    <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youText" class="ir_so">댓글 쓰기</label>
                                    <input type="text" name="youText" id="youText" class="input__style width" placeholder="시간, 날짜, 강의를 적어주세요" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="submit" value="댓글 작성하기">작성하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">
                    <!-- <div class="list">
                            <p class="comment__desc">저 신청할께요!! 5월달 강의 신청합니다.</p>
                            <div class="comment__icon">
                                <span class="face"><img src="img/사람.png" alt="얼굴"></span>
                                <span class="name">황상연</span>
                                <span class="date">2022-03-11</span>
                            </div>
                        </div>
                    </div> -->
                    <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment";
                            $result = $connect -> query($sql);

                            // $commentInfo = mysqli_fetch_array($result);
                            // $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);

                            // echo "<pre>";
                            // var_dump($commentInfo);
                            // echo "<pre>";

                            $count = $result -> num_rows;
                            
                    ?>      
                           
                          
                                                
                            <?php for($i=1; $i<=$count; $i++){$commentInfo = $result -> fetch_array(MYSQLI_ASSOC);?>
                                <div class="list">
                                <p class="comment__desc"><?=$commentInfo['youText']?></p>
                                <div class="comment__icon">
                                    <span class="face"><img src="img/사람.png" alt="얼굴"></span>
                                    <span class="name"><?=$commentInfo['youName']?></span>
                                    <span class="date"><?=date('y-m-d',$commentInfo['regTime'])?></span>
                                </div>
                            </div>
                            <?php } 
                            // Header("loaction: comment.php");
                            ?>
                      
                    </div>
                </div>
        </section>
    </main>
     

    <!-- footer -->
    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
    
</body>
</html>