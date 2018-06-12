<?php

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$database = [
    "host" => 'localhost',
    "db"   => 'minimvc',
    "user" => 'root',
    "pass" => '',
    "charset" => 'utf8mb4',
    "opt" => $opt,
];

$database["dsn"] = 'mysql:host='.$database["host"].';dbname='.$database["db"].';charset='.$database["charset"];

return $database;

?>