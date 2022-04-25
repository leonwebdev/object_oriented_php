<?php

require __DIR__ . '/config.php';
require __DIR__ . '/escape.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
</head>

<body>

    <h1>Register</h1>

    <form action="process_form.php" method="post" novalidate>
        <p><label for="first_name">First Name</label><br />
            <input type="text" name="first_name" />

        </p>
        <p><label for="last_name">Last Name</label><br />
            <input type="text" name="last_name" />
        </p>
        <p><label for="email_address">Email Address</label><br />
            <input type="text" name="email_address" value="<?= esc_attr($post['email_address'] ?? '') ?>" />
            <span class="form_validate_error"><?= esc($errors['email_address'][0] ?? '') ?></span>
        </p>
        <p><label for="phone_number">Phone Number</label><br />
            <input type="text" name="phone_number" />
        </p>
        <p><label for="city">City</label><br />
            <input type="text" name="city" />
        </p>
        <p><label for="postal_code">Postal Code</label><br />
            <input type="text" name="postal_code" />
        </p>
        <p><input type="submit" name="register"></p>
    </form>

</body>

</html>