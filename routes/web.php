<?php

use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\HomeController;
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

Route::namespace("Site")->group(function ()  {
    Route::get("/", [HomeController::class, "index"]);

    Route::get("produtos", [CategoryController::class, "index"]);
    Route::get("produtos/{slug}", [CategoryController::class, "show"]);
});
