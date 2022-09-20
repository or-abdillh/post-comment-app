<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comments extends Seeder
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
                "commentable_type" => "App\Models\Post",
                "commentable_id" => 1,
                "body" => "Velit ex quis officia voluptate deserunt amet pariatur irure dolor aliquip anim magna irure do.",
                "date" => date('dd-m-y'),
            ];

            Comment::create($data);
        }
    }
}
