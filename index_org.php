<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);

$currentUrl = $_SERVER['REQUEST_URI'];
$cachefile = 'cache/' . md5($currentUrl) . '.html';

function check_wp_logged_in_cookie() {
    foreach ($_COOKIE as $key => $value) {
        if (strpos($key, '_logged_in_') !== false) {
            return true;
        }
    }
    return false;
}

$exclude_cache_urls = [
    '/cart',
    '/checkout',
    '/my-account',
    '/add-to-cart=',
    '/?add-to-cart=',
    '/product/',
    '/shop/',
    '/product-category/',
    '/wp-admin/',
    '/wc-ajax/',
    '/checkout-2/',
];


$use_cache = 1;

// Kiểm tra đường dẫn
foreach ($exclude_cache_urls as $exclude_url) {
    if (stripos($currentUrl, $exclude_url) !== false) {
        $use_cache = 0;
        break;
    }
}


// Kiểm tra biến GET và người đăng nhập
if (
    isset($_GET['add-to-cart']) ||
    isset($_GET['wc-ajax']) ||
    isset($_GET['key']) ||
    isset($_GET['order-received']) ||
    check_wp_logged_in_cookie()
) {
    $use_cache = 0;
}

// Đọc thời gian cache
$fname = "cache.txt";
$oF = fopen($fname, "rb");
$size = filesize($fname);
$cachetime = fread($oF, $size);
fclose($oF);

// Nếu hợp lệ thì hiển thị cache
if ($use_cache == 1 && file_exists($cachefile) && (time() - filemtime($cachefile)) < $cachetime) {
    echo file_get_contents($cachefile);
    exit;
}

// Bắt đầu buffer và chạy WP
ob_start();
define('WP_USE_THEMES', true);
require __DIR__ . '/wp-blog-header.php';

// Lưu cache nếu hợp lệ
if ($use_cache == 1) {
    $cached_content = ob_get_contents();
    $cached = fopen($cachefile, 'w');
    fwrite($cached, $cached_content);
    fclose($cached);
}

ob_end_flush();
?>
