<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => "Lorem Ipsum",
                'slug' => "lorem-ipsum",
                'text' => "Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.",
                'category_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "What is Lorem Ipsum?",
                'slug' => "what-is-lorem-psum",
                'text' => "From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.",
                'category_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "Origins and Discovery",
                'slug' => "origins-and-discovery",
                'text' => "Lorem ipsum began as scrambled, nonsensical Latin derived from Cicero's 1st-century BC text De Finibus Bonorum et Malorum.",
                'category_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "Fuzzy Beginnings",
                'slug' => "fuzzy-eginnings",
                'text' => "Creation timelines for the standard lorem ipsum passage vary, with some citing the 15th century and others the 20th.",
                'category_id' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

        ];

        \DB::table('posts')->insert($posts);
    }
}
