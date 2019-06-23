<?php

namespace Helpers;

class AppConfig
{
    public static $illuminateDb = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'tp_php',
        'username' => 'root',
        'password' => 'frnkquito',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ];

    public static $tables = [

        'users' => "users"
    ];

    public static $imagesDirectories = [
        'mesas' => 'public/img/mesas',
        'mesasBkp' => 'archive/img/mesas',
        'empleados' => 'public/img/empleados',
        'empleadosBkp' => 'archive/img/empleados'
];

    public static $imageConstraints = [
        'size' => '500000', //0,5mb
        'types' => [
            'image/jpeg', 'image/jpeg', 'image/png'
        ],
        'extensions' => [
            '.jpg', '.jpeg', '.png', '.JPG', '.JPEG', '.PNG'
        ]
    ];

    public static $empleadosRoles = [
        "socio" => "Socio",
        "mozo" => "Mozo",
        "bartender" => "Bartender", //vino
        "cervecero" => "Cervecero",
        "cocinero" => "Cocinero" //cocina y postres (candybar)
    ];

}
