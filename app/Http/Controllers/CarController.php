<?php

namespace App\Http\Controllers;

use App\Car;

class CarController extends Controller
{
	protected $car;

	public function __construct(Car $car){
		$this->car = $car;
	}

	public function index(){
	    $this->car->vroom();
    }
}
