<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes.php';
require __DIR__ . '/config.php';

$url = $_SERVER['REQUEST_URI'];

$parsedUrl = parse_url($url);
$path = $parsedUrl['path'];

$Content = render(
    $path ??= '/produtos'
);

echo $Content;
