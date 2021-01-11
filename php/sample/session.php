<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>session</title>
</head>
<body>
    <?php
        session_start();
        
        //세션 생성
        $_SESSION['userID'] = 'webstoryboy';
    
        if(isset($_SESSION['userID'])){
            echo "세션 생성을 성공했습니다.";
            echo "{$_SESSION['userID']}";
        } else {
            echo "세션 생성을 실패했습니다.";
        }
    ?>
</body>
</html>