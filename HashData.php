<?php

class HashData
{
    private $salt;

    function __construct( )
    {
         
    }

    public function createSaltA1()
    {
        $length = random_bytes('4');
        $this->salt = bin2hex($length);
        return $this->salt;
    }

    private function createSaltA2()
    {
        $this->salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
        return $this->salt;
    }


    public function hashByMd5($pwd)
    {
        $pwd_encypt = md5($pwd);
        return $pwd_encypt;
    }

    public function verifyByMd5($pwd,$epwd)
    {
        $new_pwd = $this->hashByMd5($pwd);
        if ($new_pwd == $epwd){
            return true;
         } else {
            return false;
         }
    }

    public function hashByMd5Salt($pwd,$salt)
    {
        $pwd_encypt = md5($pwd.$salt);
        return $pwd_encypt;
    }

    public function verifyByMd5Salt($pwd,$epwd,$salt)
    {
        $new_pwd = md5($pwd.$salt);
        if ($new_pwd == $epwd){
            return true;
         } else {
            return false;
         }
    }

    public function hashByBcrypt($pwd)
    {
        $pwd_encypt = password_hash($pwd, PASSWORD_BCRYPT);
        return $pwd_encypt;
    }

    public function verifyByBcrypt($pwd,$epwd)
    {
        $new_pwd = password_hash($pwd, PASSWORD_BCRYPT);
        if (password_verify($new_pwd,$epwd)){
            return true;
         } else {
            return false;
         }
    }

    public function hashByBcryptSalt($pwd,$salt)
    {
        $this->salt = $salt;
        $options = [
            'cost' => 10,
            'salt' => $this->salt,
        ];
        $pwd_encypt = password_hash($pwd, PASSWORD_BCRYPT, $option);
        return $pwd_encypt;
    }

    public function verifyByBcryptSalt($pwd,$epwd,$salt)
    {
        $this->salt = $salt;
        $options = [
            'cost' => 10,
            'salt' => $this->salt,
        ];
        $new_pwd = password_hash($pwd, PASSWORD_BCRYPT, $option);      
        if (password_verify($new_pwd,$epwd)){
            return true;
         } else {
            return false;
         }
    }

    public function hashByBcryptReSalt($pwd,$salt)
    {
        $this->salt = $salt;
        $this->salt = strrev($this->salt);
        $options = [
            'cost' => 10,
            'salt' => $this->salt,
        ];
        $pwd_encypt = password_hash($pwd, PASSWORD_BCRYPT, $option);
        return $pwd_encypt;
    }

    public function verifyByBcryptReSalt($pwd,$epwd,$salt)
    {
        $this->salt = strrev($salt);
        $options = [
            'cost' => 10,
            'salt' => $this->salt,
        ];
        $new_pwd = password_hash($pwd, PASSWORD_BCRYPT, $option);
        if (password_verify($new_pwd,$epwd)){
            return true;
         } else {
            return false;
         }
    }



}