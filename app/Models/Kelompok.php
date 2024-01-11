<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;
    protected $table = 'kelompok';
    protected $fillable = ['id_kelas','nama_kelompok','foto_kelompok',];
    protected $primaryKey = 'id_kelompok';
    public $timestamps = false;
}
