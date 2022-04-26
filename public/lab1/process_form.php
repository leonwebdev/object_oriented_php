<?php

require __DIR__ . '/config.php';
require __DIR__ . '/Validator.php';

$v = new Validator($_POST);

$v->validateRequired();
$v->validateMinLength(3, 'first_name');
$v->validateMinLength(3, 'last_name');
$v->validateMinLength(3, 'city');
$v->validateMaxLength(255, 'first_name');
$v->validateMaxLength(255, 'last_name');
$v->validateMaxLength(255, 'city');
$v->validateString('first_name');
$v->validateString('last_name');
$v->validateString('city');
$v->validateEmail('email_address');
$v->validatePhone('phone_number');
$v->validatePostalCode('postal_code');

if (!empty($v->errors())) {

    $_SESSION['errors'] = $v->errors();
    $_SESSION['post'] = $v->array();
    header('Location: form.php');
    die;
}
