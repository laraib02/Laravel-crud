<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Coustomers;
use App\Http\Controllers\InsertController;
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
Route::get('demo' , [WebController::class, 'index']);
Route::get('single', SingleActionController::class );
Route::resource('photo', PhotoController::class);
Route::get('form', [RegistrationController::class, 'index']);
Route::post('form', [RegistrationController::class, 'register']);
Route::get('coustomers' , function (){
    $coustomers =  Coustomers::all();
    echo "<pre>";
    print_r($coustomers->toArray());
});
Route::get('insert' , [InsertController::class, 'insert']);
Route::post('insert' , [InsertController::class, 'insert_form']);
Route::get('insert/view' , [InsertController::class, 'view']);
Route::post('insert' , [InsertController::class, 'store']);
Route::get('delete/{id}',[InsertController::class, 'trash'])->name('admin.delete');
Route::get('edit/{id}',[InsertController::class, 'edit'])->name('admin.edit');

// update route use always post 

Route::post('update/{id}',[InsertController::class, 'update'])->name('admin.update');
