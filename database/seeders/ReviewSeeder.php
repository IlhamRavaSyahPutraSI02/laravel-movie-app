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
            'name' => 'Jojo Bizarre Adventure',
            'user' => 'Jupri',
            'ratting' => '3/10',
            'date' => '15/03/24',
        ]);
        Review::create([
            'id' => 2,
            'name' => 'Naruto Shippudden',
            'user' => 'Asep',
            'ratting' => '9.5/10',
            'date' => '21/08/24',
        ]);
        Review::create([
            'id' => 3,
            'name' => 'One Piece',
            'user' => 'Hilal',
            'ratting' => '9.8/10',
            'date' => '10/05/24',
        ]);
        Review::create([
            'id' => 4,
            'name' => 'Norigami',
            'user' => 'Fauzan',
            'ratting' => '5/10',
            'date' => '03/09/24',
        ]);
        Review::create([
            'id' => 5,
            'name' => 'Wind Breaker',
            'user' => 'Jamal',
            'ratting' => '9/10',
            'date' => '13/05/24',
        ]);
    }
}
