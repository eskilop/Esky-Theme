<?php
function esky_sanitize_list($list) {
    $nl = array();
    foreach (explode(',', $list) as $v) {
        $nl[] = trim($v);
    }
    return implode(',', $nl);
}
function esky_sanitize_color($color) {
    if (@preg_match('/(foreground|background|primary|complementary|red|green|orange|blue|yellow|purple|lightblue|cyan|pink)/', $color))
        return $color;
}
function esky_sanitize_icon($image) {
    if (substr( $image, 0, 4 ) === "http") {
        return esky_sanitize_url($image);
    }
    else {
        $icon_only = '(fa)(-(.*))*';
        $prefixes = '(fas|far|fal|fad|fab)';
        $font_awesome = '/(' . $prefixes . '\ ' . $icon_only . '|'. $icon_only .')/';
        if (@preg_match($font_awesome, $image))
            return $image;
    }
}
function esky_sanitize_url($url) {
    $scheme = "[a-z][a-z0-9+.-]*";
    $username = "([^:@/](:[^:@/])?@)?";
    $segment = "([a-z][a-z0-9-]*?[a-z0-9])";
    $domain = "({$segment}\.)*{$segment}";
    $segment = "([0|1][0-9]{2}|2([0-4][0-9]|5[0-5]))";
    $ipv4 = "({$segment}\.{$segment}\.{$segment}\.{$segment})";
    $block = "([a-f0-9]{0,4})";
    $rawIpv6 = "({$block}:){2,8}";
    $ipv4sub = "(::ffff:{$ipv4})";
    $ipv6 = "({$rawIpv6}|{$ipv4sub})";
    $host = "($domain|$ipv4|$ipv6)";
    $port = "(:[\d]{1,5})?";
    $path = "([^?;\#]*)?";
    $query = "(\?[^\#;]*)?";
    $anchor = "(\#.*)?";
    $regex = "#^{$scheme}://{$username}{$host}{$port}(/{$path}{$query}{$anchor}|)$#i";
    if (isset($url) && @preg_match($regex, $url))
        return $url;
}
?>