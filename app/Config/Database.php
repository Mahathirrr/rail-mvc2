<?php

namespace Mahathir\RailMvc\Config;

class Database
{
    private static ?\PDO $pdo = null;

    public static function getConnection(): \PDO {
        if (self::$pdo == null) {
            $url = "mysql:host=localhost:3306;dbname=railmvc";
            $username = "dev";
            $password = "dev";

            self::$pdo = new \PDO($url, $username, $password);
        }

        return self::$pdo;
    }

    public static function beginTransaction(){
        self::getConnection()->beginTransaction();
    }

    public static function commitTransaction(){
        self::getConnection()->commit();
    }

    public static function rollbackTransaction(){
        self::getConnection()->rollBack();
    }
}