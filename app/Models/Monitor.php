<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;

class Monitor extends BaseModel
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new TenantScope());
    }

    protected $fillable = [
        'tenant_id',
        'name',
        'target',
        'creator_id',
    ];

    public function creator() {
        return $this->belongsTo(User::class, 'creator_id', 'user_id');
    }

    public function pings() {
        return $this->hasMany(Ping::class, 'monitor_id', 'monitor_id');
    }

    public function getLastPing() {
        return $this->pings()->orderByDesc('sequence')->first();
    }
}
