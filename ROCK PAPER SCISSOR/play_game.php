<html>
<head>
<?php

?>
</head>
 <body>

     <div style="width:100%;background-color:purple;height:30px;padding-top:20px">
       <center><b>WELCOME <?php echo $_GET['name'] ?></b></center>
    </div>
    <div style="width: 100%; display: table;margin-top:100px">
        <div style="display: table-row; height: 100px;">
            <div style=" display: table-cell; background: green;">
                <center><b><?php echo $_GET['name'] ?></b></center
                
                <?php if(isset($_GET['p1']))
                 {
                    ?>
                    <?php if($_GET['p1']==1) 
                        {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/fist.jpg"></center>
                            <center><h1><?php echo "ROCK";
                        } ?></h1><center>
                    <?php if($_GET['p1']==2) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/paper.jpg"></center>
                            <center><h1><?php echo "PAPER";
                          }
                    ?></h1><center>
                   
                   <?php if($_GET['p1']==3) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/scissor1.jpg"></center>
                            <center><h1><?php echo "SCISSOR";
                          }
                    ?></h1><center>
                 <?php } ?>
                 <center><a href="random_result.php?name=<?php echo $_GET['name']; ?>"><button>SPIN YOUR HAND</button></a></center>

                </div>
            <br><h1 style="color:red;font-size:70px">VS</h1>
            <div style="display: table-cell; background: blue;"> 
                <center><b>PLAYER 2</b></center>
                <?php if(isset($_GET['p2']))
                 {
                    ?>
                    <?php if($_GET['p2']==1) 
                        {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/fist.jpg"></center>
                            <center><h1><?php echo "ROCK";
                        } ?></h1><center>
                    <?php if($_GET['p2']==2) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/paper.jpg"></center>
                            <center><h1><?php echo "PAPER";
                          }
                    ?></h1><center>
                   
                   <?php if($_GET['p2']==3) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/scissor1.jpg"></center>
                            <center><h1><?php echo "SCISSOR";
                          }
                    ?></h1><center>
                 <?php } ?>
            </div><br>
            <h1 style="color:red;font-size:70px">VS</h1>
            <div style="display: table-cell; background: red;"> 
                <center><b>PLAYER 3</b></center>
                <?php if(isset($_GET['p3']))
                 {
                    ?>
                    <?php if($_GET['p3']==1) 
                        {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/fist.jpg"></center>
                            <center><h1><?php echo "ROCK";
                        } ?></h1><center>
                    <?php if($_GET['p3']==2) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/paper.jpg"></center>
                            <center><h1><?php echo "PAPER";
                          }
                    ?></h1><center>
                   
                   <?php if($_GET['p3']==3) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/scissor1.jpg"></center>
                            <center><h1><?php echo "SCISSOR";
                          }
                    ?></h1><center>
                 <?php } ?>
            </div><br>
            <h1 style="color:red;font-size:70px">VS</h1>
            <div style="display: table-cell; background: yellow;"> 
                <center><b>PLAYER 4</b></center>
                <?php if(isset($_GET['p4']))
                 {
                    ?>
                    <?php if($_GET['p4']==1) 
                        {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/fist.jpg"></center>
                            <center><h1><?php echo "ROCK";
                        } ?></h1><center>
                    <?php if($_GET['p4']==2) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/paper.jpg"></center>
                            <center><h1><?php echo "PAPER";
                          }
                    ?></h1><center>
                   
                   <?php if($_GET['p4']==3) 
                          {
                            ?>
                            <center><img style="width:100%;height:150px" src="image/scissor1.jpg"></center>
                            <center><h1><?php echo "SCISSOR";
                          }
                    ?></h1><center>
                 <?php } ?>
            </div>
        </div>
    </div>
