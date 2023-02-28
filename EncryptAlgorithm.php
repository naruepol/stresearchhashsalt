<?php
interface EncryptAlgorithm
{
    public function encrypt($pwd,$salt);
    public function verify($pwd,$epwd,$salt);
}

//Type of Encryption (Hash Algorithm)

// 1 password_hash PASSWORD_DEFAULT 
// 2 md5


// 3 password_hash PASSWORD_BCRYPT with cost 5
//Set the cost value for PASSWORD_BCRYPT algorithm
// $option = [ "cost" => 5 ];
// //Generate the hashed password based on the default algorithm
// $hashed_password = password_hash($password, PASSWORD_BCRYPT, $option);

// 4 password_hash PASSWORD_BCRYPT with cost 10
//Set the cost value for PASSWORD_BCRYPT algorithm
// $option = [ "cost" => 10 ];
// //Generate the hashed password based on the default algorithm
// $hashed_password = password_hash($password, PASSWORD_BCRYPT, $option);

// 5 password_hash PASSWORD_ARGON2I 
// $options = [
//     'memory_cost' => 2048
//     'time_cost'   => 4,
//     'threads'     => 3,
// ];
// $password_hash = password_hash($password, PASSWORD_ARGON2I, $options);

?>