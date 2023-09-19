<?php

use App\Http\Controllers\ContratoController;
use App\Http\Controllers\UserController;
use App\Models\contrato;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Tela Inicial - Área de Login
Route::get('/', function () {
    return view('welcome');
});

//Auth Routes
Auth::routes();

//Exibição de Saldo na View
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth Routes
Auth::routes();

//Exibição dos saldos na View
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
 
//Listagem de Contratos/Dotações
Route::get('/contratos', 'App\Http\Controllers\ContratoController@index')->name('contratos');
Route::get('/contratos', [App\Http\Controllers\ContratoController::class, 'index'])->name('contratos');

//Cadastro de Contratos/Dotações:
Route::get('/adicionar', 'App\Http\Controllers\ContratoController@create')->name('adicionar.create');
Route::get('/adicionar', [App\Http\Controllers\ContratoController::class, 'create'])->name('adicionar.create');
Route::post('/adicionar', [ContratoController::class, 'store'])->name('adicionar.store');

//Controle de Cadastro e Login de Usuário
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	//Jogar Criação de perfil no perfil ADM
	//Route::get('/profile' , [UserController::class, 'store'])->name('register.user') 
	//Route::get('/profile', [UserController::class, 'create'])->name('register');
	//Route::get('/profile', 'App\Http\Controllers\UserController@create')->name('register');
});

//Controle de Páginas 
Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

