<?php

use App\Enums\Coffee\CoffeeAcidity;
use App\Enums\Coffee\CoffeeBitterness;
use App\Enums\Coffee\CoffeeDensity;
use App\Enums\Coffee\CoffeeFormat;
use App\Enums\Coffee\CoffeeRoasting;
use App\Enums\Coffee\CoffeeType;
use App\Models\Brand;
use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('format')->nullable();
            $table->text('description')->nullable();
            $table->foreignIdFor(Country::class)->constrained();
            $table->foreignIdFor(Brand::class)->constrained()->cascadeOnDelete();
            $table->string('roasting')->nullable();
            $table->boolean('no_caffeine')->default(FALSE);
            $table->unsignedInteger('price')->nullable();
            $table->integer('sca_grade')->nullable();
            $table->string('density')->nullable();
            $table->string('acidity')->nullable();
            $table->string('bitterness')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
