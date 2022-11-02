<?php

namespace App\Entities;

class User extends \CodeIgniter\Entity\Entity
{
    // Query to verify password
    public function verifyPassword($password)
    {
        return password_verify($password, $this->password_hash);
    }

    public function startActivation()
    {
        $this->token = bin2hex(random_bytes(16)); // token sent by email

        $this->activation_hash = hash_hmac('sha256', $this->token, $_ENV['HASH_SECRET_KEY']); // hash version of the token


    }

    public function  activate()
    {
        $this->is_active = true;
        $this->activation_hash = null;
    }
}