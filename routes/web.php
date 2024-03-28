<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;


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

Route::get('/', function () {
    return view('welcome');
});

//Traditional:
// Route::get('/users','App\Http\Controllers\UserController@index');

//Modern: ----- UserController namespace is imported using use at the top.
Route::get('/users',[UserController::class, 'index']);

Route::get('/colleges',[CollegeController::class, 'index']);

Route::get('/colleges/create',[CollegeController::class, 'create']);

Route::get('/portfolio',[PortfolioController::class, 'index']);

Route::get('/students/create',[StudentController::class, 'create']);

Route::post('/students/create',[StudentController::class, 'store']);

Route::get('/employees/create', [EmployeeController::class, 'create']);

Route::post('/employees/create', [EmployeeController::class, 'add']);

Route::get('/companies/index', [CompanyController::class, 'index'])->name('companies.index');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');

Route::post('/companies/create', [CompanyController::class, 'store']);

Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('companies.edit');

Route::put('/companies/{id}/update', [CompanyController::class, 'update'])->name('companies.update');

Route::delete('/companies/{id}/delete', [CompanyController::class, 'delete'])->name('companies.delete');
