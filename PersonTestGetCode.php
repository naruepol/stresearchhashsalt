<?php declare(strict_types=1);
include "Person.php";
include "Connect.php";
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {
    private $con;
    private $p1;

    public function setUp():void {
        $this->con = new connectDB();
        $this->p1 = new Person($this->con->connect());
    }

    public function testCheckingLogin(){
        $this->assertTrue($this->p1->checkLogin("user1@scienceresearch.com","12345"));
    }

    public function testAddingAccount(){
        $this->assertTrue($this->p1->setDataToInsertAccount("1212","username","username@myreseach.com","pass","1"));
        $this->assertTrue($this->p1->checkLogin("username@myreseach.com","pass"));
    }

    public function testChangingSecurity(){
        $this->assertTrue($this->p1->switchEncryptTypeUpdatePassword("2","1212","newpass"));
        $this->assertTrue($this->p1->checkLogin("username@myreseach.com","newpass"));
    }
}