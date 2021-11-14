<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/training', [TrainingController::class, 'index'])->name('traininglist');
Route::get('/training/add', [TrainingController::class, 'add'])->name('addtraining')->middleware('auth');
Route::post('/training/add', [TrainingController::class, 'store'])->name('storetraining')->middleware('auth');
Route::get('/training/{id}', [TrainingController::class, 'detail'])->name('detail');
//Route::post('/training/{id}/modifier', [TrainingController::class, 'update'])->name('updatetraining');
Route::get('/update/training/{id?}', [TrainingController::class, 'udpdateview'])->middleware('auth');
Route::put('/update/training/{id?}/modifier', [TrainingController::class, 'udpdate'])->name('update')->middleware('auth');


require __DIR__.'/auth.php';
