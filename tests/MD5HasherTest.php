<?php

class MD5HasherTest extends \PHPUnit\Framework\TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Carsonlius\Hasher\MD5Hasher();
    }

    public function testMd5HasherMake()
    {
        $password_source = 'password';
        $password_md5 = md5($password_source);
        $password_hasher = $this->hasher->make($password_source);
        $this->assertEquals($password_hasher, $password_md5);
    }


    /**
     * @test
     */
    public function testMd5HasherMakeWithSalt()
    {
        $password_source = 'password';
        $salt = 'nice work';
        $password_md5 = md5($password_source . $salt);
        $password_hasher = $this->hasher->make($password_source, compact('salt'));
        $this->assertEquals($password_hasher, $password_md5);
    }

    public function testMd5HasherCheck()
    {
        $password_source = 'password';
        $password_hasher = $this->hasher->make($password_source);
        $equal_true = $this->hasher->check($password_source, $password_hasher);
        $equal_false = $this->hasher->check('what', $password_hasher);
        $this->assertTrue($equal_true);
        $this->assertFalse($equal_false);
    }

    public function testMd5HasherCheckWithSalt()
    {
        $password_source = 'password';
        $salt = 'what happend';
        $password_hasher = $this->hasher->make($password_source, compact('salt'));
        $equal_true = $this->hasher->check($password_source . $salt, $password_hasher);
        $equal_false = $this->hasher->check('what', $password_hasher);
        $this->assertTrue($equal_true);
        $this->assertFalse($equal_false);
    }

}