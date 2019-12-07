<?php

namespace MF\Database;

class Connection
{
    /**
     * Try to connect to database
     *
     * @return void
     */
    public static function connectDatabase()
    {
        $database_config = require(__ROOT__ . 'config/database.php');

        try {

            return new \PDO(
                'mysql:host=' . $database_config['host'] . ';dbname=' . $database_config['db_name'] . ';charset=' . $database_config['db_charset'],
                $database_config['db_user'],
                $database_config['db_password']
            );

        } catch (\PDOException $e) {

        }
    }
}
