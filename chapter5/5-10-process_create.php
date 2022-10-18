<?php
$conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials'); // DB 연결

//연관배열, SQL주입공격 필터링 해제
// $filtered = array (
//     'title' => ($_POST['title']),
//     'description' => ($_POST['description'])
// );

//연관배열, SQL주입공격 필터링
$filtered = array (
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'description' => mysqli_real_escape_string($conn, $_POST['description'])
);

// var_dump($_POST);

$sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$filtered['title']}',
        '{$filtered['description']}',
        NOW()
    )
    ";
// die($sql); // 인자로 들어오는 값을 출력하면서 프로그램의 실행을 멈추는 함수 (break제어문과 비슷)

    $result = mysqli_multi_query($conn, $sql); // 여러개의 query를 실행하는 함수 
    if($result == false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn)); // 에러내용을 error_log()함수를 이용해 아파치 error.log에 저장
    } else {
        echo "성공했습니다. <a href=\"5-10-index.php\">돌아가기</a>";
    }
    // mysqli_query($conn, $sql); //(접속정보가 담긴 인자, 명령문이 담긴 인자)
    // echo $sql;
?>