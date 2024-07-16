<?php
require_once '../src/connectToDb/ConnectToDb.php';

class GetMarks
{
    public ConnectToDb $connection;
    private const TABLE_NAME = 'marks';

    public function getAllMarks($numberUser): array
    {
        if($numberUser!==0) {
            $query = 'SELECT * FROM ' . self::TABLE_NAME . ' WHERE number_user = :number_user';
            $contentsStatement = $this->connection->connectToDb()->prepare($query);
            $contentsStatement->execute([
                'number_user' => $numberUser
            ]);
        } else {
            $query = 'SELECT * FROM ' . self::TABLE_NAME;
            $contentsStatement = $this->connection->connectToDb()->prepare($query);
            $contentsStatement->execute();

        }
            $contents = $contentsStatement->fetchAll(PDO::FETCH_ASSOC);
        return $contents;
    }

    public function getMarks($number)
    {
        $query = 'SELECT * FROM ' . self::DB_NAME . ' WHERE number_user = :number_user';
        $contentStatement = $this->connection->connectToDb()->prepare($query);
        $contentStatement->execute([
            'number_user' => $numberUser
        ]);

        $content = $contentStatement->fetch(PDO::FETCH_ASSOC);
        return $content;
    }
}