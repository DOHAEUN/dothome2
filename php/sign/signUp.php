<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="webstoryboy">
    <meta name="description" content="웹스토리보이 포트폴리오 사이트입니다.">
    <meta name="keywords" content="웹표준, 웹접근성, 사이트만들기, 포트폴리오, 웹스토리보이">
    <title>회원가입</title>
    <!-- CSS Style -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- webfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
    <!--  skip  -->
    <div id="skip">
        <a href="#signUpCont">회원가입 바로가기</a>
    </div>
    <!-- //skip  -->
    <!-- header  -->
       <header id="header"  class="black">
            <?php
                include '../component/header.php'
            ?>
        </header>
    <!-- //header -->
    <main>
        <!-- mainCont -->
        <section id="signUpCont">
            <div class="signText">
                <div class="signUp">
                    <h1><strong>PHP 포트폴리오</strong>사이트에 오신걸 환영합니다.</h1>
                    <form name="signUp" method="post" action="signUpSave.php">
                    <fieldset>
                        <legend class="sr-only">회원가입 폼입니다.</legend>
                        <div>
                            <label for="userEmail">이메일</label>
                            <input type="email" name="userEmail" id="userEmail" class="input-text" placeholder="이메일을 입력해주세요" required autofocus>
                        </div>
                        <div>
                           <label for="userEmail">이름</label>
                            <input type="text" name="useName" id="useName" class="input-text" placeholder="이름을 입력해주세요" required>
                        </div>
                        <div>
                            <label for="userEmail">닉네임</label>
                            <input type="text" name="useNickName" id="useNickName" class="input-text" placeholder="닉네임을 입력해주세요" required>
                        </div>
                        <div>
                            <label for="userEmail">비밀번호</label>
                            <input type="password" name="userPW" id="userPW" class="input-text" placeholder="비밀번호를 입력해주세요." required>
                        </div>
                        <div class="birth">
                            <div>
                                <label for="birthYear">년도</label>
                                <select name="birthYear" id="birthYear" required>
                                    <?php
                                        $birthYear = date('Y', time());
                                        
                                        for($i = $birthYear; $i >= 1930; $i--){
                                            echo "<option value='{$i}'>{$i}</option>";
                                        };
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="birthMonth">월</label>
                                <select name="birthMonth" id="birthMonth" required>
                                    <?php
                                        for($i = 1; $i <= 12; $i++){
                                            echo "<option value='{$i}'>{$i}</option>";
                                        };
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="birthDay">일</label>
                                <select name="birthDay" id="birthDay" required>
                                    <?php
                                        for($i = 1; $i <= 31; $i++){
                                            echo "<option value='{$i}'>{$i}</option>";
                                        };
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button class="signUpBtn" type="submit" value="회원가입">회원가입</button>
                        <p class="signDESC">로그인을 원하면 <a href="logIn.php">로그인</a></p>
                    </fieldset>
                </div>
            </div>
        </section>
        <!-- //mainCont -->
    </main>
</body>
</html>