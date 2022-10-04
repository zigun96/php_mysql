<?php
    require('lib/print.php'); //라이브러리 활용
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
        <h1><a href="4-23-index.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <a href="4-23-create.php">create</a>
        <?php if(isset($_GET['id'])) {?>
            <a href="4-24-update.php?id=<?= $_GET['id']; ?>">update</a>
            <form action="4-25-delete_process.php" method="POST">
            <input type="hidden" name="id" value="<?=$_GET['id'] ?>" />
            <input type="submit" value="delete"/>
            <!--<a href="4-25-delete_process.php?id=</?= $_GET['id']; ?>">delete</a>-->
            </form>
        <?php } ?>

        <h2>
            <?= get_title() ?>
        </h2>
        <?= get_description() ?>
    </body>
</html>