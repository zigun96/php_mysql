<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
</head>

<body>
    <h1>Conditional</h1>
    <h2>?php echo __?형태</h2> 
    <?php
    echo '1<br>';
    echo '2<br>';
    echo '3<br>';
    ?>
    <h2>?=__?형태</h2> 
    <?= /* 축약형은 한 줄 출력만 되므로 '.'으로 이어붙여 표현해줌 */
        '1<br>' .
        '2<br>' .
        '3<br>';
    ?>
    <h2>if</h2>
    <?php
    echo '1<br>';
    if (true) { /*true일 때*/
        echo '2<br>';
    }
    echo '3<br>';
    ?>

    <?php
    echo '1<br>';
    if (false) { /*false일 때*/
        echo '2<br>';
    }
    echo '3<br>';
    ?>

    <h2>if/else</h2>
    <?php
    echo '1<br>';
    if (true) {
        echo '2-1<br>';
    } else {
        echo '2-1<br>';
    }
    echo '3<br>';
    ?>
</body>

</html>