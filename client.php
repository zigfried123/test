<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new WebSocket\Client("ws://echo.websocket.org/");
$client->text("Hello WebSocket.org!");
echo $client->receive();

