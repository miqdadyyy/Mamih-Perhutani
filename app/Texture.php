<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property float $value_start
 * @property float $value_end
 * @property string $particle
 */
class Texture extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'texture';

    /**
     * @var array
     */
    protected $fillable = ['value_start', 'value_end', 'particle'];

}
