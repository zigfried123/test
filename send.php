<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, true, false, false);

$msg = new AMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'task_queue');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();

