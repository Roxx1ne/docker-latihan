<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::post('/pembayaran', [PembayaranController::class, 'store']);

Route::get('/pembayaran', function () {
    return view('pembayaran');
});


Route::post('/pembayaran', function (Request $request) {
    $pembayaran = Pembayaran::create([
        'nominal' => $request->nominal,
        'id_pembayaran' => $request->id_pembayaran

    ]);

    if ($pembayaran) {
        return redirect('/pembayaran')->with('success', 'Pembayaran berhasil!');
    } else {
        return redirect('/pembayaran')->with('error', 'Pembayaran gagal!');
    }
});
