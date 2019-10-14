<?php
/**
 * Created by PhpStorm.
 * User: Alyssa Cuan
 * Date: 10/10/2019
 * Time: 10:52 PM
 */
namespace App;
class Engine{

	protected $power;

	public function __construct($p)
	{
		$this->power = $p;
	}

	public function getPower(){
		return $this->power;
	}
}