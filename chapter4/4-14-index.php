<?php
$id = $_GET['id'] ?? 'SUBJECT'; /* (전 처리)ID가 없을 때 'SUBJECT'를 기본값으로 출력*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        URL 파라미터의 활용
    </title>
</head>

<body>
    <h1><a href="4-14-index.php">WEB</a></h1>
    <ol><?php
        $list = array('CSS','HTML','JavaScript','PHP','MySQL');
        foreach($list as $item){
            echo "<li><a href=4-14-index.php?id=$item>$item</a></li>";
        }
        ?>
    </ol>
    <h2>
        <?php
        if (array_key_exists('id', $_GET)) { // 'isset($_GET['id'])'로도 가능
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
        ?>
    </h2>
    <?php
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" .$_GET['id']);
    } else {
        echo "Hello, PHP";
    }
    ?>

</body>

</html>