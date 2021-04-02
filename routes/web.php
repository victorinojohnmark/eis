<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PersonalDetailController;

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
    // return view('welcome');
    return redirect()->route('login');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('home', 'DashboardController@index');
    Route::get('dashboard', 'DashboardController@index');
    // Route::get('personal_details', 'PersonalDetailController@index');
    Route::resource('personal_details', PersonalDetailController::class);





});
