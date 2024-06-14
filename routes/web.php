<?php

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
    return view('welcome');
});
//export route
Route::get('/exports/users', [App\Http\Controllers\ExcelController::class, 'export']);
//-------------------------------------------------------------------------------------
// import route
Route::view('/imports', 'myView.import');
Route::post('/imports/users', [App\Http\Controllers\ExcelController::class, 'import']);
//---------------------------------------------------------------------------------------
//pdf route
Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'viewPdf']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
