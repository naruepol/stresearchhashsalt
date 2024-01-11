<?php
class EncryptType1 implements EncryptAlgorithm
{
    public function encrypt($pwd,$salt)
    {
        $pwd_encypt = password_hash($pwd.$salt, PASSWORD_DEFAULT);
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
        // echo "<br>";
        // echo "Npwd ".$new_pwd;
        // echo "<br>";
        // echo "Epwd :".$epwd;
        // echo "Salt :".$salt;
        // echo "Pass :".$pwd;
        // echo "Npwd :".$new_pwd;