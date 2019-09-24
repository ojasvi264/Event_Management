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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.backend');
});

Route::prefix('/')->namespace('Frontend')->group(function() {
    //Route::get('', 'FrontController@index')->name('frontend.index');
//    Route::get('category/{slug}', 'FrontController@category')->name('frontend.category');
//    Route::get('subcategory/{slug}', 'FrontController@subcategory')->name('frontend.subcategory');
//    Route::get('product_line/{slug}', 'FrontController@product_line')->name('frontend.product_line');
//    Route::get('product/{slug}', 'FrontController@product')->name('frontend.product');
//    Route::post('cart/add', 'CartController@add')->name('frontend.cart.add');
//    Route::get('cart', 'CartController@index')->name('frontend.cart.index');
//    Route::delete('cart/delete/{id}', 'CartController@destroy')->name('cart.destroy');

});

Route::prefix('backend')->middleware('auth')->namespace('Backend')->group(function (){
    Route::get('event','EventController@index')->name('event.index');
    Route::get('event/create','EventController@create')->name('event.create');
    Route::post('event','EventController@store')->name('event.store');
    Route::get('event/{id}','EventController@show')->name('event.show');
    Route::get('event/{id}/edit','EventController@edit')->name('event.edit');
    Route::put('event/{id}','EventController@update')->name('event.update');
    Route::delete('event/{id}', 'EventController@destroy')->name('event.destroy');

    Route::get('category','CategoryController@index')->name('category.index');
    Route::get('category/create','CategoryController@create')->name('category.create');
    Route::post('category','CategoryController@store')->name('category.store');
    Route::get('category/{id}','CategoryController@show')->name('category.show');
    Route::get('category/{id}/edit','CategoryController@edit')->name('category.edit');
    Route::put('category/{id}','CategoryController@update')->name('category.update');
    Route::delete('category/{id}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('booking','BookingController@index')->name('booking.index');
    Route::get('booking/create','BookingController@create')->name('booking.create');
    Route::post('booking','BookingController@store')->name('booking.store');
    Route::get('booking/{id}','BookingController@show')->name('booking.show');
    Route::get('booking/{id}/edit','BookingController@edit')->name('booking.edit');
    Route::put('booking/{id}','BookingController@update')->name('booking.update');
    Route::delete('booking/{id}', 'BookingController@destroy')->name('booking.destroy');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/create','ContactController@create')->name('contact.create');
    Route::post('contact','ContactController@store')->name('contact.store');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::get('contact/{id}/edit','ContactController@edit')->name('contact.edit');
    Route::put('contact/{id}','ContactController@update')->name('contact.update');
    Route::delete('contact/{id}', 'ContactController@destroy')->name('contact.destroy');

    Route::get('gallery','GalleryController@index')->name('gallery.index');
    Route::get('gallery/create','GalleryController@create')->name('gallery.create');
    Route::post('gallery','GalleryController@store')->name('gallery.store');
    Route::get('gallery/{id}','GalleryController@show')->name('gallery.show');
    Route::get('gallery/{id}/edit','GalleryController@edit')->name('gallery.edit');
    Route::put('gallery/{id}','GalleryController@update')->name('gallery.update');
    Route::delete('gallery/{id}', 'GalleryController@destroy')->name('gallery.destroy');

    Route::get('service','ServiceController@index')->name('service.index');
    Route::get('service/create','ServiceController@create')->name('service.create');
    Route::post('service','ServiceController@store')->name('service.store');
    Route::get('service/{id}','ServiceController@show')->name('service.show');
    Route::get('service/{id}/edit','ServiceController@edit')->name('service.edit');
    Route::put('service/{id}','ServiceController@update')->name('service.update');
    Route::delete('service/{id}', 'ServiceController@destroy')->name('service.destroy');

    Route::get('module','ModuleController@index')->name('module.index');
    Route::get('module/create','ModuleController@create')->name('module.create');
    Route::post('module','ModuleController@store')->name('module.store');
    Route::get('module/{id}','ModuleController@show')->name('module.show');
    Route::get('module/{id}/edit','ModuleController@edit')->name('module.edit');
    Route::put('module/{id}','ModuleController@update')->name('module.update');
    Route::delete('module/{id}', 'ModuleController@destroy')->name('module.destroy');

    Route::get('permission','PermissionController@index')->name('permission.index');
    Route::get('permission/create','PermissionController@create')->name('permission.create');
    Route::post('permission','PermissionController@store')->name('permission.store');
    Route::get('permission/{id}','PermissionController@show')->name('permission.show');
    Route::get('permission/{id}/edit','PermissionController@edit')->name('permission.edit');
    Route::put('permission/{id}','PermissionController@update')->name('permission.update');
    Route::delete('permission/{id}', 'PermissionController@destroy')->name('permission.destroy');

    Route::get('slider','SliderController@index')->name('slider.index');
    Route::get('slider/create','SliderController@create')->name('slider.create');
    Route::post('slider','SliderController@store')->name('slider.store');
    Route::get('slider/{id}','SliderController@show')->name('slider.show');
    Route::get('slider/{id}/edit','SliderController@edit')->name('slider.edit');
    Route::put('slider/{id}','SliderController@update')->name('slider.update');
    Route::delete('slider/{id}', 'SliderController@destroy')->name('slider.destroy');

    Route::get('role','RoleController@index')->name('role.index');
    Route::get('role/create','RoleController@create')->name('role.create');
    Route::post('role','RoleController@store')->name('role.store');
    Route::get('role/{id}','RoleController@show')->name('role.show');
    Route::get('role/{id}/edit','RoleController@edit')->name('role.edit');
    Route::put('role/{id}','RoleController@update')->name('role.update');
    Route::delete('role/{id}', 'RoleController@destroy')->name('role.destroy');

    Route::get('role/assignpermission/{id}', 'RoleController@assignPermission')->name('role.assignpermission');
    Route::post('role/savepermission/{id}', 'RoleController@savePermission')->name('role.savepermission');

    Route::get('testimonial','TestimonialController@index')->name('testimonial.index');
    Route::get('testimonial/create','TestimonialController@create')->name('testimonial.create');
    Route::post('testimonial','TestimonialController@store')->name('testimonial.store');
    Route::get('testimonial/{id}','TestimonialController@show')->name('testimonial.show');
    Route::get('testimonial/{id}/edit','TestimonialController@edit')->name('testimonial.edit');
    Route::put('testimonial/{id}','TestimonialController@update')->name('testimonial.update');
    Route::delete('testimonial/{id}', 'TestimonialController@destroy')->name('testimonial.destroy');

    Route::get('team','TeamController@index')->name('team.index');
    Route::get('team/create','TeamController@create')->name('team.create');
    Route::post('team','TeamController@store')->name('team.store');
    Route::get('team/{id}','TeamController@show')->name('team.show');
    Route::get('team/{id}/edit','TeamController@edit')->name('team.edit');
    Route::put('team/{id}','TeamController@update')->name('team.update');
    Route::delete('team/{id}', 'TeamController@destroy')->name('team.destroy');

    Route::get('configuration','ConfigurationController@index')->name('configuration.index');
    Route::get('configuration/create','ConfigurationController@create')->name('configuration.create');
    Route::post('configuration','ConfigurationController@store')->name('configuration.store');
    Route::get('configuration/{id}','ConfigurationController@show')->name('configuration.show');
    Route::get('configuration/{id}/edit','ConfigurationController@edit')->name('configuration.edit');
    Route::put('configuration/{id}','ConfigurationController@update')->name('configuration.update');
    Route::delete('configuration/{id}', 'ConfigurationController@destroy')->name('configuration.destroy');

    Route::get('user','UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user','UserController@store')->name('user.store');
    Route::get('user/{id}','UserController@show')->name('user.show');
    Route::get('user/{id}/edit','UserController@edit')->name('user.edit');
    Route::put('user/{id}','UserController@update')->name('user.update');
    Route::delete('user/{id}', 'UserController@destroy')->name('user.destroy');

    Route::get('page','PageController@index')->name('page.index');
    Route::get('page/create','PageController@create')->name('page.create');
    Route::post('page','PageController@store')->name('page.store');
    Route::get('page/{id}','PageController@show')->name('page.show');
    Route::get('page/{id}/edit','PageController@edit')->name('page.edit');
    Route::put('page/{id}','PageController@update')->name('page.update');
    Route::delete('page/{id}', 'PageController@destroy')->name('page.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
