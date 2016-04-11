<?php

include './includes/phpmailer_mini/includes/myconstant.php';
include './includes/phpmailer_mini/includes/ad_block.php';


class Student {
    
    public $firstName;
    public $lastName;
    private $birthDate;
    private $ssn;
    
    public function setBirth($date) {
        
        $this->birthDate = $date;
        
        }
    
    public function getBirth() {
        return $this->birthDate;
        
    }
    
    public function setSsn($ssn) {
        
        $this -> ssn = $ssn;
        
    }
    
    public function getSsn() {
        return $this->ssn;
        
    }
    
}

$john = new Student();
$susy = new Student();

$john->firstName = 'John';
$john->lastName = 'Connor';
$john->setBirth('11/22/1908'); //these are functions...no equal sign
$john->setSsn('123456789');    //these are function...no equal sign

$susy->firstName = 'Sarah';
$susy->lastName = 'Q';
$susy->setBirth('11/22/1908'); //ditto
$susy->setSsn('123456789');    //ditto

echo STUDENTS .' @ ' . SCHOOL . '<br />';
echo $john->firstName . ' ' . $john->lastName;
echo '<br />';
echo "John's birthdate is: " . $john->getBirth();

echo '<br />';

  $a = '55';
    echo $a;
echo "+";
    $b = '65';
    echo $b;
echo "+";
    $c = '75';
    echo $c;
echo "=";
 
    echo $a + $b + $c;

function addNums($a, $b) {
    
    return $a + $b;
    
}

echo '<br />';
echo 'The sum of 2 + 2 is: ' . addNums(2, 2);
echo $text;

