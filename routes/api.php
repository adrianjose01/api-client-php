<?php

use App\Http\Controllers\ClientController;
use App\Models\Client;
use App\Models\ErrorResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('clients',[ClientController::class, "index"]);

Route::get('clients/{id}',[ClientController::class, "findOne"]);

Route::post('clients', [ClientController::class, "store"]);

Route::put('clients/{id}', [ClientController::class, "update"]);

Route::delete("/clients/{id}",[ClientController::class, 'destroy']);