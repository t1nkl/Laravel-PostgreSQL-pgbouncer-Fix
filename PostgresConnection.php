<?php

namespace App\Database;

use PDO;
use PDOStatement;
use Illuminate\Database\PostgresConnection as IlluminatePostgresConnection;

class PostgresConnection extends IlluminatePostgresConnection
{
    /**
     * Bind values to their parameters in the given statement.
     *
     * @param PDOStatement $statement
     * @param array $bindings
     * @return void
     */
    public function bindValues($statement, $bindings)
    {
        foreach ($bindings as $key => $value) {
            $statement->bindValue(
                is_string($key) ? $key : $key + 1,
                $value,
                // is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR
                (is_int($value) ? PDO::PARAM_INT : is_bool($value)) ? PDO::PARAM_STR : PDO::PARAM_STR
            );
        }
    }
}
