<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—he is only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'title' => 'Naruto Shippudden',
            'poster' => 'movie-05.jpg',
            'genre' => 'Action',
            'synopsis' => 'Naruto: Shippuden is the sequel to the popular anime series, Naruto. It follows the continuing adventures of Naruto Uzumaki, a young ninja who dreams of becoming the Hokage, the leader of his village.',
        ],
        [
            'id' => 5,
            'title' => 'One Piece',
            'poster' => 'movie-06.jpg',
            'genre' => 'Adventure',
            'synopsis' => 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha s shōnen manga magazine Weekly Shōnen Jump since July 22, 1997, and has been collected into 105 tankōbon volumes as of March 2023. The story follows the adventures of Monkey D. Luffy, a young boy who dreams of becoming the King of the Pirates. Luffy sets sail on the Grand Line with his crew of Straw Hat Pirates in search of the legendary treasure One Piece left by the previous Pirate King, Gol D. Roger.',
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
