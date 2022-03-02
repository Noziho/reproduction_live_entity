<?php

namespace App\Model\Entity;

class Role extends AbstractEntity {
    private string $role_name;
    private array $users;

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param array $users
     */
    public function setUsers(array $users): self
    {
        $this->users = $users;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->role_name;
    }

    /**
     * @param string $role_name
     */
    public function setRoleName(string $role_name): self
    {
        $this->role_name = $role_name;
        return $this;
    }


}