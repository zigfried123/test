<?php


require __DIR__ . '/vendor/autoload.php';

$client = new  Predis\Client();

$client -> set ( 'foo' , 'bar' );
 $value = $client -> get ( 'foo' );




var_dump($value);
