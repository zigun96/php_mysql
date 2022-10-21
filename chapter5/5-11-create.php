<!-- 데이터 베이스 제어코드 -->
<?php 
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials'); // DB 접속용 코드

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql); // SQL문을 DB서버에 전송하는 API //mysqli_query(접속식별자, SQL문);
    $list = "";
    while ($row = mysqli_fetch_array($result)) {
         // htmlspecialchars();가 크로스 사이트 스크립팅을 막아줌
        $escaped_title = htmlspecialchars($row['title']);
        $list = $list."<li><a href=\"5-11-index.php?id={$row['id']}\">{$escaped_title}</a></li>"; // list에 행 이어붙여 출력하고 해당 링크 걸기 (id값을 동적으로 받는)
    }
    // 연관배열 article default값

?>
<!-- 표현 코드 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        WEB
    </title>
</head>

<body>
    <h1><a href="5-11-index.php">WEB</a></h1>
    <ol>
        <?= $list ?>
    </ol>
    <form action="5-11-process_create.php" method="POST">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" placeholder="description"></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>