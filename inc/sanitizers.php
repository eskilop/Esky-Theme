<?php
function esky_sanitize_telegram( $username ) {
    $to_remove = ["https://t.me/", "https://telegram.org/", "https://telegram.me/", "https://telegram.com/", "https://telegram.dog/",
                  "t.me/", "telegram.org/", "telegram.me/", "telegram.com/", "telegram.dog/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_discord( $invite ) {
    $to_remove = ["https://discordapp.com/", "https://discord.gg/", "discordapp.com/", "discord.gg/"];
    return str_replace($to_remove, "", $invite);
}
function esky_sanitize_instagram( $username ) {
    $to_remove = ["https://instagram.com/", "instagram.com/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_twitter( $username ) {
    $to_remove = ["https://twitter.com/", "twitter.com/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_gitlab( $username ) {
    $to_remove = ["https://gitlab.com/", "gitlab.com/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_github( $username ) {
    $to_remove = ["https://github.com/", "github.com/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_bitbucket( $username ) {
    $to_remove = ["https://bitbucket.org/", "bitbucket.org/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_dribbble( $username ) {
    $to_remove = ["https://dribbble.com/", "dribbble.com/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_deviantart( $username ) {
    $to_remove = ["https://deviantart.com/", "deviantart.com/"];
    return str_replace($to_remove, "", $username);
}
function esky_sanitize_behance( $username ) {
    $to_remove = ["https://behance.net/", "behance.net/"];
    return str_replace($to_remove, "", $username);
}
?>