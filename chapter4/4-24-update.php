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
    <?php if (isset($_GET['id'])) { ?>
        <a href="4-24-update.php?id=<?php echo $_GET['id']; ?>">update</a>
    <?php } ?>
    <form action="4-24-update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_GET['id']?>"/>
        <p>
            <input type="text" name="title" placeholder="Title" value="<?= get_title() ?>"/>
        </p>
        <p>
            <textarea name="description" placeholder="Description"><?= get_description() ?></textarea>
        </p>
        <p><input type="submit" value="Submit">
        </p>
        
</body>

</html>