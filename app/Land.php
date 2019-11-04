<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $plant_id
 * @property float $ph
 * @property float $temperature
 * @property float $humidity
 * @property float $oksygen
 * @property int $texture
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Plant $plant
 */
class Land extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'plant_id', 'ph', 'temperature', 'humidity', 'oksygen', 'texture', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plant()
    {
        return $this->belongsTo('App\Plant');
    }

    public function texture_(){
        return $this->belongsTo('App\Texture');
    }
}
