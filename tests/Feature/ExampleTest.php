<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Traits\TestResponse;
use Exception;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class ExampleTest extends TestCase {
    /**
     * A basic test example.
     */
    use TestResponse;

    public function test_all_route_pages()
    {
        // $routes = collect(Route::getRoutes());
        // $routes = $routes
        //     ->filter(fn($route) => in_array('GET', $route->methods()))
        //     ->reject(fn($route) => in_array('auth', $route->gatherMiddleware()))
        //     ->map(fn($route) => $route)->toArray();

        // dd($routes);
    }
}
