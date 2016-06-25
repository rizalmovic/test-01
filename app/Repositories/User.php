<?php

namespace App\Repositories;

use Auth;
use App\Models\User as UserModel;
use App\Contracts\User as UserInterface;

class User implements UserInterface
{

    /**
     * Find user by id
     * @param  int $id
     * @return array | boolean
     */
    public function findById($id)
    {
        return UserModel::find($id);
    }

    /**
     * Find user by email
     * @param  string $email
     * @return array | boolean
     */
    public function findByEmail($email)
    {
        return UserModel::where($email)->get();
    }

    /**
     * Find User by token
     * @param  string $token
     * @return array | boolean
     */
    public function findByToken($token)
    {

    }

    /**
     * Authenticate user
     * @param  array $credential
     * @return boolean
     */
    public function auth($credential)
    {
        
    }
}