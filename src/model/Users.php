<?php
require_once '../src/connectToDb/ConnectToDb.php';

class Users
{
    public ConnectToDb $connection;
    private String $dbName = 'users';

    public function getUsers($numberUser): array
    {
        $query = 'SELECT * FROM ' . $this->dbName . ' WHERE number_user = :number_user';;
        $usersStatement = $this->connection->connectToDb()->prepare($query);
        $usersStatement->execute([
            'number_user' => $numberUser
        ]);
        $users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getAllUsers($status): array
    {
        if($status=='prof') $this->dbName = 'profs';
        $query = 'SELECT * FROM ' . $this->dbName;
        $usersStatement = $this->connection->connectToDb()->query($query);
        $users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUserOne($numberUser)
    {
        $query = 'SELECT * FROM users WHERE number_user = :number_user';
        $userStatement = $this->connection->connectToDb()->prepare($query);
        $userStatement->execute([
            'number_user' => $numberUser
        ]);

        $user = $userStatement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function getUser($username, $status)
    {
        if($status=='prof') $this->dbName = 'profs';
        $query = 'SELECT * FROM ' . $this->dbName . ' WHERE username = :username';
        $userStatement = $this->connection->connectToDb()->prepare($query);
        $userStatement->execute([
            'username' => $username
        ]);

        $user = $userStatement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}