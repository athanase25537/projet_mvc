<?php
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

class Register
{
    public Users $users;
    public ConnectToDb $connection;
    private const TABLE_NAME = 'users';

    public function insertToDb(
        String $name,
        String $firstName,
        $birth,
        String $email,
        String $tel,
        String $username,
        String $password,
        $photo,
        String $status,
        int $numberUser,
        String $filiere)
    {
        $query = 'INSERT INTO ' . self::TABLE_NAME . ' (filiere, number_user, name, firstname, birth, email, tel, username, password, photo, creation_date) 
            VALUES (:filiere, :number_user, :name, :firstname, :birth, :email, :tel, :username, :password, :photo, NOW())';
        $insertStatement = $this->connection->connectToDb()->prepare($query);
        $insertStatement->execute([
            'number_user' => $numberUser,
            'name' => $name,
            'firstname' => $firstName,
            'birth' => $birth,
            'email' => $email,
            'tel' => $tel,
            'username' => $username,
            'password' => password_hash($password, 0, ['cost' => 14]),
            'photo' => $photo,
            'filiere' => $filiere
        ]);

        return $insertStatement > 0;
    }

    public function isValidUserName($username, $status)
    {
        $users = $this->users->getAllUsers($status);

        foreach($users as $user){
            if($username == $user['username']){
                return false;
            }
        }
        return true;
    }
}