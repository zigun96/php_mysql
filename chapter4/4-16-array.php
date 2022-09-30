<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
    <script>
        var coworkers = ['egoing', 'leezche', 'duru', 'taeho']; // JavaScript 배열 생성
        coworkers.push('grapthittie');
        for(var item of coworkers) { // 배열의 item만큼 for반복문 반복
            document.write(item+ '<br>'); // coworkers 배열 item 출력
        }
        document.write('<br>');

        var obj = { // 연관배열 키:값
            egoing: 1,
            leezche: 2,
            duru: 3,
            taeho: 4,
        }
        for(var key in obj){
            document.write(`${key}:${obj[key]}<br>`); // `을 쓰면 출력줄에 ${}를 통해 변수를 넣을 수 있게 된다.
        }
    </script>
</head>

<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
    echo $coworkers[1].'<br>'; // .:문장 잇기, '':html
    echo $coworkers[3].'<br>';
    array_push($coworkers,'graphittie'); // 배열에 변수를 추가하는 함수
    var_dump(count($coworkers)); // var_dump(); 변수의 타입을 알아볼 수 있는 함수

    foreach ($coworkers as $item) { // foreach(as) 반복문
        var_dump($item);
    }

    $obj = array('egoing' => 1, 'leezche' => 2, 'duru' => 3, 'taeho' => 4,); // PHP의 연관배열 생성
    echo '<br><br>'.json_encode($obj);

    foreach ($obj as $key => $value) {
        echo "<br>$key: $value";
    }
    ?>

</body>

</html>