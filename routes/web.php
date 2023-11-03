<?php

// 6706220050 - Ahmad Faza Alfarisi

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route User
    Route::name('user.')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('daftarPengguna');
        Route::get('/userRegistration', [UserController::class, 'create'])->name('registrasi');
        Route::post('/userStore', [UserController::class, 'store'])->name('storePengguna');
        Route::get('/userView/{user} ', [UserController::class, 'show'])->name('infoPengguna');
        Route::get('/userEdit/{user} ', [UserController::class, 'edit'])->name('editPengguna');
        Route::post('/userUpdate', [UserController::class, 'update'])->name('updatePengguna');
        Route::get('/getAllUsers', [
            UserController::class,
            'getAllUsers'
        ]);
    });

    // Route Koleksi
    Route::name('koleksi.')->group(function () {
        Route::get('/koleksi', [CollectionController::class, 'index'])->name('daftarKoleksi');
        Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('registrasi');
        Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('storeKoleksi');
        Route::get('/koleksiView/{collection} ', [CollectionController::class, 'show'])->name('infoKoleksi');
        Route::get('koleksiEdit/{collection}', [CollectionController::class, 'edit'])->name('editKoleksi');
        Route::post('koleksiUpdate', [CollectionController::class, 'update'])->name('updateKoleksi');
        Route::get('/getAllCollections', [
            CollectionController::class,
            'getAllCollections'
        ]);
    });

    // Route Transaksi
    Route::name('transaction.')->group(function () {
        Route::get('/transaksi',[TransactionController::class, 'index'])->name('daftarTransaksi');
        Route::get('/transaksiTambah',[TransactionController::class, 'create'])->name('transaksiTambah');
        Route::post('/transaksiStore',[TransactionController::class, 'store']);
        Route::get('/transaksiView/{transaction}',[TransactionController::class, 'show']);
        Route::post('/detailTransactionUpdate', [DetailTransactionController::class, 'update'])->name('transaksiView');
        Route::post('/transaksiView/{transaction}', [TransactionController::class, 'show'])->name('');
        Route::get('/getAllTransactions', [
            TransactionController::class,
            'getAllTransactions'
        ]);
    });

    // Route Detail Transaksi
    Route::name('detailTransaction')->group(function () {
        Route::get('/detailTransactionKembalikan/{detailTransactionId}', [DetailTransactionController::class, 'detailTransactionKembalikan'])->name('detailTransactionKembalian');

        Route::get('/getAllDetailTransactions/{transactionId}', [DetailTransactionController::class, 'getAllDetailTransactions']);
    });
});


require __DIR__ . '/auth.php';
