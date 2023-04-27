<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_admin_can_see_admin_panel(): void
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $response = $this->actingAs($user)->get(route('admin.products.index'));

        $response->assertStatus(200);
    }

    public function test_admin_can_delete_product(): void
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $product = Product::factory()->create();
        $this->actingAs($user)->get(route('admin.products.delete', ['product' => $product->id]));
        $this->assertEquals(0, Product::query()->count());

    }

//    public function test_admin_store_product(): void
//    {
//        $user = User::factory()->create(['is_admin' => 1]);
//        $response = $this->actingAs($user)->post(route('admin.products.create'),[
//            'name' => 'Name',
//            'short_description' => 'Short description',
//            'price' => '10',
//            'sale_price' => '5',
//            'image' => 'sdfg',
//            'description' => 'Description',
//        ]);
//
//        $response->assertSessionHasNoErrors();
//        $response->assertRedirect(route('admin.products.index'));
//        $this->assertCount(1, Product::all());
//
//        $this->assertDatabaseHas('products',[
//            'name' => 'Name',
//            'short_description' => 'Short description',
//            'price' => '10',
//            'description' => 'Description',
//        ]);
//
//    }


}
