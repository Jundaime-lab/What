<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterBuku extends Model
{
    // 1. Beritahu Laravel nama tabel aslinya
    protected $table = 'TMasterbuku';

    // 2. Beritahu Laravel Primary Key-nya bukan 'id'
    protected $primaryKey = 'IDBuku';

    // 3. Karena IDBuku Anda berisi string (seperti "1", "9306"), matikan auto-increment
    public $incrementing = false;
    protected $keyType = 'string';

    // 4. Matikan pencatatan waktu otomatis (created_at/updated_at)
    public $timestamps = false;

    // 5. Izinkan semua kolom diisi (Mass Assignment)
    protected $guarded = [];
}