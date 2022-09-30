<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
</head>

<body>
    <h1>Comparison Operators & Boolean data type</h1>
    <?php
    var_dump('11');
    var_dump(1+1);
    ?>

    <h2>1 == 1</h2>
    <?php
    var_dump(1==1);
    ?>

    <h2>0 == null</h2>
    <?php
    var_dump(0==null);
    ?>

    <h2>0 === null</h2>
    <?php
    var_dump(0===null);
    ?>
    
    <h2>1 == 1.0</h2>
    <?php
    var_dump(1==1.0);
    ?>

    <h2>1 == '1'</h2>
    <?php
    var_dump(1=='1');
    ?>

    <h2>1 === '1'</h2>
    <?php
    var_dump(1==='1');
    ?>

    <h2>'false' == true</h2> <!-- 참조형이기 때문에 메모리 안에 데이터가 있으면 true로 표기함 -->
    <?php
    var_dump('false'==true);
    ?>

    <h2>99 == true</h2> 
    <?php
    var_dump(99==true);
    ?>
</body>

</html>