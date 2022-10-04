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