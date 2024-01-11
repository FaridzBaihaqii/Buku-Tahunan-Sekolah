<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemimpin_sekolah extends Model
{
    use HasFactory;
    protected $table = 'pemimpin_sekolah';
    protected $fillable = ['kode_sekolah','nama_pemimpin','foto_pemimpin','quotes_pemimpin'];
    protected $primaryKey = 'id_pemimpin';
    public $timestamps = false;
}
