<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property float $ph
 * @property float $temperature
 * @property float $humidity
 * @property float $oksygen
 * @property int $texture
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 */
class Land extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'ph', 'temperature', 'humidity', 'oksygen', 'texture'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
