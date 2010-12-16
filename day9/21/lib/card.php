<?php

class Card {

  public $value;
  public $suit;

  public function __construct($suit, $value)
  {
    $this->value = $value;
    $this->suit = $suit;
  }

  public function getValue()
  {
    list($suits, $values) = self::getSuitsValues();
    return $values[$this->value];
  }

  public function getImageNumber()
  {
    list($suits, $values) = self::getSuitsValues();
    $suitPos = array_search($this->suit, array_reverse(array_keys($suits)));
    $valuePos = array_search($this->value, array_reverse(array_keys($values)));
    $num = ($valuePos*4) + ($suitPos)+1;
    return $num;
  }

  public function getImage()
  {
    return "images/".$this->getImageNumber().".png";
  }

  static function getSuitsValues()
  {
    static $suits;
    static $values;
    if($suits=='')
    {
      $suits = array("D"=>"Diamonds","H"=>"Hearts","S"=>"Spades","C"=>"Clubs");
      for($x=2; $x<=10; $x++) 
      {
        $values[$x] = $x;
      }
      $values["J"] = 10;
      $values["Q"] = 10;
      $values["K"] = 10;
      $values["A"] = "Ace";
    }
    return array($suits, $values);
  }

}
