<header id="header">
        <h1 class="logo">
            <a href="../pages/main.php">PHP <em>class</em></a>
        </h1>
        <nav class="menu">
            <h2 class="ir_so">메인 매뉴<i class="fa-brands fa-angellist"></i></h2>
            <ul>
                <li><a href="../login/join.php">회원가입</i></a></li>
                <li><a href="../comment/comment.php">댓글</a></li>
                <li><a href="../board/board.php">게시판</a></li>
                <li><a href="../blog/blog.php">블로그</a></li>
                <li><a href="../quiz/quiz.php">퀴즈</a>
                    <ul class="sub">
                        <li><a href="../quiz/quizCreate.php">문제 만들기</a></li>
                        <li><a href="../quiz/quiz.php">문제 풀기</a></li>
                        <li><a href="../quiz/quizExam.php">기출 문제</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="member">
            <!-- <span class="ir_ou">회원 정보 영역</span> -->
            <?php   if(isset($_SESSION['memberID'])){ ?>
                
                    <a href="../mypage/mypage.php" class="setting">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_126_1386" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="30" height="30">
                            <path d="M19 34C27.2843 34 34 27.2843 34 19C34 10.7157 27.2843 4 19 4C10.7157 4 4 10.7157 4 19C4 27.2843 10.7157 34 19 34Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_126_1386)">
                            <path d="M19 34C27.2843 34 34 27.2843 34 19C34 10.7157 27.2843 4 19 4C10.7157 4 4 10.7157 4 19C4 27.2843 10.7157 34 19 34Z" fill="#414141"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0002 34.0761H30.1542V30.5231C30.1542 29.3501 29.3522 27.8661 28.3722 27.2261L22.9372 23.9261C22.5122 23.6731 22.0242 23.3061 22.0242 22.2331C22.0242 21.5301 22.6172 20.9731 22.7962 20.7531C23.6685 19.8066 24.1519 18.5661 24.1502 17.2791V14.6461C24.1502 11.7921 21.8462 10.1541 19.0002 10.1541C16.1532 10.1541 13.8482 11.7921 13.8482 14.6461V17.2791C13.8482 18.6231 14.3652 19.8381 15.2042 20.7531C15.3822 20.9731 15.9752 21.5301 15.9752 22.2331C15.9752 23.3071 15.4872 23.6731 15.0622 23.9251L9.62619 27.2261C8.64719 27.8661 7.84619 29.3501 7.84619 30.5231V34.0761H19.0002Z" fill="#595959"/>
                            </g>
                            </svg>
                            <?=$_SESSION['youName']?> 님 환영합니다.</a>
                    <a href="../login/logout.php">로그아웃</a>
            <?php  } else {   ?>
                    <a href="../login/join.php">회원가입</a>
                    <a href="../login/login.php">로그인</a>
            <?php    } ?>
        </div>
        
             
            

          


           
    </header>
    <!-- //header -->