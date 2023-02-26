<?php

class EncryptType2 implements EncryptAlgorithm
{
    public function encrypt($pwd,$salt)
    {
        $pwd_encypt = md5($pwd.$salt);
        return $pwd_encypt;
    }
    public function verify($pwd,$epwd,$salt)
    {
        if (md5($pwd.$salt) == $epwd){
            return true;
         } else {
            return false;
         }
    }
}

?>