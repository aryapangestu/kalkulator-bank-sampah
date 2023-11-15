<?php

namespace Database\Seeders;

use App\Models\CategoryCollection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryCollection::create([
            'income_id' => '1',
            'category_name' => 'kertas',
            'total' => '1'
        ]);

        CategoryCollection::create([
            'income_id' => '1',
            'category_name' => 'plastik',
            'total' => '1'
        ]);
    }
}
