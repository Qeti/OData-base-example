<?php

use qeti\SimplePOData\BaseQueryProvider;

class QueryProvider extends BaseQueryProvider
{
    public function __construct(\PDO $db){
        parent::__construct($db);
    }

    /**
     * Get associated array with rows
     * @param string $sql SQL query
     * @param array $parameters Parameters for SQL query
     * @return mixed[]|null
     */
    protected function queryAll($sql, $parameters = null)
    {
        $statement = $this->db->prepare($sql);
        $statement->execute($parameters);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get one value
     * @param string $sql SQL query
     * @param array $parameters Parameters for SQL query
     * @return mixed|null
     */
    protected function queryScalar($sql, $parameters = null)
    {
        $statement = $this->db->prepare($sql);
        $statement->execute($parameters);
        $data = $statement->fetchAll(PDO::FETCH_COLUMN);
        if ($data) {
            return $data[0];
        }
        return null;
    }

    /**
     * Execute query
     * @param string $sql SQL query
     * @param array $parameters Parameters for SQL query
     * @return mixed|null
     */
    protected function execute($sql, $parameters = null)
    {
        $statement = $this->db->prepare($sql);
        return $statement->execute($parameters);
    }

}