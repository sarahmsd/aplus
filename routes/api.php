<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\EnseignementController;
use App\Http\Controllers\UserController;
use App\Models\Enseignement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/users', [UserController::class, 'users']);
Route::get('/dashboard', [EcoleController::class, 'dashbord']);
Route::get('/departements', [DepartementController::class, 'index']);
Route::get('/details_departements', [DepartementController::class, 'show']);
Route::get('/add_departement', [DepartementController::class, 'add']);

Route::get('/enseignements', [EnseignementController::class, 'cycles']);

Route::get('/configuration', [EnseignementController::class, 'config']);

Route::get('/dData', function () {
    return response()->json([
        'ecole' => auth(),        
    ]);
});

Route::get('/lastEcoles', [EcoleController::class, 'last']);
Route::get('/ecoles', [EcoleController::class, 'ecoles']);
Route::get('/search', [EcoleController::class, 'search']);