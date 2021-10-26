<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{

    public function isAdmin()
    {
        return $this->username == "nico";
    }
}
