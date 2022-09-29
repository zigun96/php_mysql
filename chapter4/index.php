
<?php
    $id = $_GET['id'] ?? 'SUBJECT'; /* (전 처리)ID가 없을 때 'SUBJECT'를 기본값으로 출력*/ 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <title>
            URL 파라미터의 활용
        </title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="./?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?=$id ?> <!-- 전 처리해둔 변수를 가져옴 -->
        </h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae enim, vero optio ipsam eveniet sit.
        Porro officia rem magni laudantium molestias natus, beatae assumenda aliquid velit consectetur cupiditate non blanditiis.
    </body>

</html>