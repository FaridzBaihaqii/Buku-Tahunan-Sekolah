<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;
    protected $table = 'sambutan';
    protected $fillable = ['id_sekolah','id_jenis_sambutan','isi_sambutan'];
    protected $primaryKey = 'id_sambutan';
    public $timestamps = false;
}
