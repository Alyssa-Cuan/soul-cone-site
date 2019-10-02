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

Route::get('/', function () {

	$students = Student::orderBy('created_at', 'asc')->get();

	return view('students', [
		'students' => $students
	]);
});

/**
 * Add A New Student
 */
Route::post('/student', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'first_name' => 'required|max:255',
		'last_name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$student = new Student;
	$student->first_name = $request->first_name;
	$student->last_name = $request->last_name;
	$student->save();

	return redirect('/');
});

/**
 * Delete An Existing Student
 */
Route::post('/student/{student}', function (Student $student) {
	$student->delete();

	return redirect('/');
});
