<?php

namespace Main;

use FactoryMethodConcrete\IDCardFactory;

require_once "../vendor/autoload.php";

$factory = new IDCardFactory();
$card1 = $factory->create('アラジンさん');
$card2 = $factory->create('鈴木さん');
$card3 = $factory->create('ガッツ');

$card1->useSomething();
$card2->useSomething();
$card3->useSomething();

