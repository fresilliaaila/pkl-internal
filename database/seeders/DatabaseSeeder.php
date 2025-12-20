<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;   // 🔥 WAJIB
use App\Models\Category;  // (opsional, tapi aman)

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. User
        $this->call(UserSeeder::class);

        // 2. Category
        $this->call(CategorySeeder::class);

        // 3. Product biasa
        Product::factory(50)->create();
        $this->command->info('✅ 50 products created');

        // 4. Product featured
        Product::factory(8)->featured()->create();
        $this->command->info('⭐ Featured products created');
    }
}
