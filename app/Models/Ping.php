<?php

namespace App\Models;

class Ping extends BaseModel
{
    protected $fillable = [
        'state',
        'sequence',
    ];
}
