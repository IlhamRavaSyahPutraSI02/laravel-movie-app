<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'nomer' => '1',
            'poster' => 'movie-01.jpg' ,
            'name' => 'Jojo Bizarre Adventure',
            'user' => 'Udin-kunn',
            'ratting' => '2.5/10',
            'date' => '10 jan 2023',
        ],
        [
            'id' => 2,
            'nomer' => '2',
            'poster' => 'movie-02.jpg',
            'name' => 'Noragami',
            'user' => 'Asep-san',
            'ratting' => '3.5/10',
            'date' => '22 Apr 2023',
        ],
        [
            'id' => 3,
            'nomer' => '3',
            'poster' => 'movie-03.jpg' ,
            'name' => 'Wind Breaker',
            'user' => 'Jamal-sama',
            'ratting' => '7.5/10',
            'date' => '16 Mei 2024',
        ],
        [
            'id' => 4,
            'nomer' => '4',
            'poster' => 'movie-05.jpg' ,
            'name' => 'Naruto Shippudden',
            'user' => ' Ozy-chan',
            'ratting' => '9.5/10',
            'date' => ' 19 Oct 2024',
        ],
        [
            'id' => 5,
            'nomer' => '5',
            'poster' => 'movie-06.jpg' ,
            'name' => 'One Piece',
            'user' => ' Iyo-kunn',
            'ratting' => '9.8/10',
            'date' => '12 Mei 2024',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
