<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DepartmentsController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//___________________Customers Routes_________________________________

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/customers/create', [CustomerController::class, 'create']);

Route::post('/customers', [CustomerController::class, 'store']);

Route::get('/customers/{id}', [CustomerController::class, 'show']);

Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);

Route::put('/customers/{id}', [CustomerController::class, 'update']);

Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);

//________________________________________________________________________

//___________________Employees Routes_________________________________
Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/create', [EmployeeController::class, 'create']);

Route::post('/employees', [EmployeeController::class, 'store']);

Route::get('/employees/{id}', [EmployeeController::class, 'show']);

Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);

Route::put('/employees/{id}', [EmployeeController::class, 'update']);

Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
//________________________________________________________________________

//___________________Tickets Routes_________________________________
Route::get('/tickets', [TicketController::class, 'index']);

Route::get('/tickets/create', [TicketController::class, 'create']);

Route::post('/tickets', [TicketController::class, 'store']);

Route::get('/tickets/{id}', [TicketController::class, 'show']);

Route::get('/tickets/{id}/edit', [TicketController::class, 'edit']);

Route::put('/tickets/{id}', [TicketController::class, 'update']);
//______________________________________________________________________

//___________________Tickets Routes_________________________________
Route::post('/tickets/{id}', [TicketController::class, 'store_comment']);
//______________________________________________________________________

//___________________Users Routes_________________________________
Route::get('/users', [UsersController::class, 'index']);

Route::get('/users/create', [UsersController::class, 'create']);

Route::post('/users', [UsersController::class, 'store']);

Route::get('/users/{id}', [UsersController::class, 'show']);

Route::get('/users/{id}/edit', [UsersController::class, 'edit']);

Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);
//______________________________________________________________________

//___________________Statuses Routes_________________________________
Route::get('/statuses', [StatusController::class, 'index']);

Route::get('/statuses/create', [StatusController::class, 'create']);

Route::post('/statuses', [StatusController::class, 'store']);

Route::get('/statuses/{id}', [StatusController::class, 'show']);

Route::get('/statuses/{id}/edit', [StatusController::class, 'edit']);

Route::put('/statuses/{id}', [StatusController::class, 'update']);
//______________________________________________________________________

//___________________Cities Routes_________________________________
Route::get('/cities', [CitiesController::class, 'index']);

Route::get('/cities/create', [CitiesController::class, 'create']);

Route::post('/cities', [CitiesController::class, 'store']);

Route::get('/cities/{id}', [CitiesController::class, 'show']);

Route::get('/cities/{id}/edit', [CitiesController::class, 'edit']);

Route::put('/cities/{id}', [CitiesController::class, 'update']);
//______________________________________________________________________

//___________________Departments Routes_________________________________
Route::get('/departments', [DepartmentsController::class, 'index']);

Route::get('/departments/create', [DepartmentsController::class, 'create']);

Route::post('/departments', [DepartmentsController::class, 'store']);

Route::get('/departments/{id}', [DepartmentsController::class, 'show']);

Route::get('/departments/{id}/edit', [DepartmentsController::class, 'edit']);

Route::put('/departments/{id}', [DepartmentsController::class, 'update']);
//______________________________________________________________________

//___________________Categories Routes_________________________________
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);

Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

//______________________________________________________________________
