<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $table = 'registrant';
    protected $fillable = ['id','status','nama_lengkap','email','nohp','alamat','password'];
}
