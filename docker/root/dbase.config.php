<?php

const HLEB_TYPE_DB = 'mariadb';

const HLEB_PARAMETERS_FOR_DB = [
    'mariadb' => [
        'mysql:host=db',
        'port=DATABASE_EXTERNAL_PORT',
        'dbname=MYSQL_DATABASE',
        'charset=utf8',
        'user' => 'MYSQL_USER',
        'pass' => 'MYSQL_PASSWORD',
    ],
];
