<?php

class Batman
{
    public $firstName = '';
    public $lastName = '';
    public $accountNumber = 0;
    public $balance = 0;
    public $isMember = FALSE;
    public $preferences = array();
}
//instansiate class
$user = new Batman();

$user ->firstName = 'Richard';
$user ->lastName = 'Sledge';
$user ->accountNumber = 123456;
$user ->balance = 0;
$user ->isMember = TRUE;
$user ->preferences = array('Cigars', 'Democratic Party', 'TommyHilfiger');

echo '<pre>', var_dump($user), '</pre>';

class Taco
{
public function makeH1($user)
{
    return "<h1>$user</h1>\n";
}
}
$html = new Taco();
echo $html ->makeH1('Gator');






