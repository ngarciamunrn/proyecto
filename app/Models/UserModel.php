<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'App\Entities\User';
    protected $useSoftDeletes = false;

    protected $useTimestamps = false;

    protected $allowedFields = ['username', 'nombre', 'apellido', 'email'];


    public function validUser($data) {
        $this->where('username',$data['username']);
        $this->where('pass',$data['pass']);

        
        $query = $this->get(1);

       
        if ($query->getResult())
            return $query->getResult();
        else 
            return false;
        
    }
    
}
