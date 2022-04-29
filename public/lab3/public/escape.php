<?php

// Our escape function

/**
 * Escape string for output to HTML
 *
 * @param string $str
 * @return string
 */
function esc(string $str):string 
{
    return htmlentities($str, ENT_NOQUOTES, "UTF-8");
}

/**
 * Escape string for use in HTML attribute
 *
 * @param string $str
 * @return string
 */
function esc_attr(string $str):string 
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}


function html(string $str):string 
{
    $allowed = [
        '<p>',
        '<br>',
        '<hr>',
        '<em>',
        '<strong>',
        '<b>',
        '<i>',
        '<img>',
        '<h1>',
        '<h2>',
        '<h3>',
        '<h4>',
        '<h5>',
        '<h6>',
    ];

    // $allowed = '<br><p><hr>'; // can also be a string
    // strip tags... but maybe allow some
    $stripped = strip_tags($str, $allowed);

    // < > & " ' TM Copyright R
    $entitized = htmlentities($stripped, ENT_QUOTES, "UTF-8");

    $clean_html = htmlspecialchars_decode($entitized, ENT_NOQUOTES);

    return $clean_html;
}

/**
 * Return raw, unsantized data for output.
 *
 * @param mixed $var
 * @return mixed
 */
function raw(mixed $var):mixed 
{
    return $var;
}
