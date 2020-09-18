<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveTableController;


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


//Route::get('/server-table',"LiveTableController@table");
Route::get('/live-table', [LiveTableController::class, 'table'])->name('yajira.live');

Route::match(['post','get'],'/live-edit/{id}/data', [LiveTableController::class, 'edit'])->name('live.display');
//save and edit
Route::match(['post','get'],'/live-save/data', [LiveTableController::class, 'store'])->name('live.save');
//delete
Route::match(['post','get'],'/live-delete/{id}', [LiveTableController::class, 'destroy'])->name('live.delete');
