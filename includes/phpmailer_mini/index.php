<?php

class Batman {
  public $firstName = '';
  public $lastName = '';
  public $preferences = array();
  private $gender;

  // public function solveCrime($crime) {
  //   return "<h1>$crime solved!!</h1>";
  // }

  public function setGender($gender) {
    $this->gender = $gender;
  }

  public function getGender() {
    return $this->gender;
  }
}

$user = new Batman();

$user->firstName = 'Richard';
$user->lastName = 'Sledge';
$user->preferences = array('cigars','democratic party', 'filipina companions');

echo '<pre>', var_dump($user);'</pre>';
echo $user->solveCrime('gator');
echo $user->firstName;
$user->setGender('she-male');
echo ' is a ', $user->getGender();
