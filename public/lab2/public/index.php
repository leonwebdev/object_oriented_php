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

echo '<p>--------------------------------------------------------------------------------</p>';
echo 'getAll() show toooooo much thing, I comment it out, please check in source code.';
echo '<p>--------------------------------------------------------------------------------</p>';
// var_dump($user->getAll());
var_dump($user->getOne(17));

$array = [
    'first_name' => 'Lwion',
    'last_name' => 'Dascrt',
    'street' => '87 Dreij Street',
    'city' => 'Qudjr',
    'postal_code' => 'A9C0X7',
    'province' => 'Doxcjed',
    'country' => 'Janose',
    'phone' => '123-965-4589',
    'email' => uniqid() . '@exf.sd',
    'password' => 'ASDFasdf123!',
    'subscribe_to_newsletter' => '1',
];

// $last_insert_id = $user->create($array);
// var_dump($last_insert_id);
// var_dump($user->getOne($last_insert_id));

var_dump($user->delete(25));
var_dump($user->delete(2022));
var_dump($user->delete(11));
var_dump($user->isDelete(11));
var_dump($user->isDelete(12));
var_dump($user->isDelete(5222));