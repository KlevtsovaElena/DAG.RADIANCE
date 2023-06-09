<?php

class Connection
{

    public static $pdo;

    //возвращаем экземпляр объекта pdo
    public static function getConnection() : \PDO
    {
        if (static::$pdo){
            return static::$pdo;
        }

        //получаем ключ для соединения с БД
        $host = 'mysql';
        $db   = 'dag-radiance';
        $user = 'root';
        $pass = 'admin';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        //создание объекта для подключения к БД
        $pdo = new PDO($dsn, $user, $pass, $opt);

        return static::$pdo = $pdo; 
    }
}