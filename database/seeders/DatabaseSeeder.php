<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Store;
use App\Models\Product;
use App\Models\PurchaseHistory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Store::create([
            'id' => 1,
            'name' => 'テスト店'
        ]);

        Category::create([
            'id' => 1,
            'name' => 'テストカテゴリー',
            'store_id' => 1,
        ]);

        Product::create([
            'id' => 1,
            'name' => 'テスト商品',
            'price' => 1000,
            'description' => 'テスト商品です',
            'image_path' => 'https://placehold.jp/150x150.png',
            'category_id' => 1,
        ]);

        Inventory::create([
            'product_id' => 1,
            'quantity' => 10,
        ]);

        PurchaseHistory::create([
            'product_id' => 1,
            'store_id' => 1,
            'category_id' => 1,
            'quantity' => 1,
        ]);
    }
}
