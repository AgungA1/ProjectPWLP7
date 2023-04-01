<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'kelas',
        'jurusan',
        'email',
        'no_hp',
    ];
}
