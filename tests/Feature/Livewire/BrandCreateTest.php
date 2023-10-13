<?php

namespace Tests\Feature\Livewire;

use App\Livewire\BrandCreate;
use Livewire\Livewire;
use Tests\TestCase;

class BrandCreateTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(BrandCreate::class)
            ->assertStatus(200);
    }
}
