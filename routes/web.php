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
use Illuminate\Support\Facades\Route;

/* RUTAS PASSWORD RESET */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/','InicioController@index')->name('inicio');
Route::get('/acercaDe','InicioController@acercaDe')->name('acercaDe');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::post('ajax-sesion', 'AjaxController@setSession')->name('ajax')->middleware('auth');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','superadmin']], function () {
    /*RUTAS DE USUARIO*/
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('usuario/crear', 'UsuarioController@crear')->name('crear_usuario');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar_usuario');
    Route::post('usuario/{usuario}', 'UsuarioController@ver')->name('ver_usuario');
    Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario');
    Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario');
    Route::delete('usuario/{id}', 'UsuarioController@eliminar')->name('eliminar_usuario');
    /*RUTAS DE PERMISO*/
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
    Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
    Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');
    /*RUTAS DEL MENÜ*/
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
    /*RUTAS ROL */
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    /*RUTAS MENU_ROL */
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
    /*RUTAS PERMISO_ROL*/
    Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
    Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_permiso_rol');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    /*RUTAS DE ADMIN */
    Route::get('admin', 'AdminController@index')->name('admin');
    Route::get('admin/denegado', 'AdminController@denegado')->name('denegado');
});

/*RUTAS Afiliado */
Route::get('afiliado', 'AfiliadoController@index')->name('afiliado');
Route::get('afiliado/crear', 'AfiliadoController@crear')->name('crear_afiliado');
Route::post('afiliado', 'AfiliadoController@guardar')->name('guardar_afiliado');
Route::get('afiliado/{id}/editar', 'AfiliadoController@editar')->name('editar_afiliado');
Route::put('afiliado/{id}', 'AfiliadoController@actualizar')->name('actualizar_afiliado');
Route::delete('afiliado/{id}', 'AfiliadoController@eliminar')->name('eliminar_afiliado');

/* RUTAS DE POST */
Route::group(['prefix' => 'frontend', 'namespace' => 'Frontend', 'middleware' => 'auth'], function () {
    /*RUTAS DE ADMIN */
    Route::get('post', 'PostController@index')->name('post');
    Route::get('post/crear', 'PostController@crear')->name('crear.post');
    Route::post('post', 'PostController@guardar')->name('guardar.post');
    Route::post('post/{post}', 'PostController@ver')->name('ver.post');
    Route::get('post/{id}/editar', 'PostController@editar')->name('editar.post');
    Route::put('post/{id}', 'PostController@actualizar')->name('actualizar.post');
    Route::delete('post/{id}', 'PostController@eliminar')->name('eliminar.post');
});
