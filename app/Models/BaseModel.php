<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use HasUuids, SoftDeletes;

    public function __construct(array $attributes = [])
    {
        //Replace primaryKeyName = (classname)_id
        parent::__construct($attributes);
        $className = explode('\\', get_class($this));
        $className = array_pop($className);
        $string = preg_replace('/(?<=\\w)(?=[A-Z])/', '_$1', $className);
        $string = strtolower($string);
        $this->primaryKey = $string . '_id';
    }
}
