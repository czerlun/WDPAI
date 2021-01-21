<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Koment.php';

class UserRepository extends Repository
{

    public function getContent()
    {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM users_koment
        ');
        //echo $stmt;
    }

    public function addContent(content $content)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_koment (user_name, content)
            VALUES (?, ?)
        ');

        $stmt->execute([
            $content->getUser_name(),
            $content->getContent()
        ]);
    }
}