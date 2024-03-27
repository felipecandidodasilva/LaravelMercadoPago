<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create(['name' => 'Daminhas']);
        Category::factory()->create(['name' => 'Varal de Data']);
        Category::factory()->create(['name' => 'Buque de Pinguin']);
    }
}
