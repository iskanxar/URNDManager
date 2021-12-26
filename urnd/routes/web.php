<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ManagerController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=> 'auth'], function(){
    Route::resource('projects', ProjectController::class);

    Route::resource('teams', TeamController::class);

    Route::resource('leaders', LeaderController::class);

    Route::resource('staffs', StaffController::class);

    Route::resource('managers', ManagerController::class);
});
