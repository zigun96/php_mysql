<?php
$id = $_GET['id'] ?? 'HTML';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        scandir 함수 활용
    </title>
</head>

<body>
    <h1>WEB</h1>
    <ol>
        <?php
        $list = scandir('./data');
        var_dump($list);
        $i = 0;
        foreach ($list as $item) {
            if ($list[$i] != "." && $list[$i] != "..") {
                echo "<li>$list[$i]</li>";
            
            }
            $i += 1;
        }
    
        foreach ($list as $item) {
            if ($item != "." && $item != "..") {
                echo "<li>$item</li>";
            }
        }
        /*
        echo "<li>$list[0]</li>\n";
        echo "<li>$list[1]</li>\n";
        echo "<li>$list[2]</li>\n";
        echo "<li>$list[3]</li>\n";
        echo "<li>$list[4]</li>\n";
        echo "<li>$list[5]</li>\n";
        ?>
        */
        ?>
    </ol>
    <h2>
        <?= $id ?>

    </h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae enim, vero optio ipsam eveniet sit.
    Porro officia rem magni laudantium molestias natus, beatae assumenda aliquid velit consectetur cupiditate non blanditiis.
</body>

</html>