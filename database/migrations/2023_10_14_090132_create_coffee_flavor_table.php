<?php

use App\Models\Coffee;
use App\Models\Flavor;
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
        Schema::create('coffee_flavor', function (Blueprint $table) {
            $table->foreignIdFor(Coffee::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Flavor::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffee_flavor');
    }
};
