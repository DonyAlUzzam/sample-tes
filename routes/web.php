<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('/', [ApiController::class, 'getAllData'])->name('getAllData');
Route::get('data/data-detail/{id}', [ApiController::class, 'getDetailData'])->name('getDetailData');
Route::get('/load-more-page', [ApiController::class, 'getAllDataMore'])->name('getAllDataMore');

// Route::resource('Auth', 'AuthController');
