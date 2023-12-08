<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    /**
     * Get all of the domains for the Tenant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domains(): HasMany
    {
        return $this->hasMany(Domain::class);
    }

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
            'email',
            'password',
        ];
    }

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = Hash::make($value);
    }
}
