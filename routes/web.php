<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\GatesController;
use App\Http\Controllers\PagesController;
  
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
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/detailalbum{album}', [PagesController::class, 'detailalbum'])->name('detailalbum');
Route::get('/login', function () {return view('loginn');});
Route::get('/panduan', function () {return view('panduan');});
Route::get('/pembayaran', function () {return view('pembayaran');});
Route::get('/pbatal', function () {return view('pbatal');});
Route::get('/pregistrasi', function () {return view('/pregistrasi');});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [GatesController::class, 'home'])->name('home');
    Route::post('/ordernow', [GatesController::class, 'ordernow'])->name('ordernow');
    Route::get('/rOrder', [GatesController::class, 'rOrder'])->name('rOrder');
    Route::get('/payment{id}', [GatesController::class, 'payment'])->name('payment');
    Route::get('/editOrder{id}', [GatesController::class, 'editOrder'])->name('editOrder');
    Route::post('/paynow', [PagesController::class, 'paynow'])->name('paynow');
    Route::post('/uporder', [GatesController::class, 'uporder'])->name('uporder');
    Route::get('/hapusorder{id}', [GatesController::class, 'hapusorder'])->name('hapusorder');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/approved{id}', [PagesController::class, 'approved'])->name('approved');
    Route::get('/cancelled{id}', [PagesController::class, 'cancelled'])->name('cancelled');
    Route::post('/updateproduct', [GatesController::class, 'updateproduct'])->name('updateproduct');
    Route::get('/adminhome', [GatesController::class, 'adminHome'])->name('admin.home');
    Route::get('/album', [GatesController::class, 'album'])->name('album');
    Route::get('/foto', [GatesController::class, 'foto'])->name('foto');
    Route::get('/createalbum', [GatesController::class, 'createalbum'])->name('createalbum');
    Route::get('/addfoto{album}', [GatesController::class, 'addfoto'])->name('addfoto');
    Route::get('/dashboard', [GatesController::class, 'dashboard'])->name('dashboard');
    Route::post('/savealbums', [PagesController::class, 'savealbums'])->name('savealbums');
    Route::post('/savephotos', [PagesController::class, 'savephotos'])->name('savephotos');
    Route::get('/dphoto{album}', [PagesController::class, 'dphoto'])->name('dphoto');
    Route::get('/dalbum{album}', [PagesController::class, 'dalbum'])->name('dalbum');
    Route::get('/edit{album}', [PagesController::class, 'edit'])->name('edit');
    Route::post('/update', [PagesController::class, 'update'])->name('update');
    Route::get('/pesanan', [PagesController::class, 'pesanan'])->name('pesanan');
    
});
