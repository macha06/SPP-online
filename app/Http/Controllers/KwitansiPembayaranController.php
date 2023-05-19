<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class KwitansiPembayaranController extends Controller
{
    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $data ['pembayaran'] = $pembayaran;
        return view('admin.kwitansi_pembayaran', $data);
    }
}
