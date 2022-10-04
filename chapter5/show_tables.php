<?php
    $mysqli = mysqli_connect("localhost","root","koreait514","opentutorials");
    
    $res = mysqli_query($mysqli,"SHOW TABLES FROM opentutorials");
    
    if(!$res) {
        echo mysqli_error($mysqli);
        exit;
    }

    $row = mysqli_fetch_assoc($res);
    var_dump($row);
    // $res = $mysqli->query("SHOW TABLES");
?>