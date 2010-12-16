<?php include("bootstrap.php");?>
<?php include("header.php");?>

<?php
if($_GET['restart']=='y')
{
  session_destroy();
  header("Location: ./");
  die();
}

if($_SESSION['inplay']=='')
{
  $_SESSION['inplay'] = 'y';
  $deck = new Deck();
  $_SESSION['deck'] = $deck;
  $_SESSION['player'] = new Player("player");
  $_SESSION['dealer'] = new Player("dealer");
  $_SESSION['player']->takeCard($deck);
  $_SESSION['dealer']->takeCard($deck);
  $_SESSION['player']->takeCard($deck);
  $_SESSION['dealer']->takeCard($deck);
  $player = $_SESSION['player'];
  $dealer = $_SESSION['dealer'];
  $deck = $_SESSION['deck'];

} else {
  $player = $_SESSION['player'];
  $dealer = $_SESSION['dealer'];
  $deck = $_SESSION['deck'];

  if($_GET['hit']=='y')
  {
    $player->takeCard($deck);
  }

  if($_GET['hit']=='y' || $_GET['stand']=='y') 
  {
    if($dealer->getHandValue()<21)
    {
      $dealer->takeCard($deck);
    }
  }

  if($dealer->isBust())
  {
    $message = "Dealer went bust!";
    $_SESSION['inplay']='';
  } else { 
    if($player->isBust())
    {
      $message = "YOU went bust!";
      $_SESSION['inplay']='';
    }
  }



}
?>


<div id="main">
  <div id="left">
    <h1>
<?=$player->name;?> 
    </h1>
    <div class="cards">
<?=$player->renderHand();?>
    </div>
<div style="clear:both;"></div>
<h2>Hand: <?=$player->getHandValue();?></h2>
<?php
if(!$player->isBust() && $_SESSION['inplay']=='y') { 
?>
<a href="?hit=y">HIT ME</a> | 
<a href="?stand=y">STAND</a>
<?php
}
?>
  </div>

  <div id="right">
    <h1>
<?=$dealer->name;?>
    </h1>
    <div class="cards">
<?=$dealer->renderHand();?>
    </div>

  </div>
</div>

<div id="message">
<?=$message;?>
</div>





<?php include("footer.php");?>
