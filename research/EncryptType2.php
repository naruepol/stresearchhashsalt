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
        $new_pwd = $this->encrypt($pwd,$salt);
        if ($new_pwd == $epwd){
            return true;
         } else {
            return false;
         }
    }
}
?>