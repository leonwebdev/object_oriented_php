<?php

// require your class and test its functionality in this file.

require __DIR__ . '/../app/config/connect.php';
require __DIR__ . '/../app/Models/Model.php';
require __DIR__ . '/../app/Models/User.php';

echo 'Hello';

Model::init($dbh);

$user = new User();
