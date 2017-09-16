<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Admin\MainController@panel')->name('admin.main.panel');

Route::get('/seccion/principal', 'Admin\SeccionController@principal')->name('admin.seccion.principal');
Route::post('/seccion/principal', 'Admin\SeccionController@post_principal')->name('admin.seccion.post.principal');
Route::get('/seccion/quienessomos', 'Admin\SeccionController@quienessomos')->name('admin.seccion.quienessomos');
Route::post('/seccion/quienessomos', 'Admin\SeccionController@post_quienessomos')->name('admin.seccion.post.quienessomos');
Route::get('/seccion/servicios', 'Admin\SeccionController@servicios')->name('admin.seccion.servicios');
Route::post('/seccion/servicios', 'Admin\SeccionController@post_servicios')->name('admin.seccion.post.servicios');
Route::get('/seccion/servicios/add', 'Admin\SeccionController@servicios_add')->name('admin.seccion.servicios.add');
Route::post('/seccion/servicios/add', 'Admin\SeccionController@post_servicios_add')->name('admin.seccion.post.servicios.add');
Route::get('/seccion/portafolios', 'Admin\SeccionController@portafolios')->name('admin.seccion.portafolios');
Route::post('/seccion/portafolios', 'Admin\SeccionController@post_portafolios')->name('admin.seccion.post.portafolios');
Route::get('/seccion/portafolios/add', 'Admin\SeccionController@portafolios_add')->name('admin.seccion.portafolios.add');
Route::post('/seccion/portafolios/add', 'Admin\SeccionController@post_portafolios_add')->name('admin.seccion.post.portafolios.add');
Route::get('/seccion/clientes', 'Admin\SeccionController@clientes')->name('admin.seccion.clientes');
Route::post('/seccion/clientes', 'Admin\SeccionController@post_clientes')->name('admin.seccion.post.clientes');
Route::get('/seccion/contacto', 'Admin\SeccionController@contacto')->name('admin.seccion.contacto');
Route::post('/seccion/contacto', 'Admin\SeccionController@post_contacto')->name('admin.seccion.post.contacto');




Route::get('/mensajes', 'Admin\MainController@mensajes')->name('admin.main.mensajes');
Route::get('/media', 'Admin\MainController@media')->name('admin.main.media');