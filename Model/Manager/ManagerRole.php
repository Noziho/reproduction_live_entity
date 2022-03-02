<?php

namespace App\Model\Manager;

use App\Model\Entity\Role;

class ManagerRole {

    private ManagerUserRole $userRoleManager;

    public function __construct()
    {
        $this->userRoleManager = new ManagerUserRole();
    }

    public function getAll(): array
        {
            $roles = [];
            $query = \DB_Connect::dbConnect()->query("
            SELECT * FROM role
        ");
            if ($query) {
                
                foreach ($query->fetchAll() as $role) {
                    $role = (new Role())
                    ->setId($role['id'])
                    ->setRoleName($role['role_name'])
                    ->setUsers($this->userRoleManager->getUsersByRoleId($role['id']));
                    $roles[] = $role;
                }
            }
            return $roles;
        }

}