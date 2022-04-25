<?php

require __DIR__ . '/config.php';
require __DIR__ . '/Validator.php';

/* YOUR CODE HERE
-------------------------------------------- */

$v = new Validator($_POST);

$v->validateRequired();
$v->validateMinLength(3, 'first_name');
$v->validateMinLength(3, 'last_name');
$v->validateMaxLength(255, 'first_name');
$v->validateMaxLength(255, 'last_name');
$v->validateString('first_name');
$v->validateString('last_name');
$v->validateEmail('email_address');

if (!empty($v->errors())) {

    $_SESSION['errors'] = $v->errors();
    $_SESSION['post'] = $v->array();
    header('Location: form.php');
    die;
}