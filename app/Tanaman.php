<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanaman';
    protected $fillable = ['id','nama_tanaman','keasaman','suhu','kelembaban'];
}
