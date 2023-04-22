<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PermisionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Models\Client;
use App\Models\Organization;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.SideBar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// users routers define
Route::group(['prefix' => 'user'], function () {
    Route::get('/create', [UserController::class, 'users_create']);
    Route::post('/create', [UserController::class, 'create']);
    Route::get('/data', [UserController::class, 'store']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/edit/{id}', [UserController::class, 'update']);
    Route::get('/destroy/{id}', [UserController::class, 'destroy']);
    Route::get('/export', [UserController::class, 'export_user']);
});
// client routes define
Route::group(['prefix' => 'client'], function () {
    Route::get('/create', [ClientController::class, 'client_create']);
    Route::post('/create', [ClientController::class, 'create']);
    Route::get('/data', [ClientController::class, 'store']);
    Route::get('/destroy/{id}', [ClientController::class, 'destroy']);
});

// permision routes define 

Route::group(['prefix' => 'permision'], function () {
    Route::get('/create', [PermisionController::class, 'create_permision']);
    Route::post('/create', [PermisionController::class, 'create']);
    Route::get('/data', [PermisionController::class, 'store']);
});

// oraganzition route define 
Route::group(['prefix' => 'organzition'], function () {
    Route::get('/create', [OrganizationController::class, 'index']);
    Route::post('/create', [OrganizationController::class, 'organization_create']);
    Route::get('/data', [OrganizationController::class, 'store']);
    Route::get('/edit/{id}', [OrganizationController::class, 'edit']);
    Route::post('/edit/{id}', [OrganizationController::class, 'update']);
    Route::get('/delete/{id}', [OrganizationController::class, 'destory']);
});

// project routes define
Route::group(['prefix' => 'project'], function () {
    Route::get('/create', [ProjectController::class, 'index']);
    Route::post('/create', [ProjectController::class, 'organization_create']);
    Route::get('/data', [ProjectController::class, 'store'])->name('project.data');
    Route::get('/delete/{id}', [ProjectController::class, 'destory']);
});

// 
// Route::group(['prefix' => 'project'], function () {
//     Route::get('/create', [ProjectController::class, 'index']);
//     Route::post('/create', [ProjectController::class, 'organization_create']);
//     Route::get('/data', [ProjectController::class, 'store']);
// });

// task routes define 
Route::group(['prefix' => 'task'], function () {
    Route::get('/create', [TaskController::class, 'index']);
    Route::post('/create', [TaskController::class, 'task_create']);
    Route::get('/data', [TaskController::class, 'store']);
});
