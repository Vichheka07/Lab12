<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::fallback(function(){
    return "<h1>Sorry, the page you are looking for is not exist.</h1>";
});

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('contacts')->name('vichheka.')->group(function(){
    Route::get('/', [ContactController::class,'index'])->name('contacts.index');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::get('/{id}', [ContactController::class, 'show'])->name('contacts.show');
    Route::post('/store',[ContactController::class, 'store'])->name('store');
    Route::get('/{id}/edit',[ContactController::class, 'edit'])->name('edit');
    Route::put('/{id}',[ContactController::class, 'update'])->name('update');
    Route::delete('/{id}',[ContactController::class, 'destroy'])->name('destroy');
});

?>
