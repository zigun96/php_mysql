<?php
$conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials'); // DB 연결

// var_dump($_POST);
$sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
    ";
    $result = mysqli_query($conn, $sql);
    if($result == false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn)); // 에러내용을 error_log()함수를 이용해 아파치 error.log에 저장
    } else {
        echo "성공했습니다. <a href=\"5-7-index.php\">돌아가기</a>";
    }
    // mysqli_query($conn, $sql); //(접속정보가 담긴 인자, 명령문이 담긴 인자)
    // echo $sql;
?>