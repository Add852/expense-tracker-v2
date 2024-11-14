<?php

//for testing purposes
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

//checks if current url is same as $value
function isUri($value)
{
    if ($_SERVER['REQUEST_URI'] === $value) {
        return true;
    }
    return false;
}

// Alert pop up dialog then redirect to desired url
function alertRedirect($message, $url)
{
    echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = '$url';
        </script>";
    exit(); //recommended every after header execution
}

function redirect($url)
{
    header("Location: $url");
    exit(); //recommended every after header execution
}

//protects page from being accessed when no user is logged in
function protectPage()
{
    session_start();
    if (!isset($_SESSION['userid'])) {
        alertRedirect("You must be logged in first!", '/login');
    }
}
