<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/q1',[QuizController::class, 'Q1']);
Route::get('/reguser', [QuizController::class, 'RegUser'])->name('userreg');
Route::post('/userreg', [QuizController::class, 'UserReg'])->name('Userreg');
Route::get('/post', [QuizController::class, 'Posts']);
Route::post('/publishpost', [QuizController::class, 'PublishPost'])->name('publishpost');
