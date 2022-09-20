<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x < 25; $x++ ) {
            $data = [
                "title" => "Dolore exercitation non ipsum culpa.",
                "content" => "Ea ad reprehenderit laborum non. Labore occaecat mollit amet ea consequat quis consectetur proident irure. Aliqua ullamco quis fugiat eu consequat ex minim adipisicing id labore sint id ex. Officia in exercitation ad non voluptate. Magna pariatur anim minim proident dolore laborum."
            ];

            Post::create($data);
        }
    }
}
