<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'phone', 'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lands(){
        return $this->hasMany('App\Land', 'user_id');
    }

    public function role(){
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function is($role){
        if($this->role->role == $role){
            return true;
        }
        return false;
    }

    public static function auth(Request $request){
        $token = $request->header('token');
        $user = User::where('token', $token)->first();
        return $user;
    }
}
