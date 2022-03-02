<?php

namespace App\Model\Manager;

use App\Model\Entity\User;

class ManagerUserRole
{

    public function getUsersByRoleId(int $roleId): array
    {
        $users = [];

        $query = \DB_Connect::dbConnect()->query("
                    SELECT * 
                    FROM user 
                    WHERE id IN (SELECT user_fk FROM user_role WHERE role_fk = $roleId)
                    "

        );

        if ($query) {
            foreach ($query->fetchAll() as $userData) {
                $user = new User();
                $user
                    ->setId($userData['id'])
                    ->setEmail($userData['email'])
                    ->setName($userData['name'])
                    ->setSurname($userData['surname'])
                    ->setAge($userData['age'])
                    ->setPassword($userData['password']);
                $users[] = $user;
            }
        }
        return $users;
    }
}