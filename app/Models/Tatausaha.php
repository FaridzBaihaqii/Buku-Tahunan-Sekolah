<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatausaha extends Model
{
    use HasFactory;
    protected $table = 'tatausaha';
    protected $fillable = ['kode_sekolah','nama_tatausaha','foto_tatausaha','quotes_tatausaha'];
    protected $primaryKey = 'id_tatausaha';
    public $timestamps = false;
}
