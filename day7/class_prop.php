<?php

class user {

  public $name = "";
  public $age = "";

  public function __construct($name,$age)
  {
    $this->name = $name;
    $this->age = $age;
    echo "I'm building a user named {$this->name}\n";
  }

  public function sayDate()
  {
    echo "Current date is ".date("m/d/Y")."\n";
  }

  public function say($string = "")
  {
    echo "The user ".$this->name." said $string\n";
  }


}

$u = new user("mike",32);
$u2 = new user("dave",16);
$u->say("Howdy!");
$u2->say("Howdy!");
