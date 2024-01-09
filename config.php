<?php
function isMobileDevice() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    return preg_match('/mobile|android|touch|samsung|blackberry|iphone|ipad|ipod|opera mini|iemobile|wpdesktop/', $userAgent);
}

$mobileSiteURL = "http://m.digitalmedia4k.com";

if (isMobileDevice()) {
    header("Location: " . $mobileSiteURL);
    exit;
}

// Rest of your website code
?>
