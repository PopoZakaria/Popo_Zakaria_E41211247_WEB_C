<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\DashboardController;

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

//* Default route pada Laravel 9    
// Route::get('/user', [UserController::class, 'index']);
Route::get('halo', function () {
	return "Halo, Selamat datang Popo Zakaria di Laravel 9";
});


//* Route dengan parameter
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::get('blog', function () {
	return view('blog');
});



// Route::get('/user/{name?}', function (string $name = null) {
//     return $name;
// });
 
// Route::get('/user/{name?}', function (string $name = 'John') {
//     return $name;
// });

// * Route dengan passing data mahasiswa
Route::get('blog/mahasiswa',[MahasiswaController::class, 'index'] );

// * Route dengan passing data pegawai dengan mengisi form
Route::get('blog/formulir', [PegawaiController::class, 'formulir']);
Route::post('blog/formulir/proses', [PegawaiController::class, 'proses']);


// * Route dengan Method Where dan Regular Expression
// Route::get('/user/{name}', function (string $name) {
//     // ...
// })->where('name', '[A-Za-z]+');
 
// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->where('id', '[0-9]+');
 
// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//* Route ManagementUserController          
Route::get('/user', [ManagementUserController::class, 'index']);

//* Route HomeController
Route::get('/home', [HomeController::class, 'index']);

//* Route DashboardController
Route::get('/dashboard', [DashboardController::class, 'index']);