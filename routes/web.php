<?php

use App\Http\Controllers\BookingController;
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

Route::get('/dashboard', function () {
    return redirect('/trips');
})->middleware(['auth']);

Route::get('/trips', [BookingController::class, 'trips'])->middleware('auth');

Route::post('/trips/{trip}/book', [BookingController::class, 'bookTrip'])->middleware('auth');

require __DIR__.'/auth.php';
