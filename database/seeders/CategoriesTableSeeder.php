<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Uncategorized',
                'text' => 'Tidak berkategori.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Life Style',
                'text' => 'Gaya hidup.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('categories')->insert($categories);
    }
}
