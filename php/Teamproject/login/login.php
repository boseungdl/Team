<?php
    if(isset($_COOKIE['id'])){
        $cookie_id = $_COOKIE['id'];
    } else {
        $cookie_id = "";
    } 
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    
    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
</head>
<body>
    <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- contents -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="login-type">
            <div class="member-form">
                <div class="logo"><img src="../assets/img/Logo.png" alt="로고"></div>
                <h3>로그인</h3>
                <form action="loginSave.php" name="login" method="post">
                    <fieldset>
                        <legend class="ir_so">로그인 입력폼</legend>
                        <div class="login-box">
                            <div>
                                <label for="youEmail">이메일 주소</label>
                                <input type="email" id="youEmail" name="youEmail" placeholder="Sample@naver.com" autocomplete="off" value="<?=$cookie_id?>" autofocus required>
                            </div>
                            <div class="mt30">
                                <label for="youPass">비밀번호</label>
                                <input type="password" id="youPass" name="youPass" maxlength="20" placeholder="비밀번호를 적어주세요!" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="agree">
                                    <input class="select" type="checkbox" id="agree" value="" name="agree">
                                    <span class="agree">회원정보 기억하기</span>
                                </label>
                            </div>
                        </div>
                        <div class="another">
                            <img src="../assets/img/google.png" alt="구글">
                            <img src="../assets/img/kakao.png" alt="카카오">
                            <img src="../assets/img/naver.png" alt="네이버">
                        </div>
                        <button id="loginBtn" class="login-submit" type="submit" onclick="loginProcess()">로그인</button>
                        <div class="other">
                            <a href="join.php">회원가입</a>
                            <a href="findID.php">아이디</a> / <a href="findPass.php">비밀번호 찾기</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- footer -->
   
</body>
</html>