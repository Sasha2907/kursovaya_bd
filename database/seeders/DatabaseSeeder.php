<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            ['name' => 'Шторы'],
            ['name' => 'Тюль'],
            ['name' => 'Римские шторы'],
            ['name' => 'Покрывала'],
            ['name' => 'Декоративные подушки'],
        ];
        foreach ($categories as $category) {
            Categories::create($category);
        }


        // \App\Models\User::factory(10)->create();
    }
}
