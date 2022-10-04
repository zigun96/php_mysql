<?php
    // $mysqli = mysqli_connect("example.com","user","password","database");
    // $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS_msg FROM DU-AL");
    // $row = mysqli_fetch_assoc($res);
    // echo $row['_msg'];

    $conn = mysqli_connect("localhost","root","koreait514","opentutorials");
    // mysqli_query($conn, "
    //     INSERT INTO topic (
    //         title,
    //         description,
    //         created
    //         ) VALUES (
    //             'MySQL',
    //             'MySQL is ...'
    //             NOW()
    //         )");
    
    $sql = "
        INSET INTO topic (
            title,
            description,
            created
            ) VALUES (
                'MySQL',
                'MySQL is ...
                NOW();
            )";
    $result = mysqli_query($conn, $sql);
    if( $result == false) {
        echo mysqli_error($conn);
    }
    
    
    
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