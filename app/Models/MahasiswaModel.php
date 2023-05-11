<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProdiModel;
use App\Models\KelasModel;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'prodi_id',
        'kelas_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'hp',
        'alamat'
    ];

    public function prodi()
    {
        return $this->belongsTo(ProdiModel::class, 'prodi_id', 'prodi_id');
    }
    
    public function kelas()
    {
        return $this->belongsTo(KelasModel::class, 'kelas_id', 'kelas_id');
    }
}
