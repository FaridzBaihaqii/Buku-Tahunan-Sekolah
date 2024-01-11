<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'tbl_akun';
    protected $primaryKey = 'id_akun';
    protected $fillable = ['username','password','role'];

    // nanti ganti jdi admin
    // public function tata_usaha()
    // {
    //     return $this->hasMany(TataUsaha::class, 'id_user');
    // }
}
