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
