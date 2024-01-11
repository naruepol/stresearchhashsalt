<?php
class EncryptType3 implements EncryptAlgorithm
{
    public function encrypt($pwd,$salt)
    {
        $pwd_encypt = password_hash($pwd.$salt, PASSWORD_ARGON2I);
        return $pwd_encypt;
    }
    public function verify($pwd,$epwd,$salt)
    {
        if (password_verify($pwd.$salt,$epwd)){
            return true;
         } else {
            return false;
         }
    }
}
?>