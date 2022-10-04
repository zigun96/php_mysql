<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);
header('Location: 4-23-index.php?id='.$_POST['title']);
?>