<?php

require __DIR__ . '/config.php';
require __DIR__ . '/escape.php';

var_dump($errors);
var_dump($post);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <style>
        .form_validate_error {
            display: inline-block;
            color: rgb(219, 6, 6);
            padding-left: 1em;
            max-width: 350px;
        }
    </style>
</head>

<body>

    <h1>Register</h1>

    <form action="process_form.php" method="post" novalidate>
        <p><label for="first_name">First Name</label><br />
            <input type="text" name="first_name" value="<?= esc_attr($post['first_name'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['first_name'][0] ?? '') ?></span>
        </p>
        <p><label for="last_name">Last Name</label><br />
            <input type="text" name="last_name" value="<?= esc_attr($post['last_name'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['last_name'][0] ?? '') ?></span>
        </p>
        <p><label for="email_address">Email Address</label><br />
            <input type="text" name="email_address" value="<?= esc_attr($post['email_address'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['email_address'][0] ?? '') ?></span>
        </p>
        <p><label for="phone_number">Phone Number</label><br />
            <input type="text" name="phone_number" value="<?= esc_attr($post['phone_number'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['phone_number'][0] ?? '') ?></span>
        </p>
        <p><label for="city">City</label><br />
            <input type="text" name="city" value="<?= esc_attr($post['city'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['city'][0] ?? '') ?></span>
        </p>
        <p><label for="postal_code">Postal Code</label><br />
            <input type="text" name="postal_code" value="<?= esc_attr($post['postal_code'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['postal_code'][0] ?? '') ?></span>
        </p>
        <p><input type="submit" name="register"></p>
    </form>

</body>

</html>