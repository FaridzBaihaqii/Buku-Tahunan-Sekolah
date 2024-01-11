<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;
    protected $table = 'eskul';
    protected $fillable = ['kode_sekolah','nama_eskul','deskripsi_eskul','foto_eskul'];
    protected $primaryKey = 'id_eskul';
    public $timestamps = false;
}
