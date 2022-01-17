<?php


use App\Http\Controllers\Admin\ResigterController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContractorFormApplication;
use App\Http\Controllers\Admin\ClassDevelopApp;
use App\Http\Controllers\Admin\AffidavitController;
use App\Http\Controllers\Admin\RenewalController;
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


	// Profile Route are here .....

	Route::get('/register',[ResigterController::class,'create'])->name('register.create');

	Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');

	Route::put('/update/{id}', [ProfileController::class,'update'])->name('profile.update');

	Route::put('/update-password/{id}', [ProfileController::class,'password'])->name('password.update');
	
	Route::put('/update-institution/{id}', [ProfileController::class,'institution'])->name('institution.update');


	Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');


	// Institution Application Route are here ...

	Route::get('/application',[ContractorFormApplication::class,'index'])->name('application_form'); 

	Route::get('/application-create', [ContractorFormApplication::class,'create'])->name('application.create');

	Route::post('/application-store',[ContractorFormApplication::class,'store'])->name('application.store');

	Route::get('/application-edit', [ContractorFormApplication::class,'edit'])->name('application.edit');

	Route::put('/application-update/{id}', [ContractorFormApplication::class,'update'])->name('application.update');


	// Affidavit Route Are here ...

	Route::get('/affidavit', [AffidavitController::class,'index'])->name('affidavit.index');

	Route::get('/affidavit-create', [AffidavitController::class,'create'])->name('affidavit.create');

	Route::post('/affidavit-store', [AffidavitController::class,'store'])->name('affidavit.store');

	Route::get('/affidavit-show', [AffidavitController::class,'show'])->name('affidavit.show');




	Route::get('/class-app-create', [ClassDevelopApp::class,'create'])->name('class_app.create');


	Route::get('/renewal-create', [RenewalController::class,'create'])->name('renewal.create');





});
