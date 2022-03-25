<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 정보</title>
    <link href="https://webfontworld.github.io/BMJua/BMJua.css" rel="stylesheet">
    <style>
        .mypage__inner {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 100px 0;
        }
        .mypage__profile {
            margin-top: 100px;
            text-align: center;
            border-right: 1px solid #ddd;
            padding-right: 30px;
        }
        .mypage__img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .mypage__changeImg a {
            color: #fff;
            padding: 6px 15px;
            display: inline-block;
            border: 1px solid #fff;
            border-radius: 10px;
            margin-bottom: 50px;
            font-size: 12px;
            background: #000;
            transition: all 0.3s;
        }
        .mypage__changeImg a:hover {
            background: #fff;
            color: #000;
            border: 1px solid #000;
        }
        .mypage__nickName {
            font-size: 24px;
            color: #222;
            margin-bottom: 10px;
        }
        .mypage__name {
            font-size: 18px;
            color: #777;
            margin-bottom: 150px;
        }
        .mypage__play {}
        .mypage__play span {
            font-size: 24px;
            padding: 20px 30px;
        }
        .mypage__play em {
            margin-left: 10px;
            font-size: 18px;
        }
        .mypage__play span:nth-child(2) {
            border-right: 1px solid #ccc;
            border-left: 1px solid #ccc;
        }
        .mypage__info {
            width: 900px;
            padding-left: 50px;
            margin-top: 100px;
        }
        .mypage__modifyBtn {
            text-align: right;
        }
        .mypage__modifyBtn a {
            padding: 10px 20px;
            font-size: 18px;
            display: inline-block;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 10px;
            background: #000;
            transition: all 0.3s;
        }
        .mypage__modifyBtn a:hover {
            background: #fff;
            color: #000;
            border: 1px solid #000;
        }
        .mypage__info input {
            width: 100%;
            height: 50px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
        }
        .info__modify {
        }
        .mypage__info .nameWrap {
            display: flex;
            justify-content: space-between;
        }
        .mypage__info label {
            display: block;
            font-size: 14px;
            margin: 20px 0 5px;
        }
        .nameWrap .nameBox {
            width: 49%;
        }
        .nameWrap .nickNameBox {
            width: 49%;
        }
        .mypage__info textarea {
            width: 100%;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #000;
            resize: none;
            height: 200px;
            border-radius: 5px;
        }
        .footer {
            background: #F5F5F5;
        }
    </style>
    <?php
        include "../../include/style.php"
    ?>
    <!-- //style -->
</head>
<body>
    <?php
        include "../../include/skip.php";
    ?>
    <!-- // skip -->
    <?php
        include "../../include/header.php";
    ?>
    <!-- // header -->
<main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="mypage-type">
            <div class="mypage__inner">
                <article class="mypage__profile">
                    <figure>
                        <img src="../assets/img/Sun.jpg" alt="프로필이미지" class="mypage__img">
                    </figure>
                    <div class="mypage__changeImg"><a href="#">이미지 변경</a></div>
                    <div class="mypage__nickName">젠틀맨 김창식</div>
                    <div class="mypage__name">김정식</div>
                    <div class="mypage__play">
                        <span>댓글<em>100</em></span>
                        <span>게시물<em>30</em></span>
                        <span>좋아요<em>1515</em></span>
                    </div>
                </article>
                <article class="mypage__info">
                <h1>회원 정보</h1>
                    <form action="#" class="info__modify">
                        <fieldset>
                            <legend class="ir_so">검색영역</legend>
                            <div class="mypage__modifyBtn">
                                <button><a href="#">수정하기</a></button>
                            </div>
                            <div class="nameWrap">
                                <div class="nameBox">
                                    <label for="info__name">이름</label>
                                    <input type="text" name="info__name" class="info__name">
                                </div>
                                <div class="nickNameBox">
                                    <label for="info__nickName">닉네임</label>
                                    <input type="text" name="info__nickName" class="info__nickName">
                                </div>
                            </div>
                            <div class="info__email">
                                <label for="info__email">이메일</label>
                                <input type="text" name="info__email" class="info__email">
                            </div>
                            <div class="info__password">
                                <label for="info__password">비밀번호</label>
                                <input type="text" name="info__password" class="info__password">
                            </div>
                            <div class="info__introduce">
                                <label for="info__introduce">자기소개</label>
                                <textarea name="info__introduce" id="info__introduce" class="info__introduce">자기소개쓰는란</textarea>
                            </div>
                        </fieldset>
                    </form>
                </article>
            </div>
        </section>
    </main>
<?php
    include "../../include/footer.php";
?>
<!-- // footer -->
</body>
</html>