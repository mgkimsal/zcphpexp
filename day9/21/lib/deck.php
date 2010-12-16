<?php

class Deck {

  protected $cards = array();

  public function __construct()
  {
    $this->initDeck();

  }

  public function initDeck()
  {
    list($suits, $values) = Card::getSuitsValues();

    foreach($suits as $suit) {
      foreach($values as $k=>$v){
        $cards[] = new Card($suit, $value);
      }
    }
    shuffle($cards);
    $this->cards = $cards;
  }

  public function getCards()
  {
    return $this->cards;
  }

  public function getNextCard()
  {
     return array_pop($this->cards);
  }
}
