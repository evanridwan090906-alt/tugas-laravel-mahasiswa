<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // 1. Set Primary Key ke 'nim'
    protected $primaryKey = 'nim';

    // 2. Matikan Auto Increment (karena NIM bukan angka urut otomatis)
    public $incrementing = false;

    // 3. Set Tipe Data Primary Key ke 'string'
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'matakuliah',
    ];
}