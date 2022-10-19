<!-- 데이터 베이스 제어코드 -->
<?php 
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials'); // DB 접속용 코드

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql); // SQL문을 DB서버에 전송하는 API //mysqli_query(접속식별자, SQL문);
    $list = "";
    while ($row = mysqli_fetch_array($result)) {
         // htmlspecialchars();가 크로스 사이트 스크립팅을 막아줌
        $escaped_title = htmlspecialchars($row['title']);
        $list = $list."<li><a href=\"5-10-index.php?id={$row['id']}\">{$escaped_title}</a></li>"; // list에 행 이어붙여 출력하고 해당 링크 걸기 (id값을 동적으로 받는)
    }
    // 연관배열 article default값
    $article = array( 
        'title' => 'Welcome',
        'description' => 'Hello, web'
    );
    if( isset($_GET['id'])) {
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']); // SQL 주입공격 방지 필터링
        $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
        $result = mysqli_query($conn, $sql); // DB연결과 SQL문 전송 
        $row = mysqli_fetch_array($result); // DB내용 변환 가져오기
        // 연관배열 article
        // $article = array( 
        //     'title' => $row['title'],
        //     'description' => $row['description']
        // );
        // htmlspecialchars();가 크로스 사이트 스크립팅을 막아줌
        $article['title'] = htmlspecialchars($row['title']); // 배열형태로 가져온 'title'을 저장
        $article['description'] =htmlspecialchars($row['description']); // 배열형태로 가져온 'description'을 저장
        print_r($article);
    }
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
    <h1><a href="5-10-index.php">WEB</a></h1>
    <ol>
        <?= $list?>
    </ol>
    <a href="5-10-create.php">create</a>
    <h2><?= $article['title'] ?></h2>
    <?= $article['description'] ?>
</body>

</html>