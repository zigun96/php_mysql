<!DOCTYPE html>
<html>
    <head>
        <title>
            보안 - 이스케이핑
        </title>
    </head>
    <body>
        <?php
            echo htmlspecialchars('<script>alert(\'hi\')</script>');
        ?>
    </body>
    
</html>