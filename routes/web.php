<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\DonorController;
use App\Http\controllers\HospitalController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\HworkerController;
use App\Http\Controllers\RbloodController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\CashierController;

use App\Http\Controllers\PreportController;
use App\Http\Controllers\BloodtypeController;



use App\Http\Controllers\NotificatioController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('region-data/{region}', [DonorController::class, 'region']);
   
Route::get('district-data/{district}', [DonorController::class, 'district']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/roles',RolesController::class);
Route::resource('/hworker',HworkerController::class);
Route::group(['middleware'=>'auth'],function(){
  
    Route::resource('/blood',BloodController::class); 

    Route::resource('session', SessionController::class);

Route::group(['middleware'=>'roles:1'],function(){
  
    Route::resource('/admin',AdminController::class);
    Route::resource('/user',UserController::class);
   
    Route::resource('/location',OtherController::class);
});
Route::group(['middleware'=>'roles:2'],function(){
    Route::resource('/hospital',HospitalController::class);
    Route::get('/minus/{id}', [BloodtypeController::class, 'minus'])->name('minus');
    
  
    Route::resource('/reblood',RbloodController::class);
    Route::get('/bloodhosp/{type}/{quantity}', [RbloodController::class, 'hospblood']);
    Route::resource('/all',RecordController::class);
    
});
Route::group(['middleware'=>'roles:3'],function(){
    Route::resource('/donor',DonorController::class);
    Route::get('/graph', [BloodtypeController::class, 'index'])->name('graph');

    Route::resource('/report',PreportController::class)->only(['index']);
    

});
    
    Route::resource('/post',PostController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('/user',UserController::class); 
    
    Route::resource('/reception',ReceptionController::class); 
    Route::resource('/cashier',CashierController::class); 

});




