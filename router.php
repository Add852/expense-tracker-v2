<?php

$routes = [
    "/" => "controllers/home.php",
    "/dashboard" => "controllers/dashboard.php",
    "/userSettings" => "controllers/userSettings.php",
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (array_key_exists($uri, $routes)) {
    require($routes[$uri]);
}
