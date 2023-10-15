<?php

namespace App\Models;

use App\Enums\Coffee\CoffeeRoasting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @mixin IdeHelperCoffee
 */
class Coffee extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'roasting',
        'brand_id',
        'country_id',
        'price',
        'sca_grade',
        'type',
        'format',
        'no_caffeine',
        'density',
        'acidity',
        'bitterness',
    ];

    protected $casts = [
        'roasting' => CoffeeRoasting::class,
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function flavors(): BelongsToMany
    {
        return $this->belongsToMany(Flavor::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
