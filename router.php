<?php

$routes = [
    "/" => "controllers/home.php",
    "/dashboard" => "controllers/dashboard.php",
    "/userSettings" => "controllers/userSettings.php",
    "expense-sharing-group" => "controllers/expense-sharing-groups.php",
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (array_key_exists($uri, $routes)) {
    require($routes[$uri]);
} else {
    http_response_code(404);
    require('views/404.php');
}
