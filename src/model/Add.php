<?php
require_once '../src/connectToDb/ConnectToDb.php';

class Add
{
    public ConnectToDb $connection;
    private const TABLE_NAME = 'marks';

    public function addContentToDb(
        int $numberUser,
        int $mark,
        String $subject,
        String $observation
        )
    {
        $query = 'INSERT INTO ' . self::TABLE_NAME . ' (number_user, mark, subject, observation) 
            VALUES (:number_user, :mark, :subject, :observation)';
        $addStatement = $this->connection->connectToDb()->prepare($query);
        $addStatement->execute([
            'number_user' => $numberUser,
            'mark' => $mark,
            'subject' => $subject,
            'observation' => $observation
        ]);

        return $addStatement > 0;
    }
}