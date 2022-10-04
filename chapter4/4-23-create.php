<?php
    require('lib/print.php');
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
        <form action="4-23-create_process.php" method="post">
            <p>
                <input type = "text" name = "title" placeholder="Title"/>
            </p>
            <p>
                <textarea name="description" placeholder="Description"></textarea>
            </p>
            <p>
                <input type="submit" value="Submit"/>
            </p>
        </form>

        <h2>
            <?= get_title() ?>
        </h2>
        <?= get_description() ?>
    </body>
</html>