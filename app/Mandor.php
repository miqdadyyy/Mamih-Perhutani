<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mandor extends Model
{
    protected $table = 'mandor';
    protected $fillable = ['id','user_id','nama_lengkap','nohp','alamat'];
}
