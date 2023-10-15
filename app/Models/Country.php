<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperCountry
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function coffees(): HasMany
    {
        return $this->hasMany(Coffee::class);
    }
}
