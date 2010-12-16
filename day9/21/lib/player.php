<?php

class player 
{

  public $name;
  public $hand = array();

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getHandValue()
  {
    if(count($this->hand)==0)
    {
      return 0;
    }

    $tempValue = 0;
    $aceCount=0;
    foreach($this->hand as $card)
    {
      $value = $card->getValue();
      if($value=="Ace")
      {
        $aceCount++;
      } else {
        $tempValue+=$value;
      }
    }
    for($temp=$aceCount; $temp>0; $temp--)
    {
      if( (($temp*11) + $tempValue) <=21)
      {
        $tempValue+=11;
      } else{
        $tempValue += 1;
      }
    }

    return $tempValue;
  }

  public function getCardCount()
  {
    return count($this->hand);
  }

  public function takeCard(Deck $deck)
  {
    $this->hand[] = $deck->getNextCard();
  }


  public function giveCard(Card $card)
  {
    $this->hand[] = $card;
  }

  public function isBust()
  {
    if($this->getHandValue()>21)
    {
      return true;
    }
    return false;
  }

}
