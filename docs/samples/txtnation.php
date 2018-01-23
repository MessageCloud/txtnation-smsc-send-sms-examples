<?php

// Simple SMS send function
function sendSMS($src, $dst, $type, $dr, $username, $password, $message)
{
    $params = [
        'src' => $src,
        'dst' => $dst,
        'type' => $type,
        'dr' => $dr,
        'user' => $username,
        'password' => $password,
        'msg' => $message,
    ];

    $url = sprintf('http://smsc.txtnation.com:8091/sms/send_sms.php?%s', http_build_query($params));

    return file_get_contents($url);
}

// Example of use
$response = sendSMS('447777000000', '447777111111', '0', '0', 'myUsername', 'myPassword', 'My test message');
echo $response;
