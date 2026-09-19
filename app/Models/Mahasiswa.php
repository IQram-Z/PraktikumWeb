<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari konvensi jamak (opsional)
    protected $table = 'mahasiswas';

    // Kolom yang dapat diisi secara mass assignment
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'prodi',
        'semester',
    ];

    public function matakuliahs()
    {
        return $this->hasMany(Matakuliah::class, 'mahasiswa_id');
    }

}