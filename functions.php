<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function isUri($value)
{
    if ($_SERVER['REQUEST_URI'] === $value) {
        return true;
    }
    return false;
}

// Alert pop up dialog
function alert($message)
{
    echo "<script type='text/javascript'>alert('$message');</script>";
}

// gumamit ako ng static function para dina need irenew yung function sa twing iko call mo.

// kumbaga directed na yung mga updates if ever man.


public class functions_inDB{

    public static function load_expensedata()
    {

    // get data from expense table



    }

}

