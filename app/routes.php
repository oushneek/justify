<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


//courses
Route::get('courses', array('as' => 'course.index', 'uses' => 'CourseController@index'));
Route::get('courses/create', array('as' => 'course.create', 'uses' => 'CourseController@create'));
Route::get('courses/{id}', array('as' => 'course.show', 'uses' => 'CourseController@show'));
Route::post('courses/store', array('as' => 'course.store', 'uses' => 'CourseController@store'));
Route::get('courses/{id}/edit', array('as' => 'course.edit', 'uses' => 'CourseController@edit'));
Route::put('courses/{id}', array('as' => 'course.update', 'uses' => 'CourseController@update'));
Route::delete('courses/{id}', array('as' => 'course.destroy', 'uses' => 'CourseController@destroy'));


//semester
Route::get('semesters', array('as' => 'semester.index', 'uses' => 'SemesterController@index'));
Route::get('semesters/create', array('as' => 'semester.create', 'uses' => 'SemesterController@create'));
Route::get('semesters/{id}', array('as' => 'semester.show', 'uses' => 'SemesterController@show'));
Route::post('semesters/store', array('as' => 'semester.store', 'uses' => 'SemesterController@store'));
Route::get('semesters/{id}/edit', array('as' => 'semester.edit', 'uses' => 'SemesterController@edit'));
Route::put('semesters/{id}', array('as' => 'semester.update', 'uses' => 'SemesterController@update'));
Route::delete('semesters/{id}', array('as' => 'semester.destroy', 'uses' => 'SemesterController@destroy'));


//exam
Route::get('exams', array('as' => 'exam.index', 'uses' => 'ExamController@index'));
Route::get('exams/create', array('as' => 'exam.create', 'uses' => 'ExamController@create'));
Route::get('exams/{id}', array('as' => 'exam.show', 'uses' => 'ExamController@show'));
Route::post('exams/store', array('as' => 'exam.store', 'uses' => 'ExamController@store'));
Route::get('exams/{id}/edit', array('as' => 'exam.edit', 'uses' => 'ExamController@edit'));
Route::put('exams/{id}', array('as' => 'exam.update', 'uses' => 'ExamController@update'));
Route::delete('exams/{id}', array('as' => 'exam.destroy', 'uses' => 'ExamController@destroy'));


//question
Route::get('questions', array('as' => 'question.index', 'uses' => 'QuestionController@index'));
Route::get('questions/create', array('as' => 'question.create', 'uses' => 'QuestionController@create'));
Route::get('questions/{id}', array('as' => 'question.show', 'uses' => 'QuestionController@show'));
Route::post('questions/store', array('as' => 'question.store', 'uses' => 'QuestionController@store'));
Route::get('questions/{id}/edit', array('as' => 'question.edit', 'uses' => 'QuestionController@edit'));
Route::put('questions/{id}', array('as' => 'question.update', 'uses' => 'QuestionController@update'));
Route::delete('questions/{id}', array('as' => 'question.destroy', 'uses' => 'QuestionController@destroy'));
