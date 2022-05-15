<?php

use App\Http\Controllers\EmployeesController;
use App\Models\Employee;
use App\Models\Employees;
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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        'name' => 'John Doe',
        'email' => "nasruddin@gmai.com",
        "image" => "https://images.unsplash.com/photo-1646673618973-13d04121d25f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIwfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
    ]);
});

Route::get('/join', function () {
    return view('Join',[
        "title" => "Join",
    ]);
});

Route::get('pegawai', [EmployeesController::class, 'index'])->name('pegawai');

Route::get('tambahpegawai', [EmployeesController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('insertdata', [EmployeesController::class, 'insertdata'])->name('insertdata');

Route::get('tampilkandata/{id}', [EmployeesController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('updatedata/{id}', [EmployeesController::class, 'updatedata'])->name('updatedata');

Route::get('delete/{id}', [EmployeesController::class, 'delete'])->name('delete');
