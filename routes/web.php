<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;



Route::prefix('admin')
    ->middleware(['auth', 'agen'])
    ->group(function () {

        // Route::get('/', [DashboardController::class, 'index'])
        //     // DashboardControoler@index =namacontroller@method
        //     ->name('dashboard');
        // Route::resource('wisata-package', WisataPackageController::class);
        // Route::resource('gallery', GalleryController::class);

        
Route::get('/check', [AdminController::class, 'create'])->name('kehadiran.create');
// Route::get('/kehadiran', [AdminController::class, 'create'])->name('kehadiran.index');
Route::post('/check-ticket', [AdminController::class, 'checkTicket'])->name('kehadiran.checkTicket');
Route::get('/report', [AdminController::class, 'show'])->name('admin.show');
Route::get('/list', [AdminController::class, 'index'])->name('admin.index');


    });

Route::get('/', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/store', [TicketController::class, 'store'])->name('ticket.store');

// Route::get('/admin/check', [AdminController::class, 'create'])->name('kehadiran.create');
// // Route::get('/kehadiran', [AdminController::class, 'create'])->name('kehadiran.index');
// Route::post('/kehadiran/check-ticket', [AdminController::class, 'checkTicket'])->name('kehadiran.checkTicket');


// Route::get('/admin/chek', [AdminController::class, 'index']);

// Route::post('/check/check-ticket', [KehadiraneController::class, 'checkTicket'])->name('kehadiran.checkTicket');

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

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
