<?php

class mobilePhone {
	
	public $phoneNumber = "9195555555";
	public $contacts = array();
	public $isMuted = "n";
  public $callState = 'hungup';
	public $manufacturer = "KimsalCo";
	
  public function __set($name, $value) {
    if($name=="contact")
    {
      $this->addContact($value['name'], $value['city'], $value['number']);
    }
  }

  public function __get($key)
  {
    echo "You tried to access $key but that doesn't exist\n";
  }

  public function addContact($name, $city, $number)
  {
    $this->contacts[] = array("name"=>$name, 
    "city"=>$city, "number"=>$number);
  }

	public function __construct() {  }

  public function __call($method, $args)
  {
    if(substr($method,0,12)=='findNumberBy')
    {
      $m = strtolower(str_replace("findNumberBy","",$method));
      $found = null;
      foreach($this->contacts as $contact) {
        if($contact[$m]==$args[0])
        {
          $found = $contact;
        }
      }
      return $found;
    }
  }
}

$phone1 = new mobilePhone();
$phone1->addContact("mike","raleigh","919 455 8488");
$phone1->addContact("mark","detroit","734 555 1212");
$phone1->addContact("lesley","youngsville","9195551212");
$phone1->contact = array("name"=>"joe","city"=>"dtown","number"=>"5551212");


$info = $phone1->findNumberByName("mike");
print_r($info);

$info = $phone1->findNumberByCity("dtown");
print_r($info);
?>
