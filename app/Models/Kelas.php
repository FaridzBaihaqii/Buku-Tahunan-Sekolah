<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['kode_sekolah','nama_kelas'];
    protected $primaryKey = 'id_kelas';
    public $timestamps = false;
}
