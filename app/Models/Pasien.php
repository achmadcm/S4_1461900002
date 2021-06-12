<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table ='pasien';

    public $timestamps = false;

    protected $fillable = ['id', 'nama_pasien', 'alamat'];
}