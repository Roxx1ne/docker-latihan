<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('pembayaran');
    }

    public function store(Request $request)
    {
        $pembayaran = Pembayaran::create([
            'nominal' => $request->nominal,
            'id_pembayaran' => $request->id_pembayaran
        ]);

        if ($pembayaran) {
            return redirect('/pembayaran')->with('success', 'Pembayaran berhasil!');
        } else {
            return redirect('/pembayaran')->with('error', 'Pembayaran gagal!');
        }
    }
}
