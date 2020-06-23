<?php
//Check if user is working on a localhost
function isLocalhost() {
    global $localAddressArr;
    if (in_array($_SERVER['REMOTE_ADDR'], $localAddressArr)) {
        return true;
    }
}

$localAddressArr = array(
    '127.0.0.1',
    '::1',
);

if (isLocalhost()) {
    $url = "http://localhost/jdev4/j4sail_files/j4sail_html_dev/php-index-p.php";
} else {
    $url  = 'http://www.jdev4.com/co/j4sail_html_dev/php-index-p.php';
}

header("Location: ".$url);
