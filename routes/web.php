<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukutamuController;
use App\Models\About;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/about', function () {
//     return view('back.about');
// });
// Route::get('/setting-update', function () {
//     return view('back.setting-update');
// });
Route::match(['get', 'post'], '/', [BukutamuController::class, 'store']);
// Route::get('/admin', function () {
//     return view('back.index');
// });

// Route::get('/admin', [BukutamuController::class, 'index']);
Route::get('/admin/cari', [BukutamuController::class, 'cari']);
Route::get('/admin/delete/{id}', [BukutamuController::class, 'destroy']);
Route::match(['get', 'post'], '/admin/update/{id}', [BukutamuController::class, 'update']);
Route::match(['get', 'post'], '/about/update/{id}', [AboutController::class, 'update']);
Route::get('/dashboard', function () {
    return view('back.layout.dashboard');
});
// Route::get('/login', function () {
//     return view('back.login');
// });
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', BukutamuController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', BukutamuController::class);
    });
});

// Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/', [AboutController::class, 'show'])->name('/');
// Route::get('/{id}/edit', [AboutController::class, 'edit'])->name('edit');
// Route::put('/{id}', [AboutController::class, 'update'])->name('update');
// Route::match(['get', 'post'], '/admin/setting/update/{id}', [AboutController::class, 'update']);






// Route::get('/back/bukutamu/delete/{id}',[TamuController::class,'destroy']);
// Route::match(['get','post'],'/back/bukutamu/update/{id}',[TamuController::class,'update']);

// Route::match(['get','post'],'/',[TamuController::class,'store']);