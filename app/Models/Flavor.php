<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Flavor extends Model
{
    use HasFactory;

    public function coffees(): BelongsToMany {
        return $this->belongsToMany(Coffee::class);
    }

}
