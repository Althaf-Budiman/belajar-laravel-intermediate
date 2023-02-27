<?php

namespace Tests\Feature;

use App\Data\Foo;
use App\Data\Bar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection() {
        $food = new Foo();
        $bar = new Bar($food);

        assertEquals('foo and bar', $bar->bar());
    }
}
