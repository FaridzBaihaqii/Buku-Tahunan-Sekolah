<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    protected $fillable = ['visi','misi','nama_sekolah','foto_sekolah'];
    protected $primaryKey = 'kode_sekolah';
    public $timestamps = false;

}
