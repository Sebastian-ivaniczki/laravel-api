<?php

use App\Http\Controllers\Api\ProjectController;
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


// route to project api 

Route::get('/projects', [ProjectController::class, 'index']);

//rotta per il dettaglio del project

Route::get('/projects/{project}', [ProjectController::class, 'show']);
