<?php
interface EncryptAlgorithm
{
    public function encrypt($pwd,$salt);
    public function verify($pwd,$epwd,$salt);
}

?>