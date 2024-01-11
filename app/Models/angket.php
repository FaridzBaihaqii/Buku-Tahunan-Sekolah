<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angket extends Model
{
    use HasFactory;
    protected $table = 'angket';
    protected $primaryKey = 'id_angket';
    protected $fillable = ['id_kelas','nama_angket','foto_angket'];
    public $timestamps = false;

    // ada join an dari id_kelas jadi hati hati
}
