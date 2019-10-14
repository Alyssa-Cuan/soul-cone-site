<?php

namespace App\Providers;

use App\Car;
use App\Engine;
use App\Wheel;
use Illuminate\Support\ServiceProvider;

class CarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(Car::class, function(){
        	return new Car(app(Wheel::class), app(Engine::class));
        });

	    $this->app->bind(Wheel::class, function(){
		    return new Wheel(5);
	    });

	    $this->app->bind(Engine::class, function(){
		    return new Engine(70);
	    });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
