<?php
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

class RegisterProf
{
    public Users $users;
    public ConnectToDb $connection;
    private const TABLE_NAME = 'profs';

    public function insertToDb(
        String $name,
        String $firstName,
        int $numberProf,
        String $email,
        String $username,
        String $password,
        $photo,
        String $subject)
    {
        $query = 'INSERT INTO ' . self::TABLE_NAME . ' (subject, number_prof, name, firstname, email, username, password, photo) 
            VALUES (:subject, :number_prof, :name, :firstname, :email, :username, :password, :photo)';
        $insertStatement = $this->connection->connectToDb()->prepare($query);
        $insertStatement->execute([
            'number_prof' => $numberProf,
            'name' => $name,
            'firstname' => $firstName,
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, 0, ['cost' => 14]),
            'photo' => $photo,
            'subject' => $subject
        ]);

        return $insertStatement > 0;
    }

    public function isValidUserName($username)
    {
        $users = $this->users->getUsers();

        foreach($users as $user){
            if($username == $user['username']){
                return false;
            }
        }
        return true;
    }
}