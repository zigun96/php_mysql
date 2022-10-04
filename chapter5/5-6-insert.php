<?php
    // $mysqli = mysqli_connect("example.com","user","password","database");
    // $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS_msg FROM DU-AL");
    // $row = mysqli_fetch_assoc($res);
    // echo $row['_msg'];


    // 방법 1) API를 이용한 SQL문 삽입
    $conn = mysqli_connect("localhost","root","koreait514","opentutorials");
    mysqli_query($conn, "
        INSERT INTO topic (
            title,
            description,
            created
            ) VALUES (
                'MySQL',
                'MySQL is ...'
                NOW()
            )");
    
    // 방법 2) $sql 변수에 저장하고 API SQL을 이용한 SQL문 삽입        
    $sql = "
        INSERT INTO topic (
            title,
            description,
            created
            ) VALUES (
                'MySQL2',
                'MySQL2 is ...
                NOW();
            )";
    
    
    
    
            // echo $sql; /* error 여부 확인 */

    // mysqli_query($conn, $sql);

    // echo mysqli_error($conn); /* error 내용 확인(인자값으로 DB $link 변수를 받음) */



    // $res = mysqli_query($mysqli,"SHOW TABLES FROM opentutorials");
    // if(!$res) {
    //     echo mysqli_error($mysqli);
    //     exit;
    // }

    // $row = mysqli_fetch_assoc($res);
    // var_dump($row);
    // $res = $mysqli->query("SHOW TABLES");
?>