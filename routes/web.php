<?php

use Illuminate\Support\Facades\Route;

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
    return view('Login.login');
})->name('login');
Route::get('/login', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('/login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('/logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);
//Route::get('donvi/export', 'Admin\ExportController@Export')->name('export');
//Route::resources([
//    'admin/criteria-user'=>'Admin\CriteriaUserController',
//    'admin/quan-ly'=>'Admin\UserController',
//]);
Route::group(['middleware' => 'checkLogin'], function()
{
//    --Quản lý tiêu chí--
    Route::get('admin/home','Admin\HomeController@index')->name('home.index');
    Route::resource('admin/criteria-user', 'Admin\CriteriaUserController');
    Route::get('admin/criteria-user/show', 'Admin\CriteriaUserController@show');
    Route::get('admin/criteria-user/edit/{id}', 'Admin\CriteriaUserController@edit');
    Route::get('admin/criteria-user/destroy/{id}', 'Admin\CriteriaUserController@destroy');
    Route::post('admin/criteria-user/update', 'Admin\CriteriaUserController@update');
    Route::get('admin/criteria-faculty', ['as'=>'criteria-faculty.index','uses'=>'Admin\CriteriaFacultyController@index']);
    Route::get('admin/criteria-faculty/show', 'Admin\CriteriaFacultyController@show');
    Route::post('admin/criteria-faculty/store', 'Admin\CriteriaFacultyController@store');
    Route::get('admin/criteria-faculty/edit/{id}', 'Admin\CriteriaFacultyController@edit');
    Route::post('admin/criteria-faculty/update', 'Admin\CriteriaFacultyController@update');
    Route::get('admin/criteria-faculty/destroy/{id}', 'Admin\CriteriaFacultyController@destroy');

    //--Quản lí thông tin khoa--
    Route::get('admin/quan-li', ['as'=>'quanli-faculty.index','uses'=>'Admin\InforFacultyController@index']);
    Route::get('admin/quan-li/show', 'Admin\InforFacultyController@show');
    Route::post('admin/quan-li/store', 'Admin\InforFacultyController@store');
    Route::get('admin/quan-li/edit/{id}', 'Admin\InforFacultyController@edit');
    Route::post('admin/quan-li/update', 'Admin\InforFacultyController@update');
    Route::get('admin/quan-li/destroy/{id}', 'Admin\InforFacultyController@destroy');
    Route::get('admin/quan-li/scorestable/{id}', 'Admin\InforFacultyController@scores_table');
    Route::get('admin/send-email', 'Admin\EmailController@index');



});
Route::group(['middleware' => 'checkLogin'], function() {
    Route::get('/show-disgest-faculty', 'Admin\HomeController@show');
    Route::post('/laravel-send-email', 'Admin\EmailController@sendEmail');
});
//Route::get('donvi/quan-ly/delete/{id}','Admin\UserController@destroy')->name('donvi.user.delete');
//Route::resources([
//    'user/profile'=>'User\UserController'
//]);
Route::group(['middleware' => 'checkLogin', 'prefix' => 'donvi'], function() {
    Route::get('/home',['as'=>'donvi-home','uses'=>'Donvi\HomeFacultyController@index']);
    Route::get('/show-user-home','Donvi\HomeFacultyController@show');
    //---Quản lí Khoa ---
    Route::get('quan-li', ['as'=>'quan-li.index','uses'=>'Donvi\UserController@index']);
    Route::get('/quan-li/{id}',['as'=>'donvi-quanli.index','uses'=>'Donvi\UserController@show']);
    Route::post('/quan-li/store', 'Donvi\UserController@store');
    Route::get('/quan-li/edit/{id}', 'Donvi\UserController@edit');
    Route::post('/quan-li/update', 'Donvi\UserController@update');
    Route::get('/quan-li/destroy/{id}', 'Donvi\UserController@destroy');
    //---Đánh giá đơn vị---
    Route::get('/evaluation-faculty',['as'=>'evaluation-faculty.index','uses'=>'Donvi\EvaluationFacultyController@index']);
    Route::post('/evaluation-faculty/store','Donvi\EvaluationFacultyController@store');
    Route::get('/evaluation-faculty-trans','Donvi\EvaluationFacultyController@index1');
    Route::post('/setsession','Donvi\EvaluationFacultyController@setsession');
    Route::post('/setsession1','Donvi\EvaluationFacultyController@setsession1');
    Route::get('/show-scores-faculty','Donvi\EvaluationFacultyController@show_scores');
    Route::get('/show-scores-faculty/destroy/{id}', 'Donvi\DisgestFacultyController@destroy');
    //---Đánh giá CCVC---
    Route::get('/evaluation-user/{id}', 'Donvi\EvaluationUserController@index');
    Route::get('/evaluation-user-trans/{id}','Donvi\EvaluationUserController@index1');
    Route::post('/setdiem/{id}','Donvi\EvaluationUserController@setdiem');
    Route::post('/save-diem/{id}','Donvi\EvaluationUserController@setdiem1');
    Route::get('/show-scores-user/{id}','Donvi\EvaluationUserController@show_scores');
    Route::get('/tonghop','Donvi\EvaluationUserController@total');
    Route::get('/export', 'Donvi\ExportController@export')->name('export');
    //--PDF--
    Route::get('/pdf', 'Donvi\UserController@pdf');
});
Route::group(['middleware' => 'checkLogin', 'prefix' => 'user'], function() {
    Route::get('/home', 'User\ScoreUserController@index')->name('home');
    Route::get('/vi-pham', 'User\ScoreUserController@index1');
    Route::post('/score-user/store/{id}','User\ScoreUserController@store');
    Route::get('/profile', 'User\UserController@show');
    Route::post('/update-profile', 'User\UserController@update');
    Route::post('/setdiem','User\ScoreUserController@setdiem');
    Route::get('/show-scores-user','User\ScoreUserController@show_scores');
    Route::get('score-table/destroy/{id}','User\ScoreUserController@destroy');

});

Route::group(['middleware' => 'checkLogin'], function() {
    Route::post('/save-diem','User\ScoreUserController@setdiem1');
});
Route::get('/signup',function (){
    return view('Login.Signup');
});
Route::post('/signup', ['as' => 'postaccount', 'uses' => 'CreateNewAccount@postNewAccount']);


