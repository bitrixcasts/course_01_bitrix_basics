<?php

require_once __DIR__ . '/vendor/autoload.php';

function getHeaderIconColor(): string
{
    global $APPLICATION;
    
    $colors = [
        '',
        'text-warning',
        'text-danger',
        'text-success',
        'text-info',
    ];
    
    return $APPLICATION
        ->GetPageProperty('header_icon_color', $colors[rand(0, count($colors) - 1)])
    ;
}
