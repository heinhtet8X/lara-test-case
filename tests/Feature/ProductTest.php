<?php

namespace Tests\Feature;

use App\Http\Traits\TestResponse;
use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase {
    /**
     * A basic feature test example.
     */

    use TestResponse, DatabaseTransactions;

    public function test_product_list(): void
    {
        $this->contentResponse('/products');
    }

    public function test_product_store_and_edit_show(): void
    {
        $product = $this->createFactory(Product::class);

        $this->assertDatabaseHas('products', [
            'name' => $product->name,
        ]);

        Product::findOrFail($product->id)->update([
            "name"        => 'HHA',
            "qty"         => $product->qty,
            "price"       => $product->price,
            "category_id" => $product->category_id,
        ]);

        $this->assertDatabaseMissing('products', [
            'name' => $product->name,
        ]);

        $this->contentResponse("/products/$product->id");
    }
}
