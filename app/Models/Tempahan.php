<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempahan extends Model
{
    use HasFactory;

    // Maklumkan kepada model Tempahan nama table yang perlu dihubungi
    protected $table = 'tempahan';

    // Maklumkan kepada model Tempahan data yang dibenarkan masuk ke table tempahan
    protected $fillable = [
        'user_id',
        'jenis_kenderaan',
        'no_kenderaan',
        'nama_pemandu',
        'tarikh_tempahan',
        'tarikh_mula',
        'tarikh_akhir',
        'tujuan',
        'alamat_destinasi',
        'status'
    ];
}
