<?php
require ('vendor/autoload.php');

use App\Phones\{CellNokia, CellPhilips};
use GuzzleHttp\Client as Client2;


//$phone = new CellPhone(['sim1', 'sim2'], 1000);
//
//$phone->setMoney(20);
//$phone->call(380675643732);
//$phone->sendSMS(380675643732, 'Hello world!');

$philips = new CellPhilips(['sim1', 'sim2'], 1000, 'Philips');

$nokia = new CellNokia(['sim1', 'sim2'], 1000, 'Nokia');

$philips->setMoney(20);
$philips->call(380675643732);
$philips->sendSMS(3806756437325345345, 'Hello world!');
