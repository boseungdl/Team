

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트</title>

    <!-- META -->
<meta name="acthor" content="webstroyboy">
<meta name="description" content="웹 표준을 준수한 사이트입니다.">
<meta name="keywords" content="웹표준, 웹접근성, 웹호환성, 사이트제작, 사이트만들기, 포트폴리오">
<meta name="robots" content="all">

<!-- 아이콘 & 파비콘 -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/icon114.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/icon114.png">
<link rel="apple-touch-icon-precomposed" href="img/icon.png">
<link rel="apple-touch-icon-precomposed" sizes="167x167" href="img/icon167.png">

<!-- CSS style -->
<link rel="stylesheet" href="../assets/css/fonts.css">
<link rel="stylesheet" href="../assets/css/reset.css">
<link rel="stylesheet" href="../assets/css/common.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body> 
    <header id="header">
    <h1 class="logo"> 
        <a href="../pages/main.php">PHP <em>class</em></a>
    </h1>
    <nav class="menu">
        <h2 class="ir_so">메인 메뉴</h2>
        <ul>
            <li><a href="../login/join.php">회원가입</a></li>
            <li><a href="../comment/comment.php">댓글</a></li>
            <li><a href="../board/board.php">게시판</a></li>
            <li><a href="../blog/blog.php">블로그</a></li>
            <li><a href="#">퀴즈</a>
                <ul class="sub">
                    <li><a href="../quiz/quizCreate.php">문제 만들기</a></li>
                    <li><a href="../quiz/quiz.php">문제 풀기</a></li>
                    <li><a href="../quiz/quizExam.php">기출 문제</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="member">
        <span class="ir_so">회정 정보 영역</span>
                    <a href="../login/join.php">회원가입</a>    
            <a href="../login/login.php">로그인</a>
            </div>
</header>    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="quiz-type" class="section center gray">
            <div class="container">
                <h3 class="section__title"><span>자바스크립트</span> 퀴즈</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 강의 퀴즈입니다.
                </p>
                <div class="quiz__inner">
                    <div class="quiz__header">
                        <div class="quiz__subject">
                            <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject">
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span> . 
                            <span class="quiz__ask"></span>
                            <div class="quiz__desc"></div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment green none">해설 보기</button>
                            <button class="next orange right ml10 none">다음 문제</button>
                            <button class="confirm green right">정답 확인</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->

    <footer id="footer" class="footer">
    <div class="container">
        <h2 class="ir_so">푸터 바로가기 메뉴</h2>
        <div class="footer-menu">
            <div>
                <h3>레이아웃 영역</h3>
                <ul>
                    <li><a href="#">레이아웃 유형01</a></li>
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
                    <li><a href="#">이미지 유형01</a></li>
                    <li><a href="#">동영상 유형02</a></li>
                    <li><a href="#">슬라이드 유형03</a></li>
                </ul>
            </div>
            <div>
                <h3>게시판 영역</h3>
                <ul>
                    <li><a href="../board/board.php">게시판</a></li>
                    <li><a href="../board/boardModify.php">게시판 수정하기</a></li>
                    <li><a href="../board/boardView.php">게시판 보기</a></li>
                    <li><a href="../board/boardWrite.php">게시판 쓰기</a></li>
                </ul>
            </div>
            <div>
                <h3>푸터 영역</h3>
                <ul>
                    <li><a href="#">컨택트 유형01</a></li>
                    <li><a href="#">푸터 유형02</a></li>
                </ul>
            </div>
            <div>
                <h3>사이트</h3>
                <ul>
                    <li><a href="#">웹표준 사이트</a></li>
                    <li><a href="#">반응형 사이트</a></li>
                    <li><a href="#">패럴랙스 사이트</a></li>
                    <li><a href="#">포트폴리오 사이트</a></li>
                </ul>
            </div>
        </div>
        <address class="footer-rights">
            &copy; 2022 webstoryboy. All rights reserved.
        </address>
    </div>
</footer>
<!-- //footer -->    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let quizAnswer = "";

        function quizView(view){
            $(".quiz__num").text(view.quizID);
            $(".quiz__ask").text(view.quizAsk);
            $("#select1 + span").text(view.quizChoice1);
            $("#select2 + span").text(view.quizChoice2);
            $("#select3 + span").text(view.quizChoice3);
            $("#select4 + span").text(view.quizChoice4);
            quizAnswer = view.quizAnswer;
        }

        //정답 체크
        function quizCheck(){
            let selectCheck = $(".quiz__selects input:checked").val();


            //정답을 체크 안했으면
            if(selectCheck == null || selectCheck == ''){
                alert("정답을 체크해주세요!!!")
            } else {
                $(".quiz__btn .next").fadeIn(); 
                $(".quiz__selects input").attr("disabled", true);

                //정답을 체크 했으면
                if(selectCheck == quizAnswer){
                    //정답
                    $(".quiz__selects #select"+quizAnswer).addClass("correct");
                  
                    
                } else {
                    //오답 
                    $(".quiz__selects #select"+selectCheck).addClass("incorrect");
                    $(".quiz__selects #select"+quizAnswer).addClass("correct");
                }
            }
        }


        //문제 데이터 가져오기
        function quizData(){
            let quizSubject = $("#quizSubject").val();

            $.ajax({
                url: "quizInfo.php",
                method: "POST",
                data: {"quizSubject": quizSubject},
                dataType: "json",
                success: function(data){
                    console.log(data.quiz);
                    quizView(data.quiz);
                },
                error: function(reqeust, status, error){
                    console.log('reqeust' + reqeust);
                    console.log('status' + status);
                    console.log('error' + error);
                }
            })
        }
        quizData();
        
        //과목 선택
        $("#quizSubject").change(function(){
            quizData();
        })

        //정답 확인
        $(".quiz__btn .confirm").click(function(){
            //정답을 클릭했는지 안했는지 판단
            quizCheck();

            $(".quiz__btn .next").fadeIn(); 
            // $(".quiz__btn .comment").fadeIn(); 
        });
        $(".quiz__btn .next").click(function(){
            quizData();
            $(".quiz__selects input").prop("checked", false);
            $(".quiz__selects input").removeClass("incorrect");
            $(".quiz__selects input").removeClass("correct");
            $(".quiz__btn .next").fadeOut(); 
            $(".quiz__selects input").attr("disabled", false);
        });
    </script>

</body>
</html>