<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/home', [HomeController::class, "index"]);

Route::get('buying', [BuyController::class, "index"])->name("buying");

Route::get('selling', [SellController::class, "index"])->name("selling");

Route::get('agents', [AgentController::class, "index"])->name("agents");
Route::get('agent-detail', [AgentController::class, "agentDetail"]);
Route::get('about', [CompanyController::class, "index"])->name("about");
Route::get('blog', [CompanyController::class, "blog"])->name("blog");
Route::get('blog-detail', [CompanyController::class, "blogDetail"])->name("blog");
Route::get('join-us', [CompanyController::class, "join"])->name("join");
Route::get('become-realtor', [CompanyController::class, "become"])->name("become");
Route::get('contact', [ContactController::class, "index"])->name("contact");
Route::post('contact', [ContactController::class, "save_contact"]);
Route::get('logout', [LoginController::class, "logout"]);

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

