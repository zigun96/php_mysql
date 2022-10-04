<?php
function get_title() {
    return $_GET['id'] ?? "Welcome";
}
function get_description() {
    if(isset($_GET['id'])) {
        return file_get_contents("data/".$_GET['id']);
    } else {
        return "Hello, PHP";
    }
}
function print_list() {
    $list = scandir('./data');
    // for($i = 0; $i < count($list); $i += 1) {
    foreach($list as $item) {
        if($item != '.' && $item != '..') {
            echo "<li><a href=\"?id=$item\">$item</a></li>\n";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?= get_title() ?>
        </title>
    </head>
    <body>
        <h1><a href="4-20-index.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <h2>
            <?= get_title() ?>
        </h2>
        <?= get_description() ?>
    </body>
</html>