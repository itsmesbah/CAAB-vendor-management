<?php


use App\Http\Controllers\Admin\ResigterController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContractorFormApplication;
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
	return view('admin.login');
});














Route::post('/register-store',[ResigterController::class,'store'])->name('register.store');

Route::post('/login-check',[LoginController::class,'check'])->name('login.check');

Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('/login',[LoginController::class,'create'])->name('login.create'); 



Route::group(['middleware'=>['AuthCheck']], function(){



	Route::get('/register',[ResigterController::class,'create'])->name('register.create');

	Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');

	Route::put('/update/{id}', [ProfileController::class,'update'])->name('profile.update');

	Route::put('/update-password/{id}', [ProfileController::class,'password'])->name('password.update');


	Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');


Route::get('/contractor-form-application',[ContractorFormApplication::class,'create'])->name('contractor.form.application'); 

Route::post('/application-store',[ContractorFormApplication::class,'store'])->name('application.store');




});
