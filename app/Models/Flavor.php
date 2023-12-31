<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperFlavor
 */
class Flavor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function coffees(): BelongsToMany
    {
        return $this->belongsToMany(Coffee::class);
    }
}
