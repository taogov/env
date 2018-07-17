<?php


$redisCli = (new Redis())->connect('redis');

echo 'Redis Connect Success' . PHP_EOL;

$mysqlCli = new PDO('mysql:host=mysql', 'root', '123456');

echo 'Mysql Connect Success';
