<?php

namespace App\Connections;

use PDO;

class DB
{
    private static $_conn;

    public static function db(): ?PDO
    {
        if (self::$_conn) {
            return self::$_conn;
        }

        $db_host = $_ENV['POSTGRES_HOST'];
        $db_name = $_ENV['POSTGRES_DB'];
        $db_user = $_ENV['POSTGRES_USER'];
        $db_password = $_ENV['POSTGRES_PASSWORD'];
        $db_port = $_ENV['POSTGRES_PORT'];

        $dsn = 'pgsql:host=' . $db_host . ';port=' . $db_port . ';dbname=' . $db_name . ';';
        self::$_conn = new PDO(dsn: $dsn, username: $db_user, password: $db_password);
        if (self::$_conn) {
            return self::$_conn;
        }

        return null;
    }
}
