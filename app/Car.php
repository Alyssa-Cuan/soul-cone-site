<?php
/**
 * Created by PhpStorm.
 * User: Alyssa Cuan
 * Date: 10/10/2019
 * Time: 10:49 PM
 */
namespace App;

class Car{

	protected $wheels;
	protected $engine;

	public function __construct(Wheel $wheels, Engine $engine){
		$this->wheels = $wheels;
		$this->engine = $engine;
	}

	public function vroom(){
		echo $this->wheels->getNumWheels()." wheels and engine power at ".$this->engine->getPower();
	}
}