<?php

require __DIR__ . '/config.php';
require __DIR__ . '/Validator.php';

/* YOUR CODE HERE
-------------------------------------------- */

$v = new Validator($_POST);

$v->validateRequired();
$v->validateEmail('email_address');
$v->validateMinLength(3, 'first_name');

if (!empty($v->errors())) {

    $_SESSION['errors'] = $v->errors();
    $_SESSION['post'] = $v->array();
    header('Location: form.php');
    die;
}