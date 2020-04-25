<?php

use Illuminate\Support\Facades\Log;

function encrypt_with_key($key, $value)
{
    return encrypt($encrypted = "{$key}||{$value}");
}

function decrypt_with_key($key, $values)
{
    $result = [];

    foreach ($values as $value) {
        $explode = explode('||', decrypt($value));

        if ($key !== $explode[0]) {
            Log::alert('Wrong decryption key!');
        } else {
            array_push($result, $explode[1]);
        }
    }

    return $result;
}
