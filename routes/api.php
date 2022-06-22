<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AlumniController;
use App\Http\Controllers\API\PartnerController;
use App\Http\Controllers\API\JobsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {

    Route::get('/alumni/list', [AlumniController::class, 'alumni_list']);
    Route::get('/alumni/detail', [AlumniController::class, 'alumni_detail']);
    Route::post('/alumni/store', [AlumniController::class, 'alumni_add']);
    Route::put('/alumni/update', [AlumniController::class, 'alumni_update']);
    Route::delete('/alumni/destroy', [AlumniController::class, 'alumni_destroy']);

    Route::get('/partner/list', [PartnerController::class, 'list']);
    Route::post('/partner/store', [PartnerController::class, 'store']);
    Route::post('/partner/update', [PartnerController::class, 'update']);
    Route::get('/partner/detail', [PartnerController::class, 'show']);
    Route::delete('/partner/destroy', [PartnerController::class, 'destroy']);

    Route::post('/job/add', [JobsController::class, 'store']);
    Route::put('/job/update', [JobsController::class, 'update']);
    Route::get('/job/list', [JobsController::class, 'list']);
    Route::get('/job/detail', [JobsController::class, 'detail']);
    Route::delete('/job/destroy', [JobsController::class, 'destroy']);
    
    Route::post('/logout', [AuthController::class, 'logout']);
    
});