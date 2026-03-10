<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Kolom yang boleh diisi secara massal.
     * Ini memberikan perlindungan ekstra pada database SQL Server kamu.
     */
    protected $fillable = [
        'title',
        'description',
        'link',
    ];
}