<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyController;

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

Route::get('/', [HomeController::class, "index"]);

Route::get('buying', [BuyController::class, "index"]);
// Route::get('logout', [LoginController::class, "logout"]);

// Route::get('login', [shipmentController::class, 'login'])->name("login");
// Route::get('register', [shipmentController::class, 'register'])->name("register");
Auth::routes();

Route::group(['middleware' => ['auth']], function(){

    // Route::get('/dashboard', [shipmentController::class, 'dashboard'])->name("dashboard");
    // Route::get('/shipment', [shipmentController::class, 'index'])->name("index");
    // Route::post('/get-port-code', [shipmentController::class, 'getPortCode'])->name("getPortCode");
    // Route::post('/get-state', [shipmentController::class, 'getState'])->name("getState");
    // Route::post('/checkAirwayBill', [shipmentController::class, 'checkAirwayBill'])->name("checkAirwayBill");
    // Route::post('/save-step-1', [shipmentController::class, 'saveStep1'])->name("saveStep1");
    // Route::post('/get-profile1', [shipmentController::class, 'getProfile1'])->name("getProfile1");
});

