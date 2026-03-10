<?php

namespace App\Http\Controllers;

use App\Models\MasterBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('q');

        // Query dasar
        $query = \App\Models\MasterBuku::query();

        // Terapkan filter pencarian jika ada
        if ($cari) {
            $query->where(function ($q) use ($cari) {
                $q->where('JudulBuku', 'LIKE', '%' . $cari . '%');
                if (is_numeric($cari)) {
                    $q->orWhere('IDBuku', $cari);
                }
            });
        }

        // --- HITUNG STATISTIK ---
        // Kita clone query agar tidak terpengaruh pagination
        $stats = (clone $query)->selectRaw('
        SUM(CAST(TotalStock AS BIGINT)) as total_stok,
        SUM(CAST(TotalStock AS BIGINT) * CAST(Harga AS BIGINT)) as total_aset,
        COUNT(*) as total_judul
    ')->first();

        // Jalankan Pagination
        $semuaBuku = $query->paginate(50)->withQueryString();

        return view('daftar_buku', compact('semuaBuku', 'cari', 'stats'));
    }
}