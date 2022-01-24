<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamedevController;

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

Route::get('/', [GamedevController::class, 'index']);

Route::get('/reportBugs/create', [GamedevController::class, 'create']);

Route::get('/noticias/forum', [GamedevController::class, 'forum']);

Route::get('/contatos/contact', [GamedevController::class, 'contact']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
