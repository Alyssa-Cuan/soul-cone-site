<?php
/**
 * Created by PhpStorm.
 * User: Alyssa Cuan
 * Date: 10/10/2019
 * Time: 10:52 PM
 */
namespace App;
class Wheel{

	protected $num;

	public function __construct($n)
	{
		$this->num = $n;
	}

	public function getNumWheels(){
		return $this->num;
	}
}