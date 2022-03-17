<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $items)
    {
        // We use concatenation with colon (:) as placeholders
        // in the 4th parameter of the "sprintf" function
        // to prevent SQL injection, thus we are securing the insertion.
        // because we are using prepared statements in PHP.

        // Example result: 'insert into tasks values (:description)'

        try {
            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(', ', array_keys($items)),
                ':' . implode(', :', array_keys($items))
            );

            $statement = $this->pdo->prepare($sql);
            $statement->execute($items);
        } catch (\Throwable $th) {
            die('Something went wrong!');
        }
    }
}
