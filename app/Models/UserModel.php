<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{


    protected $table = 'utilizadores';
    protected $allowedFields = ['user', 'password', 'nome', 'idade', 'cidade', 'categoria', 'contacto', 'entidade', 'sobre', 'facebook', 'twitter', 'email', 'insta', 'youtube', 'img'];
    protected $primaryKey = 'id';


    public function getUser($user, $password)
    {

        return $this->asArray()
            ->where(['user' => $user, 'password' => md5($password)])
            ->first();
    }


    public function getUserId($id = false)
    {

        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}
