<?php

namespace App\Database;

use PDO;

class DB
{
    /**
     * @var PDO $instance instance
     */
    protected static PDO $instance;

    /**
     * @return PDO or create PDO instance
     */
    public static function instance(): PDO
    {
        if (empty(self::$instance))
        {
            $options  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => FALSE,
            );
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);
        }
        return self::$instance;
    }
}