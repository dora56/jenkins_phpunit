<?php
class Sample3Test extends PHPUnit_Framework_TestCase
{
	public function testPushAndPop()
	{
		$user = array();
		$this->assertEquals(0, count($user));

		array_push($user, 'hoge');
		$this->assertEquals('hoge', $user[0]);
		$this->assertEquals(1, count($user));

		$this->assertEquals('hoge', array_pop($user));
		$this->assertEquals(0, count($user));
	}

	public function testArray1()
	{
		$array = array();
		$this->assertEquals(0, count($array));
	}

	public function testArray2()
	{
		$array = array();
		$this->assertEquals(0, count($array));
	}

	public function testArray3()
	{
		$array = array(1, 2, 3);
		$this->assertEquals(3, count($array));
	}

}