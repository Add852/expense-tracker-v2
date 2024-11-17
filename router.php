<?php

$routes = [
    //mga page na di required ng user login
    "/" => "controllers/home.php",
    "/signup" => "controllers/SignUp.php",
    "/forgot" => "controllers/forgot.php",
    "/login" => "controllers/login.php",
    "/logout" => "controllers/logout.php",

    //mga page na accessible lang kapag may nakalog-in
    "/dashboard" => "controllers/dashboard.php",
    "/usersettings" => "controllers/userSettings.php",
    "/shared" => "controllers/expense-sharing-group.php",
    "/goal" => "controllers/goal.php",
    "/expenselog" => "controllers/ExpenseLog.php",
    "/subscriptionList" => "controllers/subscriptionList.php",
    "/audit" => "controllers/audit.php",
    "/settings" => "controllers/settings.php",
    "/reset" => "controllers/reset.php",
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//tatanggalin lang yung extra string sa url e.g., if "localhost/dashboard?sex=3" nilagay sa url, yung /dashboard lang
//maii-store sa $uri

// this checks if nageexist yung route sa $routes sa taas
if (array_key_exists($uri, $routes)) {
    require($routes[$uri]);
    // e.g., ng $routes[$uri] is $routes["/add"] = "controllers/add.php"
    // meaning require("controllers/add.php") will be rendered
} else {
    // ito magloload kapag hindi nag-eexist yung route
    http_response_code(404);
    require('views/404.php');
}
