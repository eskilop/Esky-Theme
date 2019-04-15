<?php
function esky_sanitize_telegram( $username ) {
    $to_remove = ["https://t.me/", "https://telegram.org/", "https://telegram.me/", "https://telegram.com/", "https://telegram.dog/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_instagram( $username ) {
    $to_remove = ["https://instagram.com/"];
    return str_replace($to_remove, "", $username);
}
?>