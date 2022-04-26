<?php

// require your class and test its functionality in this file.
ob_start();

require __DIR__ . '/../app/config/connect.php';
require __DIR__ . '/../app/config/escape.php';
require __DIR__ . '/../app/Models/Model.php';
require __DIR__ . '/../app/Models/User.php';

echo 'Hello';

Model::init($dbh);

$user = new User();

var_dump($user);
var_dump($user->getAll());
var_dump($user->getOne(3));