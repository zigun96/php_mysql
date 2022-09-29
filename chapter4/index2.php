
<?php
    $id = $_GET['id'] ?? 'HTML'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <title>
            URL 파라미터, nl2br(), file_get_contents()함수 활용
        </title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index2.php?id=HTML">HTML</a></li> <!-- 링크가 걸린 문자 -->
            <li><a href="index2.php?id=CSS">CSS</a></li>
            <li><a href="index2.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?=$id ?> <!-- 전 처리해둔 변수를 가져옴 --> <!-- '?php echo'를 '?='으로 축약해서 표현 -->
        </h2>
        <h2>
            <?= nl2br(file_get_contents("data/$id"));?> <!-- 줄바꿈을 <br>로 인식하고, 'data/$id'의 내용 출력 -->
        </h2>
    </body>

</html>