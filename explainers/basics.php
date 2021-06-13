<?php

use App\Kernel;

$something = [];
$something[] = 'something';
$something['TWO'] = 456754;
$something['TWO'];


$anotherArray = [
  'POO' => 'BEAR',
  3 => new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG'])
];

print_r($anotherArray[3]);








