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

Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'ScheduleController@home')->name('user.home');
Route::post('/start/store', 'ShiftController@start')->name('user.shift.start');
Route::post('/end/store', 'ShiftController@end')->name('user.shift.end');
Route::get('/shift/{shift}/edit', 'ShiftController@edit')->name('user.shift.edit');
Route::put('/shift/{shift}/update', 'ShiftController@update')->name('user.shift.update');
Route::delete('/shift/{shift}/destroy', 'ShiftController@destroy')->name('user.shift.destroy');
Route::get('/profile/edit', 'UserController@edit')->name('user.profile.edit');
Route::put('/profile/update', 'UserController@update')->name('user.profile.update');
Route::get('/passowrd/edit', 'UserController@passwordEdit')->name('user.profile.passwordEdit');
Route::put('/password/update', 'UserController@passwordUpdate')->name('user.profile.passwordUpdate');
Route::get('/shift/{year}/{month}', 'ShiftController@index')->name('user.shift.index');
Route::get('/notices', 'NoticeController@index')->name('user.notice.index');
Route::get('/notice/{notice}', 'NoticeController@show')->name('user.notice.show');
Route::get('/users', 'UserController@index')->name('user.user.index');
Route::get('/user/{user}', 'UserController@show')->name('user.user.show');
Route::get('/user/search', 'UserController@search')->name('user.user.search');
Route::post('/user/{user}/follow', 'UserController@follow')->name('user.user.follow');
Route::delete('/user/{user}/unfollow', 'UserController@unfollow')->name('user.user.unfollow');
Route::get('/schedule/week', 'ScheduleController@week')->name('user.schedule.week');
Route::get('/schedule/month/{user}', 'ScheduleController@month')->name('user.schedule.month');
Route::get('/schedule/{schedule}', 'ScheduleController@show')->name('user.schedule.show');
Route::get('/schedule/create', 'ScheduleController@create')->name('user.schedule.create');
Route::post('/schedule/store', 'ScheduleController@store')->name('user.schedule.store');
Route::get('/schedule/{schedule}/edit', 'ScheduleController@edit')->name('user.schedule.edit');
Route::put('/schedule/{schedule}/update', 'ScheduleController@update')->name('user.schedule.update');
Route::get('/rooms/week', 'RoomController@week')->name('user.room.week');
Route::get('/rooms/month', 'RoomController@month')->name('user.room.month');
Route::get('/room/{room}', 'RoomController@show')->name('user.room.show');
Route::get('/messages/received', 'MessageController@receivedIndex')->name('user.message.receivedIndex');
Route::get('/messages/send', 'MessageController@sendIndex')->name('user.message.sendIndex');
Route::get('/message/{message}', 'MessageController@show')->name('user.message.show');
Route::get('/message/create', 'MessageController@create')->name('user.message.create');
Route::post('/message/store', 'MessageController@store')->name('user.message.store');
Route::get('/products', 'ProductController@index')->name('user.product.index');
Route::get('/product/{product}', 'ProductController@show')->name('user.product.show');
Route::post('/product/{product}/add', 'CartController@add')->name('user.cart.add');
Route::get('/carts', 'CartController@index')->name('user.cart.index');
Route::get('/orders', 'OrderController@index')->name('user.order.index');
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('admin.logout');
Route::get('/admin/home', 'AdminController@home')->name('admin.store.index');
Route::get('/admin/passwors/edit', 'AdminController@passwordEdit')->name('admin.passowrd.edit');
Route::put('/admin/passwors/update', 'AdminController@passwordUpdate')->name('admin.passowrd.update');
Route::get('/admin/admins', 'AdminController@index')->name('admin.admin.index');
Route::get('/admin/admins/create', 'AdminController@create')->name('admin.admin.create');
Route::post('/admin/admins/store', 'AdminController@store')->name('admin.admin.store');
Route::get('/admin/admins/edit', 'AdminController@edit')->name('admin.admin.edit');
Route::put('/admin/admins/update', 'AdminController@update')->name('admin.admin.update');
Route::delete('/admin/admins/destroy', 'AdminController@destroy')->name('admin.admin.destroy');
Route::get('/admin/users', 'UserController@AdminIndex')->name('admin.user.index');
Route::get('/admin/user/create', 'UserController@AdminCreate')->name('admin.user.create');
Route::post('/admin/user/store', 'UserController@AdminStore')->name('admin.user.store');
Route::get('/admin/user/{user}/edit', 'UserController@AdminEdit')->name('admin.user.edit');
Route::put('/admin/user/{user}/update', 'UserController@AdminUpdate')->name('admin.user.update');
Route::delete('/admin/user/{user}/destroy', 'UserController@AdminDestroy')->name('admin.user.destroy');
Route::get('/admin/rooms', 'RoomController@AdminIndex')->name('admin.room.index');
Route::get('/admin/room/create', 'RoomController@AdminCreate')->name('admin.room.create');
Route::post('/admin/room/store', 'RoomController@AdminStore')->name('admin.room.store');
Route::get('/admin/room/{room}/edit', 'RoomController@AdminEdit')->name('admin.room.edit');
Route::put('/admin/room/{room}/update', 'RoomController@AdminUpdate')->name('admin.room.update');
Route::delete('/admin/room/{room}/destroy', 'RoomController@AdminDestroy')->name('admin.room.destroy');
Route::get('/admin/departments', 'DepartmentController@AdminIndex')->name('admin.department.index');
Route::get('/admin/department/create', 'DepartmentController@AdminCreate')->name('admin.department.create');
Route::post('/admin/department/store', 'DepartmentController@AdminStore')->name('admin.department.store');
Route::get('/admin/department/{department}/edit', 'DepartmentController@AdminEdit')->name('admin.department.edit');
Route::put('/admin/department/{department}/update', 'DepartmentController@AdminUpdate')->name('admin.department.update');
Route::delete('/admin/department/{department}/destroy', 'DepartmentController@AdminDestroy')->name('admin.department.destroy');
Route::get('/admin/notices', 'NoticeController@AdminIndex')->name('admin.notice.index');
Route::get('/admin/notice/create', 'NoticeController@AdminCreate')->name('admin.notice.create');
Route::post('/admin/notice/store', 'NoticeController@AdminStore')->name('admin.notice.store');
Route::get('/admin/notice/{notice}/edit', 'NoticeController@AdminEdit')->name('admin.notice.edit');
Route::put('/admin/notice/{notice}/update', 'NoticeController@AdminUpdate')->name('admin.notice.update');
Route::delete('/admin/notice/{notice}/destroy', 'NoticeController@AdminDestroy')->name('admin.notice.destroy');
Route::get('/admin/shifts/{user}/{year}/{month}', 'ShiftController@AdminIndex')->name('admin.shift.index');
Route::get('/admin/shift/{shift}/edit', 'ShiftController@AdminEdit')->name('admin.shift.edit');
Route::put('/admin/shift/{shift}/update', 'ShiftController@AdminUpdate')->name('admin.shift.update');
Route::get('/admin/products', 'ProductController@AdminIndex')->name('admin.product.index');
Route::get('/admin/product/create', 'ProductController@AdminCreate')->name('admin.product.create');
Route::post('/admin/product/store', 'ProductController@AdminStore')->name('admin.product.store');
Route::get('/admin/product/{product}/edit', 'ProductController@AdminEdit')->name('admin.product.edit');
Route::put('/admin/product/{product}/update', 'ProductController@AdminUpdate')->name('admin.product.update');
Route::delete('/admin/product/{product}/destroy', 'ProductController@AdminDestroy')->name('admin.product.destroy');
Route::get('/admin/orders', 'OrderController@AdminIndex')->name('admin.order.index');
Route::get('/admin/order/{order}', 'OrderController@AdminShow')->name('admin.order.show');
