<?php
require_once "User.php";
class UserTest extends PHPUnit_Framework_TestCase{
	public function testTalk(){
		$user = new User();
		$expected = "Hola!";
		$actual = $user->talk();
		$this->assertEquals($expected, $actual);
	}
}

