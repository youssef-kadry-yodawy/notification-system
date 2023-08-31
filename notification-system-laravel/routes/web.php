<?php

use App\Http\Controllers\NotificationController;
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

Route::get('/amogos', function () {
    return "amogomogos";
});

Route::get('schedule_notifications/csv', [NotificationController::class, 'store_csv']);

Route::get('export_excel', [NotificationController::class, 'export_excel']);
Route::post('import_excel', [NotificationController::class, 'import_excel']);