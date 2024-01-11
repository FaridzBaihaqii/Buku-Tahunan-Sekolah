<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketua_bts extends Model
{
    use HasFactory;
    protected $table = 'ketua_bts';
    protected $fillable = ['kode_sekolah','nama_ketuabts','foto_ketuabts'];
    protected $primaryKey = 'id_ketua';
    public $timestamps = false;
}
