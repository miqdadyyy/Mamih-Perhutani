<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property float $ph
 * @property float $temperature
 * @property float $humidity
 * @property float $oksygen
 * @property int $texture
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Plant extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['name', 'ph', 'temperature', 'humidity', 'oksygen', 'texture'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
