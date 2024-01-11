<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = ['id_akun','nama_admin'];
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
}
