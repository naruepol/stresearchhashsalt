<?php declare(strict_types=1);
include "HashData.php";
use PHPUnit\Framework\TestCase;

class HashTest extends TestCase {
    private $h1;
    private $salt;

    public function setUp():void {
        $this->h1 = new HashData();
    }
    public function testMd5(){ }

    public function testMd5withSalt(){}

    public function testBcrypt(){}

    public function testBcryptWithSalt(){}

    public function testBcryptWithReSalt(){}
}