<?php

$redis = new Redis();

$client = $redis->connect('redis', '6379');


var_dump($client);

