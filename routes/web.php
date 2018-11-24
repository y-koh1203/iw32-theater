<?php

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
//お客様ログイン
//Route::get('/customer/login', 'StaffController@index');
//お客様
Route::get('/customer/top', 'CustomerController@index');
//Route::get('/customer/schedule', 'CustomerController@index');

Route::get('/customer/reservation', 'CustomerReservationController@index');
Route::post('/customer/reservation/confirm', 'CustomerReservationController@confirm');

//Route::get('/customer/mypage', 'CustomerMypageController@index');

//管理者、スタッフログイン
//Route::get('/admin/login', 'HomeController@index');
//管理者
Route::get('/admin/top', 'AdminController@index');
Route::get('/admin/employee', 'AdminEmployeeController@index');
Route::get('/admin/movie', 'AdminEmployeeController@index');
Route::get('/admin/sale', 'AdminSaleController@index');
Route::get('/admin/customer', 'AdminCustomerController@index');
Route::get('/admin/schedule', 'AdminScheduleController@index');
//バイト、社員
Route::get('/staff', 'StaffController@index');
Route::get('/staff/schedule', 'StaffScheduleController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home/Employee', 'AdminEmployeeController@index');
