<?php
use App\Http\Controllers\QueueController;
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

Route::get('/', [QueueController::class,'index'])->name('index');;

Route::post('/Create',  [QueueController::class, 'create'])->name('create');

Route::post('/destroy/{id}', [QueueController::class,'destroy'])->name('destroy');

Route::get('/Admin/{id}', [QueueController::class,'Admin'])->middleware(['auth'])->name('admin');
Route::get('/Admin', [QueueController::class,'Admin'])->middleware(['auth']);
Route::post('/Admindestroy/{id}', [QueueController::class,'Admindestroy'])->middleware(['auth'])->name('Admindestroy');


require __DIR__.'/auth.php';
