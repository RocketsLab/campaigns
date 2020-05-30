<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $guarded = [];

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
