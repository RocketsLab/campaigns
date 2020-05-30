<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailMessage extends Model
{
    protected $guarded = [];

    public function message()
    {
        return $this->morphOne(Message::class, 'messageable');
    }
}
