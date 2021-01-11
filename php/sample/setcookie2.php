<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>setcookie2</title>
</head>
<body>
    <?php
        setcookie('myCookie', null, time()-1000, '/');

        if(isset($_COOKIE['myCookie'])){
            echo "쿠키 만들어졌습니다.";
        } else {
            echo "쿠키 삭제되었습니다.";
        }
    ?>
</body>
</html>