<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\EnseignementController;
use App\Http\Controllers\FiliereController;
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
Route::get('/configData', [EcoleController::class, 'configData']);
Route::post('/config', [EcoleController::class, 'config']);
Route::get('/config_enseignements/{id}', [EcoleController::class, 'configEns']);
Route::get('/ecole', [EcoleController::class, 'home_ecole']);
Route::get('/getEcole/{id}', [EcoleController::class, 'show']);
Route::get('getFormation/{id}', [FiliereController::class, 'getFiliereDetails']);
Route::get('formation', [FiliereController::class, 'formation']);


//Departements-----------------------------------------------------------------------------
Route::get('/departements', [DepartementController::class, 'index']);
Route::get('/details_departement', [DepartementController::class, 'show']);
Route::get('/dept_details/{id}', [DepartementController::class, 'getDetails']);
Route::post('/editNomDpt', [DepartementController::class, 'editNom']);
Route::post('/editDescDpt', [DepartementController::class, 'editDesc']);
Route::get('/add_departement', [DepartementController::class, 'add']);
Route::post('/create_departement', [DepartementController::class, 'save']);
Route::get('/delete_departement/{id}', [DepartementController::class, 'delete']);

//Filieres-----------------------------------------------------------------------------
Route::get('/filieres', [FiliereController::class, 'index']);
Route::get('/details_filiere', [FiliereController::class, 'show']);
Route::get('/filiere_details/{id}', [FiliereController::class, 'getDetails']);
Route::post('/editNomFiliere', [FiliereController::class, 'editNom']);
Route::post('/editDescFiliere', [FiliereController::class, 'editDesc']);
Route::get('/add_filiere', [FiliereController::class, 'add']);
Route::post('/create_filiere', [FiliereController::class, 'save']);
Route::get('/deleteFiliere/{id}', [FiliereController::class, 'delete']);
Route::get('/getFilieres/{ecole_id}', [FiliereController::class, 'getFilieres']);
Route::get('/accreds', [FiliereController::class, 'getAccreds']);
Route::get('/details_activite', [ActiviteController::class, 'show']);
Route::get('/getDetailsActivite/{id}', [ActiviteController::class, 'getDetailsActivite']);
Route::get('/activites', [ActiviteController::class, 'index']);
Route::get('/getActivites/{id}', [ActiviteController::class, 'activites']);



Route::get('/enseignements', [EnseignementController::class, 'cycles']);

Route::get('/configuration', [EnseignementController::class, 'config']);

Route::get('/dData/{id}', [EcoleController::class, 'dDashbord']);

Route::get('/lastEcoles', [EcoleController::class, 'last']);
Route::get('/ecoles', [EcoleController::class, 'ecoles']);
Route::get('/search', [EcoleController::class, 'search']);
