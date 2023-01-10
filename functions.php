<?php

function base_path($path)
{
    return BASE_PATH . $path;
}

function urlIs($value) 
{
    return $_SERVER['REQUEST_URI'] == $value;
}