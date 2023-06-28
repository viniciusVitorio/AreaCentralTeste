<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes.php';

$url = $_SERVER['REQUEST_URI'];

$parsedUrl = parse_url($url);
$path = $parsedUrl['path'];

$Content = render(
    $path ??= '/home'
);

echo $Content;
