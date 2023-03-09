<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get("/users",[AdminController::class,'user']);
Route::get("/delete_user/{id}",[AdminController::class,'delete_user']);
Route::get("/foodmenu",[AdminController::class,'foodmenu']);
Route::post("/uploadfood",[AdminController::class,'uploadfood']);
Route::get("/delete_food/{id}",[AdminController::class,'delete_food']);
Route::get("/update_food/{id}",[AdminController::class,'update_food']);
Route::post("/updatefood/{id}",[AdminController::class,'updatefood']);
Route::post("reservation",[AdminController::class,'reservation']);
Route::get("/viewreservation",[AdminController::class,'viewreservation']);
Route::get("/viewchef",[AdminController::class,'viewchef']);
Route::post("/uploadchef",[AdminController::class,'uploadchef']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
