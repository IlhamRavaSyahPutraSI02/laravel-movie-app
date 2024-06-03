<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Jupri',
            'ratting' => '3/10',
            'date' => '15/03/24',
        ]);
        Review::create([
            'id' => 2,
            'movie_id' => '4',
            'user' => 'Asep',
            'ratting' => '9.5/10',
            'date' => '21/08/24',
        ]);
        Review::create([
            'id' => 3,
            'movie_id' => '5',
            'user' => 'Hilal',
            'ratting' => '9.8/10',
            'date' => '10/05/24',
        ]);
        Review::create([
            'id' => 4,
            'movie_id' => '2',
            'user' => 'Fauzan',
            'ratting' => '5/10',
            'date' => '03/09/24',
        ]);
        Review::create([
            'id' => 5,
            'movie_id' => '3',
            'user' => 'Jamal',
            'ratting' => '9/10',
            'date' => '13/05/24',
        ]);
    }
}
