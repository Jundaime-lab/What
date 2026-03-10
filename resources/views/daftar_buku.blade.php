<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Alinea 2026 - Master Buku</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #f4f4f4;
        }

        .pagination-wrapper {
            margin-top: 20px;
        }

        /* CSS sederhana untuk merapikan pagination jika tidak pakai Bootstrap */
        nav svg {
            width: 20px;
        }

        nav div {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .summary-container {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            flex: 1;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.05);
        }

        .card h3 {
            margin: 0;
            font-size: 14px;
            color: #666;
            text-transform: uppercase;
        }

        .card p {
            margin: 10px 0 0;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

    <h1>Daftar Buku Alinea ({{ $semuaBuku->total() }} Data)</h1>

    <form action="/buku" method="GET"
        style="margin-bottom: 20px; background: #f9f9f9; padding: 15px; border-radius: 5px;">
        <input type="text" name="q" value="{{ $cari ?? '' }}" placeholder="Cari judul atau ID buku..."
            style="width: 350px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        <button type="submit" style="padding: 8px 15px; cursor: pointer;">Cari Data</button>
        <a href="/buku" style="margin-left: 10px; text-decoration: none; color: #666;">Reset</a>
    </form>

    @if ($cari)
        <p>Menampilkan hasil pencarian untuk: <strong>{{ $cari }}</strong> (Ditemukan {{ $semuaBuku->total() }}
            data)</p>
    @endif

    <div class="summary-container">
        <div class="card">
            <h3>Total Judul Buku</h3>
            <p>{{ number_format($stats->total_judul) }}</p>
        </div>
        <div class="card">
            <h3>Total Stok Fisik</h3>
            <p>{{ number_format($stats->total_stok) }}</p>
        </div>
        <div class="card" style="border-left: 5px solid #28a745;">
            <h3>Total Nilai Aset</h3>
            <p>Rp {{ number_format($stats->total_aset) }}</p>
        </div>
    </div>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($semuaBuku as $buku)
                <tr>
                    <td style="text-align: center;">{{ $buku->IDBuku }}</td>
                    <td>{{ $buku->JudulBuku }}</td>
                    <td style="text-align: right;">Rp {{ number_format($buku->Harga) }}</td>
                    <td style="text-align: center; color: {{ $buku->TotalStock < 0 ? 'red' : 'black' }};">
                        {{ $buku->TotalStock }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Data tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination-wrapper">
        {{ $semuaBuku->links() }}
    </div>

</body>

</html>
