<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_sambutan extends Model
{
    use HasFactory;
    protected $table = 'jenis_sambutan';
    protected $fillable = ['isi_sambutan'];
    protected $primaryKey = 'id_jenis_sambutan';
    public $timestamps = false;
}
