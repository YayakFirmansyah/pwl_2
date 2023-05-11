<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MahasiswaModel;

class KelasModel extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'kelas_id';
    
    public function mahasiswa()
    {
        return $this->hasMany(MahasiswaModel::class);
    }
}
