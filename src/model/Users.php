<?php
require_once '../src/connectToDb/ConnectToDb.php';

class Users
{
    public ConnectToDb $connection;
    private String $dbName = 'users';

    public function getUsers($status): array
    {
        if($status=='prof') $this->dbName = 'profs';
        $query = 'SELECT * FROM ' . $this->dbName;
        $usersStatement = $this->connection->connectToDb()->query($query);
        $users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUser($username, $status)
    {
        if($status=='prof') $dbName = 'profs';
        $query = 'SELECT * FROM ' . $dbName . ' WHERE username = :username';
        $userStatement = $this->connection->connectToDb()->prepare($query);
        $userStatement->execute([
            'username' => $username
        ]);

        $user = $userStatement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}