<?php 
$name_p1=$_GET['name']; 
$player1=rand(1,3);
$player2=rand(1,3);
$player3=rand(1,3);
$player4=rand(1,3);
header("location:play_game.php?p1=$player1 &p2=$player2&p3=$player3&p4=$player4&name=$name_p1");
?>