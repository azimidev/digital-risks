<?php

function encrypt_with_key($key, $value)
{
    return encrypt($encrypted = "{$key}||{$value}");
}

function decrypt_with_key($key, $value)
{
    $decrypted = decrypt($value);
    $explode = explode('||', $decrypted);

    if ($key !== $explode[0]) {
        return false;
    }

    return $explode[1];
}
