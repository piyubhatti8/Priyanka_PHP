<?php
use App\Http\Controllers\countriesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\city_controller;


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
Route::get('/view_country',[countriesController::class,'sel_countries']);

Route::get('/city',[city_controller::class,'index']);