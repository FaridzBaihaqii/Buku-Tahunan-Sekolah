<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wakil extends Model
{
    use HasFactory;
    protected $table = 'wakil';
    protected $fillable = ['id_pemimpin','nama_wakil','foto_wakil'];
    protected $primaryKey = 'id_wakil';
    public $timestamps = false;
}