<?php 
if(isset($_GET['p1']) && isset($_GET['p2']) && isset($_GET['p3']) && isset($_GET['p4']))
{
    ?>
    <br><center><table border="1">
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $_GET['name'] ?></td>
    <td>PLAYER2</td>
    <td>PLAYER3</td>
    <td>PLAYER4</td>
  </tr>
  <tr>
  <td><?php echo $_GET['name'] ?></td>
    <td>---</td>
    <td>
    
    <?php 

    $pl1=(int)$_GET['p1'];
    $pl2=(int)$_GET['p2'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p1']==1 && $_GET['p2']==2)
    {
        echo "0";
    }
    if($_GET['p1']==1 && $_GET['p2']==3)
    {
        echo "1";
    }
    if($_GET['p1']==2 && $_GET['p2']==1)
    {
        echo "1";
    }
    if($_GET['p1']==2 && $_GET['p2']==3)
    {
        echo "0";
    }
    if($_GET['p1']==3 && $_GET['p2']==1)
    {
        echo "0";
    }
    if($_GET['p1']==3 && $_GET['p2']==2)
    {
        echo "1";
    }
    ?>
    </td>
    <td>
    
    <?php 

    $pl1=(int)$_GET['p1'];
    $pl2=(int)$_GET['p3'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p1']==1 && $_GET['p3']==2)
    {
        echo "0";
    }
    if($_GET['p1']==1 && $_GET['p3']==3)
    {
        echo "1";
    }
    if($_GET['p1']==2 && $_GET['p3']==1)
    {
        echo "1";
    }
    if($_GET['p1']==2 && $_GET['p3']==3)
    {
        echo "0";
    }
    if($_GET['p1']==3 && $_GET['p3']==1)
    {
        echo "0";
    }
    if($_GET['p1']==3 && $_GET['p3']==2)
    {
        echo "1";
    }
    ?>

    </td>
    <td>
    
    <?php 

    $pl1=(int)$_GET['p1'];
    $pl2=(int)$_GET['p4'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p1']==1 && $_GET['p4']==2)
    {
        echo "0";
    }
    if($_GET['p1']==1 && $_GET['p4']==3)
    {
        echo "1";
    }
    if($_GET['p1']==2 && $_GET['p4']==1)
    {
        echo "1";
    }
    if($_GET['p1']==2 && $_GET['p4']==3)
    {
        echo "0";
    }
    if($_GET['p1']==3 && $_GET['p4']==1)
    {
        echo "0";
    }
    if($_GET['p1']==3 && $_GET['p4']==2)
    {
        echo "1";
    }
    ?>

    </td>
  </tr>
  <tr>
  <td>PLAYER2</td>
    <td>
    
    <?php 

    $pl1=(int)$_GET['p2'];
    $pl2=(int)$_GET['p1'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p2']==1 && $_GET['p1']==2)
    {
        echo "0";
    }
    if($_GET['p2']==1 && $_GET['p1']==3)
    {
        echo "1";
    }
    if($_GET['p2']==2 && $_GET['p1']==1)
    {
        echo "1";
    }
    if($_GET['p2']==2 && $_GET['p1']==3)
    {
        echo "0";
    }
    if($_GET['p2']==3 && $_GET['p1']==1)
    {
        echo "0";
    }
    if($_GET['p2']==3 && $_GET['p1']==2)
    {
        echo "1";
    }
    ?>
    
    </td>
    <td>---</td>
    <td>
    
    <?php 

    $pl1=(int)$_GET['p2'];
    $pl2=(int)$_GET['p3'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p2']==1 && $_GET['p3']==2)
    {
        echo "0";
    }
    if($_GET['p2']==1 && $_GET['p3']==3)
    {
        echo "1";
    }
    if($_GET['p2']==2 && $_GET['p3']==1)
    {
        echo "1";
    }
    if($_GET['p2']==2 && $_GET['p3']==3)
    {
        echo "0";
    }
    if($_GET['p2']==3 && $_GET['p3']==1)
    {
        echo "0";
    }
    if($_GET['p2']==3 && $_GET['p3']==2)
    {
        echo "1";
    }
    ?>
    
    </td>
    <td>
    
    
    <?php 

    $pl1=(int)$_GET['p2'];
    $pl2=(int)$_GET['p4'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p2']==1 && $_GET['p4']==2)
    {
        echo "0";
    }
    if($_GET['p2']==1 && $_GET['p4']==3)
    {
        echo "1";
    }
    if($_GET['p2']==2 && $_GET['p4']==1)
    {
        echo "1";
    }
    if($_GET['p2']==2 && $_GET['p4']==3)
    {
        echo "0";
    }
    if($_GET['p2']==3 && $_GET['p4']==1)
    {
        echo "0";
    }
    if($_GET['p2']==3 && $_GET['p4']==2)
    {
        echo "1";
    }
    ?>
    
    </td>
  </tr>
  <tr>
  <td>PLAYER3</td>
    <td>
    
    <?php 

    $pl1=(int)$_GET['p3'];
    $pl2=(int)$_GET['p1'];

    if(strcmp($pl1,$pl2)==0) 
    {
        echo "0";
    }
    if($_GET['p3']==1 && $_GET['p1']==2)
    {
        echo "0";
    }
    if($_GET['p3']==1 && $_GET['p1']==3)
    {
        echo "1";
    }
    if($_GET['p3']==2 && $_GET['p1']==1)
    {
        echo "1";
    }
    if($_GET['p3']==2 && $_GET['p1']==3)
    {
        echo "0";
    }
    if($_GET['p3']==3 && $_GET['p1']==1)
    {
        echo "0";
    }
    if($_GET['p3']==3 && $_GET['p1']==2)
    {
        echo "1";
    }
    ?>
    
    </td>
    <td>
    
    <?php 

$pl1=(int)$_GET['p3'];
$pl2=(int)$_GET['p2'];

if(strcmp($pl1,$pl2)==0) 
{
    echo "0";
}
if($_GET['p3']==1 && $_GET['p2']==2)
{
    echo "0";
}
if($_GET['p3']==1 && $_GET['p2']==3)
{
    echo "1";
}
if($_GET['p3']==2 && $_GET['p2']==1)
{
    echo "1";
}
if($_GET['p3']==2 && $_GET['p2']==3)
{
    echo "0";
}
if($_GET['p3']==3 && $_GET['p2']==1)
{
    echo "0";
}
if($_GET['p3']==3 && $_GET['p2']==2)
{
    echo "1";
}
?>


    </td>
    <td>---</td>
    <td>
    
    
    <?php 

$pl1=(int)$_GET['p3'];
$pl2=(int)$_GET['p4'];

if(strcmp($pl1,$pl2)==0) 
{
    echo "0";
}
if($_GET['p3']==1 && $_GET['p4']==2)
{
    echo "0";
}
if($_GET['p3']==1 && $_GET['p4']==3)
{
    echo "1";
}
if($_GET['p3']==2 && $_GET['p4']==1)
{
    echo "1";
}
if($_GET['p3']==2 && $_GET['p4']==3)
{
    echo "0";
}
if($_GET['p3']==3 && $_GET['p4']==1)
{
    echo "0";
}
if($_GET['p3']==3 && $_GET['p4']==2)
{
    echo "1";
}
?>

    
    </td>
  </tr>
  <tr>
  <td>PLAYER4</td>
    <td>
    
    <?php 

$pl1=(int)$_GET['p4'];
$pl2=(int)$_GET['p1'];

if(strcmp($pl1,$pl2)==0) 
{
    echo "0";
}
if($_GET['p4']==1 && $_GET['p1']==2)
{
    echo "0";
}
if($_GET['p4']==1 && $_GET['p1']==3)
{
    echo "1";
}
if($_GET['p4']==2 && $_GET['p1']==1)
{
    echo "1";
}
if($_GET['p4']==2 && $_GET['p1']==3)
{
    echo "0";
}
if($_GET['p4']==3 && $_GET['p1']==1)
{
    echo "0";
}
if($_GET['p4']==3 && $_GET['p1']==2)
{
    echo "1";
}
?>


    </td>
    <td>
    
    <?php 

$pl1=(int)$_GET['p4'];
$pl2=(int)$_GET['p2'];

if(strcmp($pl1,$pl2)==0) 
{
    echo "0";
}
if($_GET['p4']==1 && $_GET['p2']==2)
{
    echo "0";
}
if($_GET['p4']==1 && $_GET['p2']==3)
{
    echo "1";
}
if($_GET['p4']==2 && $_GET['p2']==1)
{
    echo "1";
}
if($_GET['p4']==2 && $_GET['p2']==3)
{
    echo "0";
}
if($_GET['p4']==3 && $_GET['p2']==1)
{
    echo "0";
}
if($_GET['p4']==3 && $_GET['p2']==2)
{
    echo "1";
}
?>

    
    </td>
    <td>
    
    <?php 

$pl1=(int)$_GET['p4'];
$pl2=(int)$_GET['p3'];

if(strcmp($pl1,$pl2)==0) 
{
    echo "0";
}
if($_GET['p4']==1 && $_GET['p3']==2)
{
    echo "0";
}
if($_GET['p4']==1 && $_GET['p3']==3)
{
    echo "1";
}
if($_GET['p4']==2 && $_GET['p3']==1)
{
    echo "1";
}
if($_GET['p4']==2 && $_GET['p3']==3)
{
    echo "0";
}
if($_GET['p4']==3 && $_GET['p3']==1)
{
    echo "0";
}
if($_GET['p4']==3 && $_GET['p3']==2)
{
    echo "1";
}
?>

    
    
    </td>
    <td>---</td>
  </tr>
</table>
</center>
<?php } ?>
 </body>
</html
