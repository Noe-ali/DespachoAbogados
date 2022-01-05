<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\AbogadosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::post('/home', [HomeController::class, 'contact'])->name('home.contact');

//Rutas de login y registro

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [LoginController::class, 'register'])->name('login.register');
Route::post('/', [LoginController::class, 'userstore'])->name('login.userstore');
Route::post('/acess', [LoginController::class, 'acess'])->name('login.acess');



//rutas de administrador
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/createuser', [AdminController::class, 'create'])->name('admin.create');

Route::get('/admin/edituser/{usuario}', [AdminController::class, 'edituser'])->name('admin.edituser');

Route::get('/admin/editservice/{servicio}', [AdminController::class, 'editservice'])->name('admin.editservice');

Route::put('/admin/{usuario}', [AdminController::class, 'updateuser'])->name('admin.updateuser');

Route::put('/admin/service/{servicio}', [AdminController::class, 'updateservice'])->name('admin.updateservice');

Route::get('/admin/createservice', [AdminController::class, 'createservice'])->name('admin.createservice');

Route::post('/admin', [AdminController::class, 'userstore'])->name('admin.userstore');

Route::post('/admin/newservice', [AdminController::class, 'servicestore'])->name('admin.servicestore');

Route::delete('/admin/user/{usuario}', [AdminController::class, 'deleteuser'])->name('admin.deleteuser');

Route::delete('/admin/service/{servicio}', [AdminController::class, 'deleteservice'])->name('admin.deleteservice');


//Servicios
Route::get('/services', [EspecialidadController::class, 'index'])->name('services.index');

//Usuarios
Route::get('/Profile', [UsuarioController::class, 'index'])->name('user.profile');
Route::get('/edituser/{usuario}', [UsuarioController::class, 'edituser'])->name('usuario.edituser');
Route::put('/editer/{usuario}', [UsuarioController::class, 'updateuser'])->name('usuario.updateuser');

//citas
Route::get('/citas/addnew/law={abogado}', [CitasController::class, 'addnew'])->name('citas.addnew');
Route::post('/citas/addnew/', [CitasController::class, 'store'])->name('citas.store');

//abogados
Route::get('/lawyer', [AbogadosController::class, 'index'])->name('abogados.index');
Route::post('/lawyer/', [AbogadosController::class, 'statuschange'])->name('abogados.statuschange');
Route::get('/editlaw/{usuario}', [AbogadosController::class, 'edituser'])->name('abogados.edituser');
Route::put('/editlaw/{usuario}', [AbogadosController::class, 'updateuser'])->name('abogados.updateuser');


