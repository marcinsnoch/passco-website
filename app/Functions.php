<?php

// base functions
function base_url($url = null)
{
    $base_url = rtrim(BASE_URL, '/');
    if ($url) {
        return $base_url . '/' . $url;
    }
    return $base_url . '/';
}

function send_email($to, $message, $from_name, $from_email) {
    $headers = 'Nadawca: ' . $from_name . "\r\n" . 'Reply-To: ' . $from_email ."\r\n".'Content-type: text/html; charset=utf-8'. 'X-Mailer: PHP/' . phpversion();
    $subject = "Wiadomość ze strony WWW";
    $message = "Nadawca wiadomości: " . $from_name . "\r\n<br>". $message;
    mail($to, $subject, $message, $headers);
    return true;
}

function verify_email($email) {
    $pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    if (!preg_match($pattern, $email)) {
        return false;
    } else {
        return true;
    }
}