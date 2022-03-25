
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>

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
    <div id="skip">
    <a href="#main">컨텐츠 바로가기</a>
    <a href="#footer">푸터 바로가기</a>
</div>
<!-- //skip -->    <!-- //skip --> 
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
            <li><a href="#">블로그</a></li>
            <li><a href="#">관리자</a></li>
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
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원가입</h3>
                <ul class="list">
                    <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                    <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.</li>
                </ul>
                <h4 class="mt30 mb10">개인정보 수집 및 이용에 대한 안내</h4>
                <div class="blue mb50">
                    <ul class="list">
                        <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                        <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                        <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                        <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                    </ul>
                    <span class="check">
                        <input type="checkbox" name="joinCheck" id="joinCheck">
                        <label for="joinCheck">약관에 동의합니다.</label>
                    </span>
                </div>

                <form action="joinSave.php" name="join" method="post" onsubmit="return joinChecks()">
                    <fieldset>
                        <legend class="ir_so">회원가입 입력폼</legend>
                        <div class="join-box">
                            <div class="overlap">
                                <label for="youEmail">이메일</label>   
                                <input type="email" id="youEmail" name="youEmail" placeholder="Sample@naver.com" required>
                                <a href="#c" class="test" onclick="emailChecking()">중복검사</a>
                                <p class="comment" id="youEmailComment"></p>
                            </div>
                            <div class="overlap">
                                <label for="youNickName">닉네임</label>   
                                <input type="text" id="youNickName" name="youNickName" placeholder="닉네임을 적어주세요!" required>
                                <a href="#c" class="test" onclick="nickChecking()">중복검사</a>
                                <p class="comment" id="youNickNameComment"></p>
                            </div>
                            <div class="basic">
                                <label for="youPass">비밀번호</label>   
                                <input type="password" id="youPass" name="youPass" maxlength="20" placeholder="비밀번호를 적어주세요!" required>
                                <p class="comment" id="youPassComment"></p>
                            </div>
                            <div class="basic">
                                <label for="youPassC">비밀번호 재확인</label>   
                                <input type="password" id="youPassC" name="youPassC" maxlength="20" placeholder="확인 비밀번호를 적어주세요!" required>
                                <p class="comment" id="youPassCComment"></p>
                            </div>
                            <div class="basic">
                                <label for="youName">이름</label>   
                                <input type="text" id="youName" name="youName" maxlength="5" placeholder="이름을 적어주세요!" required>
                                <p class="comment" id="youNameComment"></p>
                            </div>
                            <div class="basic">
                                <label for="youBirth">생년월일</label>   
                                <input type="text" id="youBirth" name="youBirth" placeholder="YYYY-MM-DD" maxlength="12" required>
                                <p class="comment" id="youBirthComment"></p>
                            </div>
                            <div class="basic">
                                <label for="youPhone">휴대폰 번호</label>   
                                <input type="text" id="youPhone" name="youPhone" placeholder="000-0000-0000" maxlength="15" required>
                                <p class="comment" id="youPhoneComment"></p>
                            </div>
                        </div>
                        <button id="joinBtn" class="join-submit" type="submit">회원가입 완료</button>
                    </fieldset>
                </form>
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
        let emailCheck = false;
        let nickCheck = false;

        function emailChecking(){
            let youEmail = $("#youEmail").val();

            if(youEmail == null || youEmail == ''){
                $("#youEmailComment").text("이메일을 입력해주세요!");
            } else {
                $.ajax({
                    type : "POST",           
                    url : "joinCheck.php",     //fetch(joinCheck.php)
                    data : {"youEmail": youEmail, "type": "emailCheck"},     
                    dataType : "json",

                    success : function(data){ 
                        if(data.result == "good"){
                            $("#youEmailComment").text("사용 가능한 이메일입니다.");
                            emailCheck = true;
                        } else {
                            $("#youEmailComment").text("이미 존재하는 이메일입니다. 로그인을 해주세요!");
                            emailCheck = false;
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                });
            }
        }

        function nickChecking(){
            let youNickName = $("#youNickName").val();

            if(youNickName == null || youNickName == ''){
                $("#youNickNameComment").text("닉네임을 입력해주세요!");
            } else {
                $.ajax({
                    type : "POST",           
                    url : "joinCheck.php",     
                    data : {"youNickName": youNickName, "type": "nickCheck"},  //   
                    dataType : "json", //서버가 우리에게 돌려주는 데이터의 형식 

                    success : function(data){   //성공했을 때의 이벤트핸들러 //첫번째 인자인 data에는 서버가 리턴해준 데이터가 들어온다. 데이터타입이 제이슨이기 때문에  배열에서 텍스트로 바뀐 리턴된 데이터는 내부적으로 제이슨으로 해석해서 배열로 다시 변환해준다.
                        if(data.result == "good"){  //받아온 데이터의 result가 good이라면 
                            $("#youNickNameComment").text("사용 가능한 닉네임입니다.");
                            nickCheck = true;
                        } else {
                            $("#youNickNameComment").text("이미 존재하는 닉네임입니다. 변경해주세요!");
                            nickCheck = false;
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                });
            }
        }

        function joinChecks(){
            //개인정보 동의 체크
            let joinCheck = $("#joinCheck").is(":checked");
            if(joinCheck == false){
                alert("개인정보수집 및 동의를 체크해주세요");
                return false;
            }

            //이메일 공백 검사
            if($("#youEmail").val() == ""){
                $("#youEmailComment").text("이메일을 입력해주세요!");
                return false;
            }

            //이메일 유효성 검사
            let getMail = RegExp(/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/);
            if(!getMail.test($("#youEmail").val())){
                $("#youEmailComment").text("이메일 형식에 맞게 작성해주세요!");
                $("#youEmail").val("");
                return false;
            }

            //이메일 중복 검사
            if(emailCheck == false){
                $("#youEmailComment").text("이메일 중복 검사를 확인해주세요!");
                return false;
            }

            //닉네임 공백 검사
            if($("#youNickName").val() == ""){
                $("#youNickNameComment").text("닉네임을 입력해주세요!");
                return false;
            }

            //닉네임 유효성 검사
            let getNick = RegExp(/^[가-힣|0-9]+$/);
            if(!getNick.test($("#youNickName").val())){
                $("#youNickNameComment").text("닉네임은 한글 숫자만 사용할 수 있습니다!");
                $("#youNickName").val("");
                return false;
            }

            //닉네임 중복 검사
            if(nickCheck == false){
                $("#youNickNameComment").text("닉네임 중복 검사를 확인해주세요!");
                return false;
            }

            //비밀번호 공백 검사
            if($("#youPass").val() == ""){
                $("#youPassComment").text("비밀번호를 입력해주세요!");
                return false;
            }

            //비밀번호 유효성 검사
            let getPass = $("#youPass").val();
            let getPassNum = getPass.search(/[0-9]/g);
            let getPassEng = getPass.search(/[a-z]/ig);
            let getPassSpe = getPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getPass.length < 8 || getPass.length > 20){
                $("#youPassComment").text("8자리 ~ 20자리 이내로 입력해주세요.");
                return false;
            } else if (getPass.search(/\s/) != -1){
                $("#youPassComment").text("비밀번호는 공백 없이 입력해주세요.");
                return false;
            } else if(getPassNum < 0 || getPassEng < 0 || getPassSpe < 0 ){
                $("#youPassComment").text("영문,숫자, 특수문자를 혼합하여 입력해주세요.");
                return false;
            } 

            //확인 비밀번호 공백 확인
            if($("#youPassC").val() == ""){
                $("#youPassCComment").text("확인 비밀번호를 입력해주세요!");
                return false;
            }

            //비밀번호가 동일한지 체크
            if($("#youPass").val() !== $("#youPassC").val()){
                $("#youPassCComment").text("비밀번호가 동일하지 않습니다.");
            }

            //이름 공백 확인
            if($("#youName").val() == ""){
                $("#youNameComment").text("이름을 입력해주세요!");
                return false;
            }

            //이름 유효성 검사
            let getName = RegExp(/^[가-힣]+$/);
            if(!getName.test($("#youName").val())){
                $("#youNameComment").text("이름은 한글만 사용할 수 있습니다!");
                $("#youName").val("");
                return false;
            }

            //생년월일 공백 확인
            if($("#youBirth").val() == ""){
                $("#youBirthComment").text("생년월일(YYYY-MM-DD)을 입력해주세요!");
                return false;
            }

            //생년월일 유효성 검사
            let getBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if(!getBirth.test($("#youBirth").val())){
                $("#youBirthComment").text("생년월일이 정확하지 않습니다. 올바른 생년월일(YYYY-MM-DD)을 적어주세요!");
                return false;
            }

            //휴대폰 번호 공백 확인
            if($("#youPhone").val() == ""){
                $("#youPhoneComment").text("휴대폰번호(000-0000-0000)를 입력해주세요!");
                return false;
            }

            //휴대폰 번호 유효성 검사
            let getPhone = RegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getPhone.test($("#youPhone").val())){
                $("#youPhoneComment").text("휴대폰 번호가 정확하지 않습니다. 올바른 휴대폰번호(000-0000-0000)를 입력해주세요!");
                $("#youPhone").val("");
                return false;
            }
        }
    </script>
</body>
</html>