<?php
require_once '../src/connectToDb/ConnectToDb.php';

class Add
{
    public ConnectToDb $connection;
    private const TABLE_NAME = 'marks';

    public function addContentToDb(
        int $numberUser,
        int $mark,
        String $matiere,
        String $observation
        )
    {
        $query = 'INSERT INTO ' . self::TABLE_NAME . ' (number_user, mark, matiere, observation) 
            VALUES (:number_user, :mark, :matiere, :observation)';
        $addStatement = $this->connection->connectToDb()->prepare($query);
        $addStatement->execute([
            'number_user' => $numberUser,
            'mark' => $mark,
            'matiere' => $matiere,
            'observation' => $observation
        ]);

        return $addStatement > 0;
    }
}