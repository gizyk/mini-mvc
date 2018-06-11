<?php

abstract class DataBase {
    public static $host = 'localhost';
    public static $db   = 'minimvc';
    public static $user = 'root';
    public static $pass = '';
    public static $charset = 'utf8mb4';

    public static $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    public function getDsn() {
        return 'mysql:host='.DataBase::$host.';dbname='.DataBase::$db.';charset='.DataBase::$charset;
    }
}
?>