<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes(
    // ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
//


// Route::get('/brand', function () {
//     return view('brand');
// });

use App\Http\Controllers\UserController;
Route::group(['prefix' => 'admin'], function(){
    Route::resource('user', UserController::class);
});

Route::get('/', function () {
     return view('layouts.backend');
 });

Route::get('data', function () {
    return view('data');
});
