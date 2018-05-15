<?php
    session_start();
?>

<html>
    <head>
        <title>session testpage</title>
    </head>
    <body>
        
        <?php echo $_SESSION['user_id']; ?>
        <p><a href="index.php">TOP</a></p>
        
    </body>
</html>
