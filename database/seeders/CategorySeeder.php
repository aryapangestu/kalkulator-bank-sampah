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
        Category::create([
            'name' => 'kertas',
            'src' => 'kategori-img/rSoJmEyjmaACgEocMpWwYFnzJduUjtkDdihc2SGB.jpg',
            'description' => 'Deskripsi kertas.',
            'price' => 1000,
        ]);

        Category::create([
            'name' => 'plastik',
            'src' => 'kategori-img/77vVZx4JNqIbzV4VUREk1cJyebcZIC7BnkcgMNUj.jpg',
            'description' => 'Deskripsi plastik.',
            'price' => 2000,
        ]);

        Category::create([
            'name' => 'logam',
            'src' => '',
            'description' => 'Deskripsi logam.',
            'price' => 4000,
        ]);

        Category::create([
            'name' => 'kaca',
            'src' => '',
            'description' => 'Deskripsi kaca.',
            'price' => 3000,
        ]);
    }
}
