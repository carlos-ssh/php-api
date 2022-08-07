<?php

$container->set('db_settings', function () {
    return (object)[
        "DB_NAME" => "",
        "DB_PASS" => "",
        "DB_CHAR" => "",
        "DB_HOST" => "",
        "DB_USER" => ""
    ];
});