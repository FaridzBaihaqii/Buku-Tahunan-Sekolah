<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seragam extends Model
{
    use HasFactory;
    protected $table = 'seragam';
    protected $fillable = ['kode_sekolah','id_hari','nama_seragam','foto_seragam'];
    protected $primaryKey = 'id_seragam';
    public $timestamps = false;
}
