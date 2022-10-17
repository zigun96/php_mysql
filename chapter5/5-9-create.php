<?php
$conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials'); // DB 접속용 코드

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql); // SQL문을 DB서버에 전송하는 API //mysqli_query(접속식별자, SQL문);
$list = "";
while ($row = mysqli_fetch_array($result)) {
$list = $list."<li><a href=\"5-9-index.php?id={$row['id']}\">{$row['title']}</a></li>"; // list에 행 이어붙여 출력하고 해당 링크 걸기 (id값을 동적으로 받는)
}
// 연관배열 article default값
$article = array( 
    'title' => 'Welcome',
    'description' => 'Hello, web'
);
if( isset($_GET['id'])) {
    $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql); // DB연결과 SQL문 전송 
    $row = mysqli_fetch_array($result); // DB내용 변환 가져오기
    // 연관배열 article
    // $article = array( 
    //     'title' => $row['title'],
    //     'description' => $row['description']
    // );
    $article['title'] = $row['title']; // 배열형태로 가져온 'title'을 저장
    $article['description'] = $row['description']; // 배열형태로 가져온 'description'을 저장
    print_r($article);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        WEB
    </title>
</head>

<body>
    <h1>WEB</h1>
    <ol>
        <?= $list ?>
    </ol>
    <form action="5-7-process_create.php" method="POST">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" placeholder="description"></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>