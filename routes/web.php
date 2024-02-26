<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Pipeline\Hub;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('siswa/{id}', [SiswaController::class, 'detail']);

Route::resource('siswa', SiswaController::class);

// Route::get('/', [HalamanController::class, 'index']);
// Route::get('/tentang', [HalamanController::class, 'tantang']);
// Route::get('/kontak', [HalamanController::class, 'kontak']);

// Route::resource('siswa', SiswaController::class);
// Route::get('/sesi', [SessionController::class, 'index']);
// Route::post('/sesi/login', [SessionController::class, 'login']);

