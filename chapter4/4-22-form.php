<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    echo "<p>title : " . $_POST['title'] . "</p>";
    echo "<p>description : " . $_POST['description'] . "</p>";
    ?>
    <?php
    file_put_contents('data/' . $_POST['title'] , $_POST['description']);
    ?>
</body>

</html>