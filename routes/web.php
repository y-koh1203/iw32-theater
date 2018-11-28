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
//お客様トップ
Route::get('/', 'CustomerController@index');
//現在上映映画
Route::get('/customer/schedule', 'CustomerScheduleController@index');
//座席予約
Route::get('/customer/reservation/{id}', 'CustomerReservationController@index');
Route::post('/customer/reservation/confirm', 'CustomerReservationController@confirm');
Route::post('/customer/reservation/complete', 'CustomerReservationController@insertSchedule');

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
