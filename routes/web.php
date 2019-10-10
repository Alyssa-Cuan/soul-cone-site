<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//takes care of the CRUD related operations
//run php artisan route:list to see all the routes
Route::resource('students', 'StudentController');

