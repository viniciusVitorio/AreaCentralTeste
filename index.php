<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes.php';
require __DIR__ . '/config.php';

$url = $_SERVER['REQUEST_URI'];

$Content = render(
    $url ??= '/produtos'
);

echo $Content;
