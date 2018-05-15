<?php
session_start();

if (!isset($_SESSION['user_id'])){
    if($_POST['id']){
        $_SESSION['user_id'] = $_POST['id'];
    }
}

// logput
if($_POST['logout']){
    unset($_SESSION['user_id']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>session test</title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <?php if(!isset($_SESSION['user_id'])){ ?>
            <form action="index.php" method="post">
                <input type="text" name="id" placeholder="Please input your ID">
                <input type="submit" name="id_submit" value="submit">
            </form>
        <?php }else{ ?>
            <p>Your ID is No <?php echo $_SESSION['user_id'] ?>.</p>
            <a href="test.php">Test page</a>
            <form action="index.php" method="post">
                <input type="submit" value="logout" name="logout">
            </form>
        <?php } ?>
        
    </body>
</html>