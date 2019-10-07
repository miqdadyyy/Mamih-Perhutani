<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $role
 * @property string $title
 */
class Role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['role', 'title'];

    public function users(){
        return $this->hasMany('App\User', 'role');
    }
}
