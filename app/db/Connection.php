<?php

namespace App\Db;

class Connection
{
    /**
     * Realiza e retorna uma instância da conexão com o MySQL
     * @return \mysqli|null
     */
    public static function get()
    {
        static $connection;

        if (!isset($connection)) {
            $host     = $_ENV['DB_HOST']     ?? 'localhost';
            $database = $_ENV['DB_NAME']     ?? 'tabler';
            $username = $_ENV['DB_USERNAME'] ?? 'root';
            $password = $_ENV['DB_PASSWORD'] ?? '';

            $connection = new \mysqli($host, $username, $password, $database);

            if ($connection->connect_error) {
                die('Erro na conexão: ' . $connection->connect_error);
            }
        }

        return $connection;
    }
}
