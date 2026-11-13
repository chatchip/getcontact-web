<?php
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if (preg_match('~^/(src|vendor|database|\\.git)(/|$)|/(?:\\.env|errors\\.log|composer\\.(?:json|lock))$~i', $path)) {
 http_response_code(403); exit('Forbidden');
}
$file = realpath(__DIR__ . rawurldecode($path));
if ($path !== '/' && $file && str_starts_with($file, __DIR__ . DIRECTORY_SEPARATOR) && is_file($file)) return false;
require __DIR__ . '/index.php';
