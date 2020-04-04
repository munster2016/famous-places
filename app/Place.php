<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name', 'type',
    ];

    public function photos()
    {
        return $this->hasMany('App\Photos');
    }
}
