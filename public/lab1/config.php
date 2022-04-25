<?php

session_start();
ob_start();

$errors = $_SESSION['errors'] ?? [];
$post = $_SESSION['post'] ?? [];
unset($_SESSION['errors']);
unset($_SESSION['post']);