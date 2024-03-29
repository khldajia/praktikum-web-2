<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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
    return view('admin.dashboard');
});

route:: get ('/dashboard', [DashboardController::class, 'index']);

route:: get ('/produk', [ProdukController::class, 'index']);

// Bikin routing ke halaman depan home
Route::get('/home', [FrontendController::class, 'index']);

// Bikin routing ke halaman depan about
Route::get('/about', [FrontendController::class, 'about']);

// bikin routing ke halaman form tambah data menggunakan create
Route::get('/produk/create', [ProdukController::class, 'create']);

// bikin routing fungsi store 
Route::post('/produk/store', [ProdukController::class, 'store']);

// bikin routing untuk form edit 
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);

// bikin routing untuk validasi data edit update
Route::put('produk/update/{id}', [ProdukController::class, 'update']);

// bikin routing untuk deete data
Route::get('produk/delete/{id}', [ProdukController::class, 'destroy']);








