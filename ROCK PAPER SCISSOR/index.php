<!DOCTYPE html>
<html lang="en">
<head>

<?php
    $var=0;
    if(isset($_POST['play']))
    {
      $var=1;
    }
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <center><img src="image//heading_img.png" alt=""></img></center>
    <marquee><h1 style="color:green">WELCOME TO ROCK PAPER SCISSOR GAME</h1></marquee>
</head>
<body bgcolor="purple">
    <?php if($var==1){ ?>
        <center><div style="background-color:white;width:40%;hieght:60%">
    <form action="play_game.php" method="GET" autocomplete="off">
    <table>
        <tr>
            <td>YOUR NAME</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Continue" name="continue" required></td>
        </tr>
    </table>
    </form>
    </div></center>
    <?php } ?>
    <?php if($var==0)
    {
        ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
<center><input type="submit" value="STARTS PLAYING" name="play" required/></center>             
</form>
<?php }

?>

</body>
</html>
