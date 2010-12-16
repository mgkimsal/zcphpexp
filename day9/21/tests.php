<?php

include("bootstrap.php");


// test 1
$deck = new Deck();
assert(count($deck->getCards())==52);

$player1 = new Player("me");
$player2 = new Player("dealer");

assert($player1->getHandValue()==0);
assert($player2->getHandValue()==0);

assert($player1->getCardCount()==0);
assert($player2->getCardCount()==0);

$player1->takeCard($deck);
$player2->takeCard($deck);
$player1->takeCard($deck);
$player2->takeCard($deck);

assert($player1->getCardCount()==2);
assert($player2->getCardCount()==2);

assert(count($deck->getCards())==48);

$p = new Player("demo");
$p->giveCard(new Card("C",4));
assert($p->getHandValue()==4);
$p->giveCard(new Card("C",8));
assert($p->getHandValue()==12);
$p->giveCard(new Card("C","A"));
assert($p->getHandValue()==13);
$p->giveCard(new Card("C","A"));
assert($p->getHandValue()==14);
$p->giveCard(new Card("C", 5));
assert($p->getHandValue()==19);

unset($p);
$p = new Player("demo2");
$p->giveCard(new Card("C","A"));
assert($p->getHandValue()==11);
$p->giveCard(new Card("S","A"));
assert($p->getHandValue()==12);
assert($p->isBust()===false);
$c = new Card("S","J");
$p->giveCard($c);
assert($p->getHandValue()==12);
assert($p->isBust()==false);
$p->giveCard(new Card("S","J"));
assert($p->getHandValue()==22);
assert($p->isBust());
