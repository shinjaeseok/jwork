<?php

function enc($str)
{
    return base64_encode(hash('SHA256', trim($str), true));
}

// Sanitize a String
function sanitize($str)
{
    $str = trim($str);
    $str = filter_var($str, FILTER_SANITIZE_STRING);
    return $str;
}

