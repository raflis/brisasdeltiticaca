<?php

function getRole($id)
{
    $roles=['1'=>'Usuario','0'=>'Administrador'];
    return $roles[$id];
}

function getBadge($id, $type)
{
    $roles=[
        '1' => 'Black',
        '2' => 'Platinum',
        '3' => 'Gold',
        '4' => 'Silver',
        '5' => 'Bronce',
    ];

    $stars=[
        '1' => 5,
        '2' => 4,
        '3' => 3,
        '4' => 2,
        '5' => 1,
    ];

    switch ($type) {
        case 'all':
            return $roles;
            break;
        case 'stars':
            return $stars[$id];
            break;
        default:
            return $roles[$id];
            break;
    }
    
}

function getStatus($value)
{
    $status = [
        'PUBLISHED' => 'Publicado',
        'DRAFT' => 'Borrador',
    ];
    return $status[$value];
}

function zero_fill($valor, $long = 0)
{
    return str_pad($valor, $long, '0', STR_PAD_LEFT);
}

function outP($text)
{
    $text = str_replace(array("<p>","</p>"), "", $text);
    return $text;
}