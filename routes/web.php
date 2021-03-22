<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;

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

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/',[HomeController::class, 'show'])->name('home');

// Route::get('/message',[MessageController::class, 'index'])->name('message');
Route::post('/message',[MessageController::class, 'messageStore'])->name('message');

Route::get('/admin',[AdminController::class, 'show']);
// Route::get('/adminshow',[AdminController::class, 'show']);

Route::get('/family-visa', function () {
    return view('visas.family');
})->name('family');

Route::get('/student-visa', function () {
    return view('visas.student');
})->name('student');

Route::get('/business-visa', function () {
    return view('visas.business');
})->name('business');

Route::get('/working-visa', function () {
    return view('visas.working');
})->name('working');

Route::get('/travel-visa', function () {
    return view('visas.travel');
})->name('travel');

Route::get('/dependent-visa', function () {
    return view('visas.dependent');
})->name('dependent');


Route::get('/about', function () {
    return view('navs.about');
})->name('moreabout');

Route::get('/news', function () {
    return view('navs.news');
})->name('news');

Route::get('/problems', function () {
    return view('navs.problems');
})->name('problems');

// For admin 

Route::post('/adminadd', [AdminController::class, 'storeImages'])->name('adminadd');
Route::get('dltimage/{id}', [AdminController::class, 'destroyImg'])->name('dltimage');

Route::get('/adminDisplay', [AdminController::class, 'adminShow'])->name('adminDisplay');

// Route::get('/adminDisplay', [AboutController::class, 'showAbout'])->name('showAbout');
Route::post('/adminDisplay', [AboutController::class, 'storeAbout'])->name('aboutEdit');

Route::get('Edit/{id}', [AboutController::class, 'displayEdit'])->name('Edit');
Route::get('delete/{id}',[AboutController::class, 'destroy'])->name('delete');

Route::post('update/{id}',[AboutController::class, 'updateAbout'])->name('update');

Route::post('/editVisa', [VisaController::class, 'storeVisa'])->name('editVisa');
