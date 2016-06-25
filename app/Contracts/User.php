<?php

namespace App\Contracts;

interface User {

    /**
     * Find user by id
     * @param  int $id
     * @return array | boolean
     */
    public function findById($id);

    /**
     * Find user by email
     * @param  string $email
     * @return array | boolean
     */
    public function findByEmail($email);

    /**
     * Find User by token
     * @param  string $token
     * @return array | boolean
     */
    public function findByToken($token);

    /**
     * Authenticate user
     * @param  array $credential
     * @return boolean
     */
    public function auth($credential);
}