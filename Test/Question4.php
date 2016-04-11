<?php

class Cars
{
    public $make = '';
    public $model = '';
    public $color = '';
    private $mileage;
    private $cost;
    


public function setCost($cost) {
    $this->cost = $cost;
    
}

public function getCost() {
    
    return $this->cost;
}
    
private function privateVar(){
    
    return 'PRIVATE FUNCTION';
}
    
}

$user = new Cars();
echo $user->make;
$user->setCost(125000);
echo $user->getCost();



