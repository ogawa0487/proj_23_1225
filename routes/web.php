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
use App\Http\Controllers\Auth\User\LoginController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login','App\Http\Controllers\Auth\User\LoginController@showLoginForm')->name('login');
Route::post('login','App\Http\Controllers\Auth\User\LoginController@login');
Route::post('logout','App\Http\Controllers\Auth\User\LoginController@logout')->name('logout');
Route::get('/','App\Http\Controllers\ScheduleController@home')->name('user.home');
Route::post('start/store','App\Http\Controllers\ShiftController@start')->name('user.shift.start');
Route::post('end/store','App\Http\Controllers\ShiftController@end')->name('user.shift.end');
Route::get('shift/{shift}/edit','App\Http\Controllers\ShiftController@edit')->name('user.shift.edit');
Route::put('shift/{shift}/update','App\Http\Controllers\ShiftController@update')->name('user.shift.update');
Route::delete('shift/{shift}/destroy','App\Http\Controllers\ShiftController@destroy')->name('user.shift.destroy');
Route::get('profile/edit','App\Http\Controllers\UserController@edit')->name('user.profile.edit');
Route::put('profile/update','App\Http\Controllers\UserController@update')->name('user.profile.update');
Route::get('passowrd/edit','App\Http\Controllers\UserController@passwordEdit')->name('user.profile.passwordEdit');
Route::put('password/update','App\Http\Controllers\UserController@passwordUpdate')->name('user.profile.passwordUpdate');
Route::get('shift/{year}/{month}','App\Http\Controllers\ShiftController@index')->name('user.shift.index');
Route::get('notices','App\Http\Controllers\NoticeController@index')->name('user.notice.index');
Route::get('notice/{notice}','App\Http\Controllers\NoticeController@show')->name('user.notice.show');
Route::get('users','App\Http\Controllers\UserController@index')->name('user.user.index');
Route::get('user/{user}','App\Http\Controllers\UserController@show')->name('user.user.show');
Route::get('user/search','App\Http\Controllers\UserController@search')->name('user.user.search');
Route::post('user/{user}/follow','App\Http\Controllers\UserController@follow')->name('user.user.follow');
Route::delete('user/{user}/unfollow','App\Http\Controllers\UserController@unfollow')->name('user.user.unfollow');
Route::get('schedules/week','App\Http\Controllers\SchedulesController@week')->name('user.schedule.week');
Route::get('schedules/month/{user}','App\Http\Controllers\SchedulesController@month')->name('user.schedule.month');
Route::get('schedule/{schedule}','App\Http\Controllers\SchedulesController@show')->name('user.schedule.show');
Route::get('schedule/create','App\Http\Controllers\SchedulesController@create')->name('user.schedule.create');
Route::post('schedule/store','App\Http\Controllers\SchedulesController@store')->name('user.schedule.store');
Route::get('schedule/{schedule}/edit','App\Http\Controllers\SchedulesController@edit')->name('user.schedule.edit');
Route::put('schedule/{schedule}/update','App\Http\Controllers\SchedulesController@update')->name('user.schedule.update');
Route::get('rooms/week','App\Http\Controllers\RoomController@week')->name('user.room.week');
Route::get('rooms/month','App\Http\Controllers\RoomController@month')->name('user.room.month');
Route::get('room/{room}','App\Http\Controllers\RoomController@show')->name('user.room.show');
Route::get('messages/received','App\Http\Controllers\MessageController@receivedIndex')->name('user.message.receivedIndex');
Route::get('messages/send','App\Http\Controllers\MessageController@sendIndex')->name('user.message.sendIndex');
Route::get('message/{message}','App\Http\Controllers\MessageController@show')->name('user.message.show');
Route::get('message/create','App\Http\Controllers\MessageController@create')->name('user.message.create');
Route::post('message/store','App\Http\Controllers\MessageController@store')->name('user.message.store');
Route::get('products','App\Http\Controllers\ProductController@index')->name('user.product.index');
Route::get('product/{product}','App\Http\Controllers\ProductController@show')->name('user.product.show');
Route::post('product/{product}/add','App\Http\Controllers\CartController@add')->name('user.cart.add');
Route::get('carts','App\Http\Controllers\CartController@index')->name('user.cart.index');
Route::get('orders','App\Http\Controllers\OrderController@index')->name('user.order.index');
Route::get('admin/login','App\Http\Controllers\Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','App\Http\Controllers\Auth\Admin\LoginController@login');
Route::post('admin/logout','App\Http\Controllers\Auth\Admin\LoginController@logout')->name('admin.logout');
Route::get('admin/home','App\Http\Controllers\AdminController@home')->name('admin.store.index');
Route::get('admin/passwors/edit','App\Http\Controllers\AdminController@passwordEdit')->name('admin.passowrd.edit');
Route::put('admin/passwors/update','App\Http\Controllers\AdminController@passwordUpdate')->name('admin.passowrd.update');
Route::get('admin/admins','App\Http\Controllers\AdminController@index')->name('admin.admin.index');
Route::get('admin/admins/create','App\Http\Controllers\AdminController@create')->name('admin.admin.create');
Route::post('admin/admins/store','App\Http\Controllers\AdminController@store')->name('admin.admin.store');
Route::get('admin/admins/edit','App\Http\Controllers\AdminController@edit')->name('admin.admin.edit');
Route::put('admin/admins/update','App\Http\Controllers\AdminController@update')->name('admin.admin.update');
Route::delete('admin/admins/destroy','App\Http\Controllers\AdminController@destroy')->name('admin.admin.destroy');
Route::get('admin/users','App\Http\Controllers\UserController@AdminIndex')->name('admin.user.index');
Route::get('admin/user/create','App\Http\Controllers\UserController@AdminCreate')->name('admin.user.create');
Route::post('admin/user/store','App\Http\Controllers\UserController@AdminStore')->name('admin.user.store');
Route::get('admin/user/{user}/edit','App\Http\Controllers\UserController@AdminEdit')->name('admin.user.edit');
Route::put('admin/user/{user}/update','App\Http\Controllers\UserController@AdminUpdate')->name('admin.user.update');
Route::delete('admin/user/{user}/destroy','App\Http\Controllers\UserController@AdminDestroy')->name('admin.user.destroy');
Route::get('admin/rooms','App\Http\Controllers\RoomController@AdminIndex')->name('admin.room.index');
Route::get('admin/room/create','App\Http\Controllers\RoomController@AdminCreate')->name('admin.room.create');
Route::post('admin/room/store','App\Http\Controllers\RoomController@AdminStore')->name('admin.room.store');
Route::get('admin/room/{room}/edit','App\Http\Controllers\RoomController@AdminEdit')->name('admin.room.edit');
Route::put('admin/room/{room}/update','App\Http\Controllers\RoomController@AdminUpdate')->name('admin.room.update');
Route::delete('admin/room/{room}/destroy','App\Http\Controllers\RoomController@AdminDestroy')->name('admin.room.destroy');
Route::get('admin/departments','App\Http\Controllers\DepartmentController@AdminIndex')->name('admin.department.index');
Route::get('admin/department/create','App\Http\Controllers\DepartmentController@AdminCreate')->name('admin.department.create');
Route::post('admin/department/store','App\Http\Controllers\DepartmentController@AdminStore')->name('admin.department.store');
Route::get('admin/department/{department}/edit','App\Http\Controllers\DepartmentController@AdminEdit')->name('admin.department.edit');
Route::put('admin/department/{department}/update','App\Http\Controllers\DepartmentController@AdminUpdate')->name('admin.department.update');
Route::delete('admin/department/{department}/destroy','App\Http\Controllers\DepartmentController@AdminDestroy')->name('admin.department.destroy');
Route::get('admin/notices','App\Http\Controllers\NoticeController@AdminIndex')->name('admin.notice.index');
Route::get('admin/notice/create','App\Http\Controllers\NoticeController@AdminCreate')->name('admin.notice.create');
Route::post('admin/notice/store','App\Http\Controllers\NoticeController@AdminStore')->name('admin.notice.store');
Route::get('admin/notice/{notice}/edit','App\Http\Controllers\NoticeController@AdminEdit')->name('admin.notice.edit');
Route::put('admin/notice/{notice}/update','App\Http\Controllers\NoticeController@AdminUpdate')->name('admin.notice.update');
Route::delete('admin/notice/{notice}/destroy','App\Http\Controllers\NoticeController@AdminDestroy')->name('admin.notice.destroy');
Route::get('admin/shifts/{user}/{year}/{month}','App\Http\Controllers\ShiftController@AdminIndex')->name('admin.shift.index');
Route::get('admin/shift/{shift}/edit','App\Http\Controllers\ShiftController@AdminEdit')->name('admin.shift.edit');
Route::put('admin/shift/{shift}/update','App\Http\Controllers\ShiftController@AdminUpdate')->name('admin.shift.update');
Route::get('admin/products','App\Http\Controllers\ProductController@AdminIndex')->name('admin.product.index');
Route::get('admin/product/create','App\Http\Controllers\ProductController@AdminCreate')->name('admin.product.create');
Route::post('admin/product/store','App\Http\Controllers\ProductController@AdminStore')->name('admin.product.store');
Route::get('admin/product/{product}/edit','App\Http\Controllers\ProductController@AdminEdit')->name('admin.product.edit');
Route::put('admin/product/{product}/update','App\Http\Controllers\ProductController@AdminUpdate')->name('admin.product.update');
Route::delete('admin/product/{product}/destroy','App\Http\Controllers\ProductController@AdminDestroy')->name('admin.product.destroy');
Route::get('admin/orders','App\Http\Controllers\OrderController@AdminIndex')->name('admin.order.index');
Route::get('admin/order/{order}','App\Http\Controllers\OrderController@AdminShow')->name('admin.order.show');
