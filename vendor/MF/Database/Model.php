<?php

namespace MF\Database;

use MF\Database\Connection;

abstract class Model
{
    /**
     * Protected attribute for database connection
     *
     * @var Mf\Database\Connection
     */
    protected $db_connection;

    /**
     * Constructor method
     */
    public function __construct()
    {
        $this->db_connection = Connection::connectDatabase();
    }

    /**
     * Save a register on database
     *
     * @return void
     */
    public function save(array $data)
    {
        try {
            $query = "insert into " . $this->table . " (" . implode(',', $this->fillables) . ") values ('" . implode("', '", $data) . "');";
            $this->db_connection->query($query)->fetchAll();

            return "Query executada!";
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
