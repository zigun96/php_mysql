<?php
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials');
    // $sql = "SELECT * FROM topic"; // 'topic' TABLE 내용 전부 가져오기
    // $result = mysqli_query($conn, $sql); // SELECT문을 $result에 담아 DB에 전송
    // // var_dump($result->num_rows);
    // print_r(mysqli_fetch_array($result)); // $result에 담긴 DB내용 변환후 출력

    echo "<h1>single row</h1>";
    $sql = "SELECT * FROM topic WHERE id = 6";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo '<h2>'.$row['title'].'</h2>'; // 명령어를 담은 변수를 출력하면 변수에 담긴 내용이 실행된다.
                                       // title 출력
    echo $row['description'];          // description 출력

    // echo "<h1>multi row</h1>"; // 중복 코드 반복 실행
    // $sql = "SELECT * FROM topic";
    // $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // var_dump($row);

    echo "<h1>multi row</h1>";
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) { // mysqli_fetch_array() 함수로 가져온 값이 Null (false)가 될 때까지 반복수행
        echo '<h2>'.$row['title'].'</h2>';       // php에서는 NULL == false를 true로 반환한다.
        echo $row['description'];
    }
?>
