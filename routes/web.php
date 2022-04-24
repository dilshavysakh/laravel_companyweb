<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
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
    return view('home');
});
Route::get('/employee', [EmployeeController::class,'index']);
Route::get('/create_employee', [EmployeeController::class,'create']);
Route::post('/upload_employee', [EmployeeController::class,'store']);
Route::get('/delete_emp/{id}', [EmployeeController::class,'destroy']);
Route::get('/edit_emp/{id}', [EmployeeController::class,'edit']);
Route::post('/update_employee/{id}', [EmployeeController::class,'update']);

Route::get('/company', [CompanyController::class,'index']);
Route::get('/create_company', [CompanyController::class,'create']);
Route::post('/upload_company', [CompanyController::class,'store']);
Route::get('/delete_company/{id}', [CompanyController::class,'destroy']);
Route::get('/edit_company/{id}', [CompanyController::class,'edit']);
Route::post('/update_company/{id}', [CompanyController::class,'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
