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

  static function getSuitsValues()
  {
    static $suits;
    static $values;
    if($suits=='')
    {
      $suits = array("D"=>"Diamonds","H"=>"Hearts","C"=>"Clubs","S"=>"Spades");
      $values["A"] = "Ace";
      for($x=2; $x<=10; $x++) 
      {
        $values[$x] = $x;
      }
      $values["J"] = 10;
      $values["K"] = 10;
      $values["Q"] = 10;
    }
    return array($suits, $values);
  }
}
