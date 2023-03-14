<?php
// Novice Test
// include "Person.php";
// include "Connect.php";
include "HashData.php";

// $con = new connectDB();
// $p1 = new Person($con->connect());

// $p1->setDataToInsertAccount("2166","Somchai","somchai@myresearch.com","test","2");
// show password encrypt by security type 2
// echo "Pass : ".$p1->getEncryptPassword();
// echo "<br>";

// send EncryptType (Object) to change encrypt_strategy
// $p1->setEncryptType(new EncryptType2());
// send security_type (value) to change encrypt_strategy
// $p1->setEncryptType("1");

// show update password  and plain password
// echo "Pass : ".$p1->getEncryptPassword();
// echo "<br>";
// echo "Plain Password :".$p1->getPassword();
// echo "<br>";

// password hash 
// $pass1 = password_hash("test", PASSWORD_DEFAULT);
// $pass2 = md5("test");
// echo "Pass 1: ".$pass1;
// echo "<br>";
// echo "Pass 2: ".$pass2;

// password hash verify
// echo "<br>";
// if (password_verify("test", $p1->getEncryptPassword())){
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }

// md5 verify
// echo "<br>";
// if (md5("test") == $p1->getEncryptPassword()){
//     echo "Valid";
// } else {
//     echo 'Invalid';
// }

// echo "<br>";
// echo $p1->getUserEmail();
// echo "<br>";

// echo "<br>";
// echo $p1->getPersonDataForVerify();
// echo "<br>";

// $host = 'localhost';
// $user = 'root';
// $cpasswd = '';
// $schema = 'organization';
// $pdo = NULL;
// $dsn = 'mysql:host=' . $host . ';dbname=' . $schema;
// try
// {  
// $pdo = new PDO($dsn, $user,  $cpasswd);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $e)
// {
// echo 'Database connection failed.';
// die();
// } 

// $sql = "SELECT * FROM person WHERE user_email=:uemail";
// try
// {
//     $stmt= $pdo->prepare($sql);
//     $stmt->execute(['uemail' => $p1->getUserEmail()]);
//     $person = $stmt->fetch();
//     // $person (array result)
//     echo $person['encypt_passwd'];
//     echo "<br>";
//     echo $person['security_type'];
    
// }
// catch (PDOException $e)
// {
//     echo 'Query error.';
//     die();
// }

// echo "Return : ".$p1->checkLogin("somchai@myresearch.com","test");
 
// Add User
// $p1->setDataToInsertAccount("2167","Somsak","somsak@myresearch.com","test","1");
// echo "<br>";
// $p1->switchEncryptTypeUpdatePassword("1","2167","test");

// //random_bytes () function in PHP
// $length = random_bytes('4');
 
// //Print the result and convert by binaryhexa
// var_dump(bin2hex($length));

// echo "<br>";

// $salt = bin2hex($length);

// echo "<br>";

// echo "Salt : ".$salt;

// $pass = md5("lucky");
// echo "<br>";
// echo "Pass md5 : ".$pass;
// echo "<br>";
// $pass2 = md5("lucky".$salt);
// echo "Pass md5+salt :".$pass2;


    // $pwd = "test";
    // $length = random_bytes('4');
    // $salt = bin2hex($length);

    // $pwd_encypt = md5($pwd);
    // echo "P5 :".$pwd_encypt;
    // echo "<br>";

    // $pwd_encypt = md5($pwd.$salt);
    // echo "P5S :".$pwd_encypt;
    // echo "<br>";

    // $pwd_encypt = password_hash($pwd, PASSWORD_BCRYPT);
    // echo "PB :".$pwd_encypt;
    // echo "<br>";

    // $pwd_encypt = password_hash($pwd.$salt, PASSWORD_BCRYPT);
    // echo "PBS :".$pwd_encypt;
    // echo "<br>";

    // $salt = strrev($salt);
    // $pwd_encypt = password_hash($pwd.$salt, PASSWORD_BCRYPT);
    // echo "PBRS :".$pwd_encypt;
    // echo "<br>";

        $h1 = new HashData();
        $password = "test";
        $salt1 = $h1->createSaltA1();
        echo "Salt1 :".$salt1;
        echo "<br>";


?>