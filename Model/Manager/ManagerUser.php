<?php

namespace App\Model\Manager;

use App\Model\Entity\User;

class ManagerUser {

    public function getUserById (int $id): User {

        $user = new User();
        $query = \DB_Connect::dbConnect()->query("SELECT * FROM user WHERE id = $id");

        if ($query) {
            $userData = $query->fetchAll();
            $user
                ->setId($userData['id'])
                ->setName($userData['name'])
                ->setSurname($userData['surname'])
                ->setAge($userData['age'])
                ->setEmail($userData['email'])
                ->setPassword($userData['password'])
            ;

        }
        return $user;
    }


}