<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;



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

Route::get('/home', function () {
    session_start();
    return view('home', [
        'token' => $_SESSION["token"]
    ]);
});

Route::get('/', function () {
    return view('login');
});

Route::get('/mitra-ikal', [Controller::class, 'mitra']);
Route::get('/register', [Controller::class, 'register']);

Route::get('/tentang', function () {
    session_start();
    return view('tentang',[
        'token' => $_SESSION["token"]
    ]);
});

Route::get('/new_loker', function () {
    session_start();
    return view('new_loker', [
        'token' => $_SESSION["token"]
    ]);
});
