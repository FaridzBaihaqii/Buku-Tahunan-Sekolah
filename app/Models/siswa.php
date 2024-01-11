<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['id_kelas','nama_siswa','sosmed_siswa','foto_siswa','quotes_siswa'];
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;
}
